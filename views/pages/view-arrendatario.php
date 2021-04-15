    <?php
    // include("../vistas/contenidos/header.php");
    ?>

    <!-- ====== BANNER ARRENDATARIO ====== -->
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Tus Propiedades</h2>
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
                            <a href="home">Inicio</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Tus propiedades</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->
    <div class="text-center">
        <a href="request-arrendatario" class="button nevy-button button-radius default-template-gradient">Publicar Casa</a>
    </div><!-- /.text-center -->

    <!-- ====== Availability Area======= -->
    <div class="availability-area two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-three">
                        <h2 class="title">Lista de propiedades</h2>
                        <h5 class="sub-title">Visualiza a continuación las propiedades que tienes activas y las que están por aprobar</span></h5>
                    </div><!-- /.Availability-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content">
                            <a href="apartment-four.php"><img src="views/assets/img/apartment/habitacion-4.jpg" alt="apartment" /></a>
                        </div>

                        <div class="text-content">
                            <div class="top-content">
                                <h3><a href="apartment-four.php">Casa para pareja</a></h3>
                                <span>
                                    <i class="fa fa-map-marker"></i>
                                    Cali, Valle del Cauca
                                </span>
                            </div><!-- /.top-content -->
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-bed"></i> 1 Habitación
                                </div>
                                <div class="meta-bath-room">
                                    <i class="fa fa-bath"></i>2 Baños
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">
                                    $120.000
                                </div>
                                <div class="share-meta dropup pull-right">
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </li>
                                    </ul>
                                    <div class="badge">Activo - Inactivo</div>
                                </div>
                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.col-md-3 -->
            </div>
        </div>
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
                //         
                ?>
                <!-- //         <h3 class="ok">¡Datos ingresados correctamente! Espere la aprobación del administrador.</h3> -->
                <?php
                //     } else{
                //         
                ?>
                <!-- //         <h3 class="bad">Ha ocurrido un error</h3> --> <?php
                                                                                //     }
                                                                                //     } else {
                                                                                //         
                                                                                ?>
                <!-- <h3 class="bad">¡Ingrese todos los datos!</h3> -->
                <?php
                // }
                // }

                ?>