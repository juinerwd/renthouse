<?php
    $peticionAjax = true;
    if (false) {

    } else {
        # code...
        session_start(['name'=>'SRC']);
        session_unset();
        session_destroy();
        header("Location: http://localhost/renthouse");
        exit();
    }
    