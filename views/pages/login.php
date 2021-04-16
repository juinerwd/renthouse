<div class="container container-register">
    <form class="row form-register" action="" method="POST" autocomplete="off">
        <div class="container-input-login">
            <div class="col-6 mb-3 input">
                <label for="formControlInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="formControlInputEmail" placeholder="name@example.com">
            </div>
            <div class="col-6 mb-3 input">
                <label for="formControlInputPassword" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="formControlInputPassword" placeholder="Contraseña">
            </div>
        </div>
        <div class="">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Recordar
                </label>
            </div>
        </div>
        <div class="btn-login">
            <button class="btn btn-primary">Registrarme</button>
        </div>
        <div class="enlace-login">
            <p>¿No tienes una cuenta? <a href="registro">Registrarme</a></p>
        </div>
    </form>
</div>

<?php
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        require_once "./controllers/login.controller.php";
        $ins_login = new loginControlador();

        echo $ins_login->iniciar_sesion_controlador();
    }
?>