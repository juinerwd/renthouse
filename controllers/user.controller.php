<?php
    if($peticionAjax){
        require_once "../models/user.model.php";
    }else{
        require_once "./models/user.model.php";
    }

    class UserController extends UserModel {
        
        public static function ctrIdentidadSelect(){
            $tabla = "documento";

            $respueta = UserModel::mdlIdentidadSelect($tabla);

            return $respueta;
        }

        public static function ctrRegister(){
            $name=ValidationModel::limpiar_cadena($_POST['name']);
            $lastname=ValidationModel::limpiar_cadena($_POST['lastName']);
            $tipoDocumento=ValidationModel::limpiar_cadena($_POST['documentType']);
            $NumeroID=ValidationModel::limpiar_cadena($_POST['NID']);
            $email=ValidationModel::limpiar_cadena($_POST['email']);
            $pass=ValidationModel::limpiar_cadena($_POST['password']);
            $checkTC=ValidationModel::limpiar_cadena($_POST['checkTC']);
            $recidencia=ValidationModel::limpiar_cadena($_POST['recidencia']);

            if ($name == "" || $lastname == "" || $tipoDocumento == "" || $NumeroID == "" || $email == "" || $pass == "" || $checkTC == "" || $recidencia == "") {
                echo "
                    <script>
                        Swal.fire({
                            icon: 'success',
                            confirmButtonText: `Ok`,
                            text: 'Registro exitoso!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = 'view-arrendatario';
                            }
                        })
                    </script>
                ";
                exit();
            }

            if (ValidationModel::verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚ ]{2,35}", $name)) {
                // echo "El nombre no coincide con el formato solicitado";
                echo "
                    <script>
                        Swal.fire({
                            icon: 'success',
                            confirmButtonText: `Ok`,
                            text: 'Registro exitoso!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = 'view-arrendatario';
                            }
                        })
                    </script>
                ";
                exit();
            }
            if (ValidationModel::verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚ ]{2,35}", $lastname)) {
                // echo "El nombre no coincide con el formato solicitado";
                echo "
                    <script>
                        Swal.fire({
                            icon: 'success',
                            confirmButtonText: `Ok`,
                            text: 'Registro exitoso!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = 'view-arrendatario';
                            }
                        })
                    </script>
                ";
                exit();
            }
            if (ValidationModel::verificar_datos("[a-zA-Z0-9$@.-]{6,100}", $pass)) {
                // echo "La contraseña no coincide con el formato solicitado";
                echo "
                    <script>
                        Swal.fire({
                            icon: 'success',
                            confirmButtonText: `Ok`,
                            text: 'Registro exitoso!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = 'view-arrendatario';
                            }
                        })
                    </script>
                ";
                exit();
            }
            // else{
            //     $clave = ValidationModel::encryption($pass);
            // }

            // Objeto con los datos del formulario
            $datos_usuario_reg=[
                "Name"=>$name,
                "Apellidos"=>$lastname,
                "Iddocumento"=>$tipoDocumento,
                "Documento"=>$NumeroID,
                "Email"=>$email,
                "Pass"=>$pass,
                "Politica"=>$checkTC,
                "Idrol"=>2,
                "Activo"=>1,
                "Recidencia"=>$recidencia
            ];
            $agregar_usuario=UserModel::create_user_model($datos_usuario_reg);

            echo $agregar_usuario;

            if ($agregar_usuario == "ok") {
                //echo "Usuario registrado";
                if (headers_sent()) {
                    return "<script> window.location.href='http://localhost/renthouse/'; </script>";
                } else {
                    return header("Location: http://localhost/renthouse/");
                }
            } else {
                if (headers_sent()) {
                    return "<script> window.location.href='http://localhost/renthouse/registro'; </script>";
                } else {
                    return header("Location: http://localhost/renthouse/registro");
                }
            }
        }
    }
