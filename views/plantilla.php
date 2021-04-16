<!-- url amigables -->
<?php

$ruta = RouteController::ctrRuta();

?>
<!doctype html>

<html class="no-js" lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>¿A dónde quieres llegar?</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="views/assets/images/house-logo.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <script src="https://kit.fontawesome.com/9ed9e07150.js" crossorigin="anonymous"></script>

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">


    <!-- CSS
    ================================================== -->
    <!-- bootstrap datepicker -->
	<link rel="stylesheet" href="views/assets/css/plugins/bootstrap-datepicker.standalone.min.css">
    <!-- datetimepicker -->
    <link rel="stylesheet" href="views/assets/css/plugins/jquery.datetimepicker.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="views/assets/css/plugins/fullcalendar.min.css">

    <link rel="stylesheet" href="views/assets/css/plugins.css">
    <link rel="stylesheet" href="views/assets/css/colors.css">
    <link rel="stylesheet" href="views/assets/css/style.css">
    <link rel="stylesheet" href="views/assets/css/perfil.css">
    <link rel="stylesheet" href="views/assets/css/forms.css">
  
    <!-- JS CALENDARIO
    ================================================== -->

    <!-- bootstrap datepicker -->
	<script src="views/assets/js/plugins/bootstrap-datepicker.min.js"></script>
    <!-- datetimepicker -->
    <script src="views/assets/js/plugins/jquery.datetimepicker.full.min.js"></script>
    <!-- fullCalendar -->
    <script src="views/assets/js/plugins/moment.js"></script>
    <!-- https://fullcalendar.io/docs/background-events-demo -->	
    <script src="views/assets/js/plugins/fullcalendar.min.js"></script>
    
    <!-- Alerts =================================== -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
    <?php
    // include "views/components/menu.php";
    include "views/components/header.php";

    //session_start();
    $peticionAjax=false;
    if(isset($_GET["route"])){
         if($_GET["route"]=="registro" ||
            $_GET["route"]=="view-arrendatario"||
            $_GET["route"]=="request-arrendatario"||
            $_GET["route"]=="home"||
            $_GET["route"]=="view-admin"||
            $_GET["route"]=="usuarios-admin" ||
            $_GET["route"]=="apartmentone" ||
            $_GET["route"]=="info-perfil" ||
            $_GET["route"]=="view-user" ||
            $_GET["route"]=="login"
        ) {
            include "pages/" . $_GET["route"] . ".php";
        }
    }else {
        include "views/pages/home.php";
    }
    
    include "views/components/footer.php";
 ?>
    <!-- <p>
        <script src="views/assets/js/arrendatario.js"></script>
    </p> -->
    <script src="views/assets/js/usuarios.js"></script>     
    <!-- Modernizr
    ================================================== -->
    <script src="views/assets/js/vendor/modernizr-2.8.3.min.js"></script>
                        	<!-- All The JS Files
	================================================== --> 
	<script src="views/assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="views/assets/js/plugins.js"></script>
	<script src="views/assets/js/main.js"></script>
</body>
</html>