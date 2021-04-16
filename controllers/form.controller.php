<?php

class formUserController{

    public static function houseRentController(){

        if(isset($_POST["fechaInicio"])){

            $tablaReserva="reserva";
            $datosReserva=array("fechaInicio"=>$_POST['fechaInicio'],
                                "fechaFin"=>$_POST['fechaFin']
            );

            $respuesta = formUserModel::houseRentModel($datosReserva, $tablaReserva);

            if ($respuesta == "ok") {

                echo "
                        <script>
                        Swal.fire({
                            icon: 'success',
                            confirmButtonText: `Ok`,
                            text: 'Registro exitoso!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = 'view-arrendatario';
                            }
                        })
                        
                        </script>
                        ";
            } else {
                echo "
                        <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo realizar el registro!'
                        })
                        </script>
                        ";
            }
            
        }

    }
}