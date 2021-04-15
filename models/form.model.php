<?php
require_once "conexion.php";

class formUserModel{
    public static function houseRentModel($datos, $tabla){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombres,apellidos,documento,tipodocumento,email,fechaInicio,fechaFin) 
        VALUES (:nombres, :apellidos, :tipodocumento, :email, :fechaInicio, :fechaFin)");

        $stmt->bindParam(":nombres", $datos["nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(":tipodocumento", $datos["tipodocumento"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":fechaInicio", $datos["fechaInicio"], PDO::PARAM_STR);
        $stmt->bindParam(":fechaFin", $datos["fechaFin"], PDO::PARAM_STR);
        
       
       
        

    }
}