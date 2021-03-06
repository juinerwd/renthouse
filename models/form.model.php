<?php
require_once "conexion.php";

class form_UserModel{
    public static function houseRent_Model($datosReserva, $tablaReserva){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tablaReserva (fechaInicio,fechaFin) 
        VALUES ( :fechaInicio, :fechaFin)");

        $stmt->bindParam(":fechaInicio", $datosReserva["fechaInicio"], PDO::PARAM_STR);
        $stmt->bindParam(":fechaFin", $datosReserva["fechaFin"], PDO::PARAM_STR);
        
        if($stmt->execute()){

            return "ok";
        }else{
            return "error";
        
        }  
        

    }
}