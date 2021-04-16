<?php

require_once 'conexion.php';

class CasaModel{
    
    public static function insertCasaModel($tabla, $datosCasa){
        $stmt= Conexion::conectar()->prepare("INSERT INTO $tabla (titulo, ciudad, descripcion, imgprincipal, numhabitaciones, numbanos, parqueadero, internet, servadicional, precio, disponible, aprobado) 
        VALUES (:titulo, :ciudad, :descrip, :imgprinc, :numhabit, :numbanos, :parqu, :intern, :servadic, :precio, 0 , 1 )");

        $stmt->bindParam(":titulo", $datosCasa["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $datosCasa["ciudad"], PDO::PARAM_STR);
        $stmt->bindParam(":descrip", $datosCasa["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":imgprinc", $datosCasa["imgPrincipal"], PDO::PARAM_STR);
        $stmt->bindParam(":numhabit", $datosCasa["habitaciones"], PDO::PARAM_INT);
        $stmt->bindParam(":numbanos", $datosCasa["banos"], PDO::PARAM_INT);
        $stmt->bindParam(":parqu", $datosCasa["parqueadero"], PDO::PARAM_INT);
        $stmt->bindParam(":intern", $datosCasa["internet"], PDO::PARAM_INT);
        $stmt->bindParam(":servadic", $datosCasa["otrosServs"], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datosCasa["precio"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";
        }else{
            return "error";
        
        }

    }

    public static function selectCasaModel($tabla) {
        $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}