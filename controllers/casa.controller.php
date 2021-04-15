<?php
class CasaController
{
    public static function insertCasaController()
    {

        if (isset($_POST['houseTittle'])) {


            $tabla = "casa";
            $datosCasa = array(
                "titulo" => $_POST["houseTittle"],
                "descripcion" => $_POST["description"],
                "imgPrincipal" => $_POST["mainImage"],
                "imgOtras" => $_POST["otherImg"],
                "banos" => $_POST["restroom"],
                "habitaciones" => $_POST["rooms"],
                "parqueadero" => $_POST["parking"],
                "internet" => $_POST["internet"],
                "precio" => $_POST["price"],
                "otrosServs" => $_POST["moreServices"]
            );

            $insert = CasaModel::insertCasaModel($tabla, $datosCasa);


            if ($insert == "ok") {

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
