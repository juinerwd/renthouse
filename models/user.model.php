<?php
    require_once 'conexion.php';
    require_once 'validation.model.php';

    class UserModel extends ValidationModel {

        public static function mdlIdentidadSelect($tabla){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        protected static function create_user_model($dato){
            $sql = Conexion::conectar()->prepare("INSERT INTO usuario(nombres, apellidos, email, password, recidencia, politica, idrol, activo, documento_iddocumento, documento) VALUES(:Nombres, :Apellidos, :Email, :Password, :Recidencia, :Politica, :Idrol, :Activo, :Iddocumento, :Documento)");

            $sql->bindParam(":Nombres", $dato['Name'], PDO::PARAM_STR);
            $sql->bindParam(":Apellidos", $dato['Apellidos'], PDO::PARAM_STR);
            $sql->bindParam(":Email", $dato['Email'], PDO::PARAM_STR);
            $sql->bindParam(":Password", $dato['Pass'], PDO::PARAM_STR);
            $sql->bindParam(":Recidencia", $dato['Recidencia'], PDO::PARAM_STR);
            $sql->bindParam(":Politica", $dato['Politica'], PDO::PARAM_STR);
            $sql->bindParam(":Idrol", 2, PDO::PARAM_INT);
            $sql->bindParam(":Activo", 1, PDO::PARAM_INT);
            $sql->bindParam(":Iddocumento", $dato['Iddocumento'], PDO::PARAM_INT);
            $sql->bindParam(":Documento", $dato['Documento'], PDO::PARAM_INT);

            $sql->execute();
            return $sql;
        }
    }