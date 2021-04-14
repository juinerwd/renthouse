    
<?php
    // include("../vistas/contenidos/header.php");
?>
    
    <!-- ====== BANNER ARRENDATARIO ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Tus casas</h2>
                    <p class="page-description">Todas las casas que tienes para reservar</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area======= --> 
    <div class="breadcrumbs-area background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Inicio</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Tus casas</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

	<!-- ====== Availability Area======= --> 
	<div class="availability-area two">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="heading-content-three">
	                    <h2 class="title">Solicitud para propiedad</h2>
	                    <h5 class="sub-title">Datos para<span>solitar autorización de la propiedad</span></h5>
	                </div><!-- /.Availability-content -->
	            </div><!-- /.col-md-12 -->
	        </div><!-- /.row --> 
	        <div class="row">
	        	<div class="col-md-12">
                    <!-- <table>
                        <tr>
                            <th>Bedrooms</th>
                            <th>Size</th>
                            <th>Car Parking</th>
                            <th>Bath</th>
                            <th>Furniture</th>
                        </tr>
                        <tr>
                            <td data-title="Bedrooms">Mini 03</td>
                            <td data-title="Size">Mini 3000sc</td>
                            <td data-title="Car Parking">Mini 02</td>
                            <td data-title="Bath">Mini 03</td>
                            <td data-title="Furniture">Yes</td>
                        </tr>
                    </table> -->
                    <table>
                        <tr>
                            <th>Nombre completo</th>
                            <th>Número de celular</th>
                            <th>Correo electrónico</th>
                            <th>Adultos</th>
                            <th>Niños</th>
                            <th>Fecha de llegada</th>
                            <th>Fecha de salida</th>
                        </tr>
                        <tr>
                            <td data-title="Name">Nombre completo</td>
                            <td data-title="Phone Number">+58 1234567890</td>
                            <td data-title="Email">ejemplo@hotmail.com</td>
                            <td data-title="Member">2</td>
                            <td data-title="Children">0</td>
                            <td data-title="Date1">DD/MM/AAAA</td>
                            <td data-title="Date2">DD/MM/AAAA</td>
                        </tr>
                    </table>

                                <div class="col-md-4">
                                <div class="apartment-sidebar">                    
                                    <div class="widget_rental_search clerafix">					
                                        <div class="form-border gradient-border">
                                            <form action="booking.html" method="get" class="advance_search_query booking-form">
                                                <div class="form-bg seven">
                                                    <div class="form-content">
                                                        <h2 class="form-title">Publica un apartamento</h2>
                                                        <div class="form-group">
                                                            <label>Título</label>
                                                            <input type="text" name="FirstName" placeholder="Ejemplo: Casa de campo">
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label>Descripción</label>
                                                            <input type="tel" name="phone number" placeholder="Descripción de la casa">
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label>Imagen principal</label>
                                                            <input type="email" name="Email" placeholder="example@domain.com">
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label>Imagenes auxiliares</label>
                                                            <input type="number" step="1" min="1" max="100" name="quantity" value="1" title="Qty" size="4" class="input-text">
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label>¿Cuenta con servicio de wifi?</label>
                                                            <input type="number" step="1" min="1" max="100" name="quantity" value="1" title="Qty" size="4" class="input-text">
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label>Baños</label>
                                                            <input type="number" step="1" min="1" max="100" name="quantity" value="1" title="Qty" size="4" class="input-text">
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label>Número de habitaciones</label>
                                                            <input type="number" step="1" min="1" max="100" name="quantity" value="1" title="Qty" size="4" class="input-text">
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label>Servicios adicionales</label>
                                                            <textarea name="message" placeholder="Message" class="form-controller"></textarea>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <button type="submit" class="button default-template-gradient button-radius">Solicitar reserva</button>
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.form-content -->
                                                </div><!-- /.form-bg -->
                                            </form> <!-- /.advance_search_query -->
                                        </div><!-- /.form-border -->
                                    </div><!-- /.widget_rental_search -->

                                    <!-- <div class="apartments-content seven post clerafix">
                                        <div class="image-content">
                                            <a href="#"><img class="overlay-image" src="assets/images/apartment-ad.png" alt="about" /></a>
                                        </div>
                                    </div> -->
                                </div><!-- /.apartment-sidebar -->
                            </div> <!-- .col-md-4 -->


                    <div class="text-center">
                        <button type="submit" class="button nevy-button button-radius default-template-gradient">Enviar solicitud</button>
                        <!-- <a href="#" class="button nevy-button button-radius default-template-gradient">Cancelar reserva</a> -->
                    </div><!-- /.text-center -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
	    </div><!-- /.container  -->
	</div><!-- /.Availability-area -->


<?php
    include("../vistas/contenidos/footer.php");
?>

    <!-- <div>
    <form method="post">
            <label>Match no:</label><br>
            <input type="text" name="txtmatch"><br>
            <label>Stage:</label><br>
            <input type="text" name="txtstage"><br>
            <label>Date:</label><br>
            <input type="text" name="txtdate"><br>
            <label>Results:</label><br>
            <input type="text" name="txtresults"><br>
            <label>Decided by:</label><br>
            <input type="text" name="txtdecided"><br>
            <label>Goal score:</label><br>
            <input type="text" name="txtscore"><br>
            <label>Venue id:</label><br>
            <input type="text" name="txtvenue"><br>
            <label>Referee id:</label><br>
            <input type="text" name="txtreferee"><br>
            <label>Audence:</label><br>
            <input type="text" name="txtaudence"><br>
            <label>Plr of match:</label><br>
            <input type="text" name="txtplr"><br>
            <label>Stop 1 sec:</label><br>
            <input type="text" name="txtstop1"><br>
            <label>Stop 2 sec:</label><br>
            <input type="text" name="txtstop2"><br>
            <input type="submit" name="register" value="Agregar"><br>
        <a href="mostrar.php">Regresar</a>
    </form>
</div> -->
<?php 

// include ("con_db.php");

// if (isset($_POST['register'])) {

// if (strlen($_POST['txtmatch']) >= 1 &&
//     strlen($_POST['txtstage']) >= 1 &&
//     strlen($_POST['txtdate']) >= 1 &&
//     strlen($_POST['txtresults']) >= 1 &&
//     strlen($_POST['txtdecided']) >= 1 &&
//     strlen($_POST['txtscore']) >= 1 &&
//     strlen($_POST['txtvenue']) >= 1 &&
//     strlen($_POST['txtreferee']) >= 1 &&
//     strlen($_POST['txtaudence']) >= 1 &&
//     strlen($_POST['txtplr']) >= 1 &&
//     strlen($_POST['txtstop1']) >= 1 &&
//     strlen($_POST['txtstop2']) >= 1) {

//     $matchno=trim($_POST['txtmatch']);
//     $stage=trim($_POST['txtstage']);
//     $date=trim($_POST['txtdate']);
//     $results=trim($_POST['txtresults']);
//     $decidedby=trim($_POST['txtdecided']);
//     $goalscore=trim($_POST['txtscore']);
//     $venueid=trim($_POST['txtvenue']);
//     $referee=trim($_POST['txtreferee']);
//     $audence=trim($_POST['txtaudence']);
//     $plrofmatch=trim($_POST['txtplr']);
//     $stop1=trim($_POST['txtstop1']);
//     $stop2=trim($_POST['txtstop2']);
//     $consulta="INSERT INTO match_mast(match_no, play_stage, play_date, results, decided_by, goal_score, venue_id, referee_id, audence, plr_of_match, stop1_sec, stop2_sec) VALUES ('$matchno','$stage','$date','$results','$decidedby','$goalscore','$venueid','$referee','$audence','$plrofmatch','$stop1','$stop2')";
//     $resultado = mysqli_query($conex,$consulta);
//     if ($resultado) {
//         ?>
<!-- //         <h3 class="ok">¡Datos ingresados correctamente! Espere la aprobación del administrador.</h3> -->
     <?php
//     } else{
//         ?>
<!-- //         <h3 class="bad">Ha ocurrido un error</h3> -->     <?php
//     }
//     } else {
//         ?>
         <!-- <h3 class="bad">¡Ingrese todos los datos!</h3> -->
     <?php
// }
// }

?>
