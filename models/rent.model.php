<?php
require_once "conexion.php";

class formUserModel{
    public static function houseRentModel($datos, $tabla){
        $stmt = Conexion::conectar()->prepare(
            "INSERT INTO $tabla (fechaInicio, fechaFin) VALUE (:fechaInicio, :fechaFin) 
             SELECT idusuario
             FROM usuario");

        // $stmt->bindParam(":nombres", $datos["nombres"], PDO::PARAM_STR);
        // $stmt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
        // $stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
        // $stmt->bindParam(":tipodocumento", $datos["tipodocumento"], PDO::PARAM_STR);
        // $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":fechaInicio", $datos["fechaInicio"], PDO::PARAM_STR);
        $stmt->bindParam(":fechaFin", $datos["fechaFin"], PDO::PARAM_STR);    
        
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
    }

    // public static function selectUserModel($tabla){
    //     $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

    //     $stmt->execute();
    //     return $stmt->fetchAll();
    // }
}