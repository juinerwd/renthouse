<?php

    require_once "validation.model.php";
    
    class loginModel extends ValidationModel {

        protected static function iniciar_sesion_modelo($datos){
            $sql = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE email=:Email AND password=:Pass");

            $sql->bindParam(":Email", $datos['Email'], PDO::PARAM_STR);
            $sql->bindParam(":Pass", $datos['Pass'], PDO::PARAM_STR);

            $sql->execute();
            return $sql;
        }

    }