<?php

class formUserController{
    public static function houseRentController(){

        if(isset($_POST["fechaInicio"])){

            $tabla="reserva";
            $datos=array(
                // "nombres"=>$_POST['nombres'],
                //         "apellidos"=>$_POST['apellidos'],
                //         "documento"=>$_POST['documento'],
                //         "tipodocumento"=>$_POST['tipodocumento'],
                //         "email"=>$_POST['email'],
                        "fechaInicio"=>$_POST['fechaInicio'],
                        "fechaFin"=>$_POST['fechaFin']
            );

            $respuesta = formUserModel::houseRentModel($datos, $tabla);

            if($respuesta=="ok"){
        
                echo "
                    
                <script>

                    Swal.fire({
                        icon: 'success',
                        confirmButtonText: `Ok`,
                        text: 'Registro exitoso!',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = 'usuarios';
                        }
                        }) 
                    
                    </script>
                    ";
                }else{
                    echo "
                    
                    <script>
                    
                        Swal.fire({
                            icon: 'error',
                            title: '¡Error!',
                            text: 'No se pudo realizar el registro.',
                        })
                    
                    </script>
                    ";
                }
            }
        }
}