<?php

require_once "../controllers/user.select.controllers.php";
require_once "../models/user.select.model.php";

class AjaxUser{
    public function deleteUser($idUsuario){
        $respuesta = userController::deleteUserController($idUsuario);
        return $respuesta;
    }
}

if(isset($_POST["idBorrar"])){
    $delete = new AjaxUser();
    $delete->deleteUser($_POST["idBorrar"]);
}