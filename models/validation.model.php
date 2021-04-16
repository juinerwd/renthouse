<?php
    require_once 'conexion.php';
    class ValidationModel {

        //permite ejecutar consultas simples
        protected static function ejecutar_consulta_simple($consulta){
            $sql=Conexion::conectar()->prepare($consulta);
            $sql->execute();
            return $sql;
        }

        //funciones para enciptar y desencriptar contraseñas
        public function encryption($string){
            $output = FALSE;
            $key = hash('sha256', "P%P-@Rh-SERVICE-KEY");
            $iv = substr(hash('sha256', "P%P1-@Rh2-SERVICE-VALUE"), 0, 16);
            $output = openssl_encrypt($string, "AES-256-CBC", $key, 0, $iv);
            $output = base64_encode($output);
            return $output;
        }
        protected static function decryption($string){
            $key = hash('sha256', "P%P-@Rh-SERVICE-KEY");
            $iv = substr(hash('sha256', "P%P1-@Rh2-SERVICE-VALUE"), 0, 16);
            $output = openssl_decrypt(base64_decode($string), "AES-256-CBC", $key, 0, $iv);
            return $output;
        }
        //limpiar las cadenas de inyecciones sql
        protected static function limpiar_cadena($cadena){
            //trim elimina espacios en blanco
            $cadena = trim($cadena);
            //stripcslashes quita las barras invertidas \
            $cadena = stripcslashes($cadena);
            //str_ireplace toma la busqueda y reemplaza 
            $cadena = str_ireplace("<script>", "", $cadena);
            $cadena = str_ireplace("</script>", "", $cadena);
            $cadena = str_ireplace("<script src>", "", $cadena);
            $cadena = str_ireplace("<script type>", "", $cadena);
            $cadena = str_ireplace("SELECT + FROM", "", $cadena);
            $cadena = str_ireplace("DELETE FROM", "", $cadena);
            $cadena = str_ireplace("INSERT INTO", "", $cadena);
            $cadena = str_ireplace("--", "", $cadena);
            $cadena = str_ireplace("^", "", $cadena);
            $cadena = str_ireplace("[", "", $cadena);
            $cadena = str_ireplace("]", "", $cadena);
            $cadena = str_ireplace("==", "", $cadena);
            $cadena = str_ireplace(";", "", $cadena);

            return $cadena;
        }

        protected static function verificar_datos($filtro, $cadena) {
            if (preg_match("/^".$filtro."$/", $cadena)) {
                return false;
            } else {
                return true;
            }
            
        }
    }