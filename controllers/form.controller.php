<?php

class formUserController{
    public static function houseRentController(){

        if(isset($_POST["documento"])){
            $tabla="reserva";
            $datos=array("nombres"=>$_POST['nombres'],
                "apellidos"=>$_POST['apellidos'],
                "documento"=>$_POST['documento'],
                "tipodocumento"=>$_POST['tipoDocumento'],
                "email"=>$_POST['email'],
                "fechaInicio"=>$_POST['fechaInicio'],
                "fechaFin"=>$_POST['fechaFin']
            );

            $respuesta = formUserModel::houseRentModel($datos, $tabla);

            var_dump($respuesta);
            
        }

    }
}