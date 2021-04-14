<!-- url amigables -->

<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
    <link rel="stylesheet" href="views/assets/css/plugins.css">
    <link rel="stylesheet" href="views/assets/css/colors.css">
    <link rel="stylesheet" href="views/assets/css/style.css">
    <!-- Modernizr
    ================================================== -->
    <script src="views/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
 <?php
    // include "views/components/menu.php";
    include "views/components/header.php";

     if(isset($_GET["route"])){

         if($_GET["route"]=="registro" ||
            $_GET["route"]=="home"||
            $_GET["route"]=="view-admin"||
            $_GET["route"]=="usuarios-admin"){
             include "pages/".$_GET["route"].".php";
         }

     }else{
         include "pages/home.php";
     }
        include "views/components/footer.php";
 ?>
    <!-- <script src="views/assets/js/usuario.js"></script> -->
</body>
</html>