<?php

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
                // echo "Datos obligatorios";
                
                exit();
            }

            // Objeto con los datos del formulario
            $datos_usuario_reg=[
                "Name"=>$name,
                "Apellidos"=>$lastname,
                "Iddocumento"=>$tipoDocumento,
                "Documento"=>$NumeroID,
                "Email"=>$email,
                "Pass"=>$pass,
                "Politica"=>$checkTC,
                "Recidencia"=>$recidencia
            ];
            $agregar_usuario=UserModel::create_user_model($datos_usuario_reg);
        }
    }
