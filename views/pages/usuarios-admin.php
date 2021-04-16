    
<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h2 class="page-title">Listado de Usuarios</h2>
                       
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->           
</div><!-- /.page-header -->
<div class="breadcrumbs-area">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="breadcrumbs">
                       <span class="first-item">
                        <a href="view-admin">Volver</a></span>
                       <span class="separator">&gt;</span>
                       <span class="last-item">Apartamento familiar</span>
                   </div>
               </div><!-- /.col-md-12 -->
           </div><!-- /.row -->
       </div><!-- /.container -->
   </div><!-- /.breadcrumbs-area -->

<div class="row">
	<div class="col-md-12">
                    
        <table class="table table-striped">
            <thead>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Recidencia</th>
                              
                <th>Rol</th>
                <th>activo</th>
                <th>Tipo Documento</th>
                <th>Documento</th>
                <th>opciones</th>
                
            </thead>
            <tbody>
                <?php 
                $usuario= new adminController();
                $usuario-> selectUserController();              
                ?>
                
            </tbody>
           
            
           
        </table>

       
    </div><!-- /.col-md-12 -->
</div><!-- /.row -->
