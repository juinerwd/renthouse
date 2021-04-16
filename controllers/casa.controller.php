<?php
class CasaController
{
    public static function insertCasaController()
    {

        // if (isset($_POST["submit"])) {

        // }

        if (isset($_POST['houseTittle'])) {

            // $target_dir = "views/assets/img/apartment/";
            // // $target_file = "";
            // $target_file = $target_dir . basename($_FILES["mainImage"]["name"]);
            // $uploadOk = 1;
            // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // echo $target_file;


            // $check = getimagesize($_FILES["mainImage"]["tmp_name"]);
            // if ($check !== false) {
            //     echo "File is an image - " . $check["mime"] . ".";
            //     $uploadOk = 1;
            // } else {
            //     echo "File is not an image.";
            //     $uploadOk = 0;
            // }
            // if (
            //     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            //     && $imageFileType != "gif"
            // ) {
            //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            //     $uploadOk = 0;
            // }
            // if ($uploadOk == 0) {
            //     echo "Sorry, your file was not uploaded.";
            //     // if everything is ok, try to upload file
            // } else {
            //     if (move_uploaded_file($_FILES["mainImage"]["tmp_name"], $target_file)) {
            //         echo "The file " . htmlspecialchars(basename($_FILES["mainImage"]["name"])) . " has been uploaded.";
            //     } else {
            //         echo "Sorry, there was an error uploading your file.";
            //     }
            // }
            $tabla = "casa";
            $datosCasa = array(
                "titulo" => $_POST["houseTittle"],
                "ciudad" => $_POST["city"],
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

    public static function selectCasaController()
    {
        $tabla = "casa";

        $queryProperties = CasaModel::selectCasaModel($tabla);

        return $queryProperties;
    }
}
