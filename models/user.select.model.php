<?php
require_once "conexion.php";

class adminModel{

    public static function selectUserModel($tabla, $rol, $documento){
        $stmt=Conexion::conectar()->prepare("SELECT u.idusuario,u.nombres,u.apellidos,u.email,u.password,u.recidencia,r.rol,u.activo,d.tipodocumento,u.documento
        FROM usuario u inner join rol r on r.idrol = u.idrol inner join documento d on d.iddocumento = u.documento_iddocumento");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function deleteUserModelo($tabla, $id){
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idusuario =:id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
    }
}