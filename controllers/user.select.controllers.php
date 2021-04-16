<?php

class userController{

    public static function selectUserController(){

        $tabla="usuario";
        $rol="rol";
        $documento="documento";
        $sql= userModel::selectUserModel($tabla, $rol, $documento);

        foreach($sql as $datos => $value){
            echo "
                <tr>
                    <td>{$value["nombres"]}</td>
                    <td>{$value["apellidos"]}</td>
                    <td>{$value["email"]}</td>    
                    <td>{$value["recidencia"]}</td>
                    
                    <td>{$value["rol"]}</td>
                    <td>{$value["activo"]}</td>
                    <td>{$value["tipodocumento"]}</td>
                    <td>{$value["documento"]}</td>
                    <td>
                        <button type='button' idBorrar='{$value["idusuario"]}' class='button nevy-button button-radius borrar'>Eliminar</button>
                    </td>
                </tr>
            ";
        } 
    }
    public static function deleteUserController($id){
        $tabla ="usuario";
        $respuesta= userModel::deleteUserModelo($tabla, $id);
        echo $respuesta;

    }
}