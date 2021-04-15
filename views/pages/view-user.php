<?php

$usuario= new formUserController();
$usuario-> houseRentController();

?>

<!-- ====== Page Header ====== --> 
<div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Formulario</h2>
                    <p class="page-description">Formulario de solicitud de apartamento</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

   <!-- ====== Breadcrumbs Area====== --> 
   <div class="breadcrumbs-area">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="breadcrumbs">
                       <span class="first-item">
                        <a href="home">Inicio</a></span>
                       <span class="separator">&gt;</span>
                       <a href="apartmentone">Apartamento familiar</a></span>
                       <span class="separator">&gt;</span>
                       <span class="last-item">Formulario para rentar apartamento</span>
                   </div>
               </div><!-- /.col-md-12 -->
           </div><!-- /.row -->
       </div><!-- /.container -->
   </div><!-- /.breadcrumbs-area -->

            <div class="col-md-4">
                <div class="apartment-sidebar">                    
                    <div class="widget_rental_search clerafix">					
                        <div class="form-border gradient-border">
                            <form action="" method="POST" class="advance_search_query booking-form">
                                <div class="form-bg seven">
                                    <div class="form-content">
                                        <h2 class="form-title">Renta este apartamento</h2>

                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input type="text" name="nombres" placeholder="Andrés Felipe">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input type="text" name="apellidos" placeholder="Pérez Pérez">
                                        </div>
                                        <div class="form-group">
                                            <label>Número de documento</label>
                                            <input type="text" name="documento" placeholder="10234567890">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Documento</label>
                                            <select name="tipoDocumento">                        
                                                <option>Selecciona</option>
                                                <option value="0">Cedula</option>
                                                <option value="1">Cedula extranjera</option>
                                                <option value="2">Pasaporte</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" placeholder="ejemplo@hotmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha Inicio</label>
                                            <input type="date" name="fechaInicio">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha Fin</label>
                                            <input type="date" name="fechaFin">
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="button default-template-gradient button-radius">Solicitar reserva</button>
                                        </div>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>