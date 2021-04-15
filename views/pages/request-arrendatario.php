<?php
// include("../vistas/contenidos/header.php");
$casa = new CasaController;
$casa->insertCasaController();
?>
<!-- ====== BANNER ARRENDATARIO ====== -->
<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Publicar propiedad</h2>
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
                    <span class="last-item">Publicar propiedad</span>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->
<div class="text-center">
    <a href="view-arrendatario" class="button nevy-button button-radius default-template-gradient">Ver tus propiedades</a>
</div><!-- /.text-center -->

<!-- ====== Availability Area======= -->
<div class="availability-area two">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-three">
                    <h2 class="title">Solicitud para propiedad</h2>
                    <h5 class="sub-title">Diligencia el formulario para solicitar agregar una propiedad</span></h5>
                </div><!-- /.Availability-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="row">

            <div class="col-md-9">
                <div class="apartment-sidebar">
                    <div class="widget_rental_search clerafix">
                        <div class="form-border gradient-border">



                            <form method="POST" class="advance_search_query booking-form">
                                <div class="form-bg seven">
                                    <div class="form-content">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" name="houseTittle" placeholder="Ejemplo: Casa de campo">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="tel" name="description" placeholder="Descripción de la casa">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Imagen principal</label>
                                            <input type="file" name="mainImage" placeholder="example@domain.com">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="files">Imagenes auxiliares</label>
                                            <input type="file" id="files" name="otherImg" multiple>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Baños</label>
                                            <input type="number" step="1" min="1" max="10" name="restroom" value="1" title="Qty" size="4" class="input-text">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Número de habitaciones</label>
                                            <input type="number" step="1" min="1" max="20" name="rooms" value="1" title="Qty" size="4" class="input-text">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Parqueadero</label>
                                            <input type="text" name="parking" placeholder="Parqueadero">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Internet</label>
                                            <input type="text" name="internet" placeholder="Parqueadero">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Precio</label>
                                            <input type="number" min="0" max="100000000" step="any" name="price" placeholder="0" required="required">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Servicios adicionales</label>
                                            <textarea name="moreServices" placeholder="Message" class="form-controller"></textarea>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="button default-template-gradient button-radius">Enviar solicitud</button>
                                        </div>
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


        <!-- /.text-center -->
    </div><!-- /.row -->
</div><!-- /.container  -->
</div><!-- /.Availability-area -->