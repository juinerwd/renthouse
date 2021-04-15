<?php

    class ValidationModel {
        //limpiar las cadenas de inyecciones sql
        protected function limpiar_cadena($cadena){
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