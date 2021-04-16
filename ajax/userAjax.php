<?php

    $peticionAjax = true;
    
    if (isset($_POST['name'])) {
        # code...
        require_once "../controllers/user.controller.php";
        $ins_usuario = new UserController();

        if (isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['documentType']) && isset($_POST['NID']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['checkTC']) && isset($_POST['recidencia'])) {
            echo $ins_usuario->ctrRegister();
        }
    } else {
        # code...
        session_start(['name'=>'SRC']);
        session_unset();
        session_destroy();
        header("Location: http://localhost/renthouse");
        exit();
    }
    