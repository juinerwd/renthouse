<?php

    if($peticionAjax){
        require_once "../models/login.model.php";
    }else{
        require_once "./models/login.model.php";
    }

    class loginControlador extends loginModel {

        public function iniciar_sesion_controlador(){

            $email=ValidationModel::limpiar_cadena($_POST['email']);
            $pass=ValidationModel::limpiar_cadena($_POST['pass']);

            // Comprobando que los datos no vengan vacios
            if ($email == "" || $pass == "") {
                echo '<script>
                    Swal.fire({
                        title: "Error inesperado",
                        text: "Todos los campos son obligatorios",
                        type: "error",
                        confirmButtonText: "Aceptar"
                    });
                </script>';
                exit();
            }

            /** Validación del E-mail y comprobando si el email no existe en la DB */
            // Comprobar E-mail
            if ($email != "") {
                // Validación del E-mail
                if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
                    // Comprobando si el email no existe en la DB
                    $check_email=ValidationModel::ejecutar_consulta_simple("SELECT email FROM usuario WHERE email='$email'");
                    if ($check_email->rowCount() == 0) {
                        echo '<script>
                            Swal.fire({
                                title: "Error inesperado",
                                text: "El E-mail no existe",
                                type: "error",
                                confirmButtonText: "Aceptar"
                            });
                        </script>';
                        exit();
                    }
                } else {
                    echo '<script>
                        Swal.fire({
                            title: "Error inesperado",
                            text: "El E-mail no es valido",
                            type: "error",
                            confirmButtonText: "Aceptar"
                        });
                    </script>';
                    exit();
                }
            }
            

            // if (mainModel::verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $pass)) {
            //     // echo "La contraseña no coincide con el formato solicitado";
            //     echo '<script>
            //         Swal.fire({
            //             title: "Error inesperado",
            //             text: "La contraseña no cumple con los requicitos",
            //             type: "error",
            //             confirmButtonText: "Aceptar"
            //         });
            //     </script>';
            //     exit();
            // }

            // $pass=mainModel::decryption($pass);

            // // Objeto con los datos del formulario
            $datos_usuario_login=[
                "Email"=>$email,
                "Pass"=>$pass
            ];

            $login_user=loginModel::iniciar_sesion_modelo($datos_usuario_login);

            if ($login_user->rowCount() == 1) {
                $row = $login_user->fetch();
                session_start(['name'=>'SRC']);
                $_SESSION['id_SRC']=$row['idusuario'];
                $_SESSION['email_SRC']=$row['email'];

                if (headers_sent()) {
                    return "<script> window.location.href='http://localhost/renthouse/'; </script>";
                } else {
                    return header("Location: http://localhost/renthouse/");
                }
            } else {
                echo '<script>
                    Swal.fire({
                        title: "Error inesperado",
                        text: "No se pudo iniciar sesión",
                        type: "error",
                        confirmButtonText: "Aceptar"
                    });
                </script>';
            }
        }

    }