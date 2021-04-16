<?php

    $infoSelect = UserController::ctrIdentidadSelect();

?>
<div class="container container-register">
    <form class="row form-register" action="">
        <div class="container-input">
            <div class="col-6 mb-3 input">
                <label for="formControlInputName" class="form-label">Nombres</label>
                <input type="text" name="name" class="form-control" id="formControlInputName" placeholder="Nombres">
            </div>
            <div class="col-6 mb-3 input">
                <label for="formControlInputLastname" class="form-label">Apellidos</label>
                <input type="text" name="lastName" class="form-control" id="formControlInputLastname" placeholder="Apellidos">
            </div>
        </div>
        <div class="container-input">
            <div class="col-6 mb-3 input">
                <label for="formControlSelect1" class="form-label">Tipo de identificación</label>
                <select class="form-control form-select" name="documentType" aria-label="Default select example" id="formControlSelect1">
                    <option selected>Seleccionar</option>
                    <?php foreach($infoSelect as $key => $value): ?>
                        <option value="<?php echo $value["iddocumento"] ?>"><?php echo $value["tipodocumento"] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="col-6 mb-3 input">
                <label for="formControlInputId" class="form-label">Numero identificación</label>
                <input type="text" name="NID" class="form-control" id="formControlInputId" placeholder="Número">
            </div>
        </div>
        <div class="container-input">
            <div class="col-6 mb-3 input">
                <label for="formControlInputRecidencia" class="form-label">Recidencia</label>
                <input type="text" name="recidencia" class="form-control" id="formControlInputRecidencia" placeholder="Recidencia">
            </div>
        </div>
        <div class="container-input">
            <div class="col-6 mb-3 input">
                <label for="formControlInputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="formControlInputEmail" placeholder="name@example.com">
            </div>
            <div class="col-6 mb-3 input">
                <label for="formControlInputPassword" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" id="formControlInputPassword" placeholder="Contraseña">
            </div>
        </div>
        <div class="">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="checkTC" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Aceptas Terminos y Condiciones
                </label>
            </div>
        </div>
        <div class="container-button">
            <div class="enlace-register">
                <p>¿Ya tienes una cuenta? <a href="#">Iniciar Sesión</a></p>
            </div>
            <div class="btn-registrar">
                <button class="btn btn-primary">Registrarme</button>
            </div>
        </div>
    </form>
</div>
