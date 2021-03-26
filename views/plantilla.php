<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Tutoriales, Gaming, Musica, Blog-Familiar">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>WEB - Soley </title>
	
	<link href="views/assets/images/Logo_borroso.ico" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="views/assets/css/bootstrap.min.css"/>
	<!-- <link rel="stylesheet" href="views/assets/css/font-awesome.min.css"/> -->
	<link rel="stylesheet" href="views/assets/css/magnific-popup.css"/>
	<link rel="stylesheet" href="views/assets/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="views/assets/css/animate.css"/>
	<!-- <link rel="stylesheet" href="views/assets/fontawesome/slicknav.min.css"/> -->

	<link rel="stylesheet" href="views/assets/fontawesome/css/all.css">
	<script defer src="views/assets/fontawesome/js/all.js"></script>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="views/assets/css/style.css"/>

	

</head>
	<body>
		<?php include "includes/heder.php"; ?>

		<?php 
		if (isset($_GET["ruta"])) {
			if ($_GET["ruta"] == 'inicio') {
				include "includes/slider.php";
			} else{

			}
		} else{
			include "includes/slider.php";
		}
		 ?>
		<?php 
		    if (isset($_GET["ruta"])) {
		      if ($_GET["ruta"] == 'inicio' ||
		          $_GET["ruta"] == 'postUsbSafely'||
		          $_GET["ruta"] == 'postAnyDesk') {
		        include "".$_GET["ruta"].".php";
		      }else{
		        include "includes/404.php";
		      }
		    }else{
		      include "inicio.php";
		    } 
    ?>

		<?php include "includes/footer.php"; ?>

		<!--====== Javascripts & Jquery ======-->
	<script src="views/assets/js/jquery-3.2.1.min.js"></script>
	<script src="views/assets/js/bootstrap.min.js"></script>
	<script src="views/assets/js/jquery.slicknav.js"></script>
	<script src="views/assets/js/owl.carousel.min.js"></script>
	<script src="views/assets/js/circle-progress.min.js"></script>
	<script src="views/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="views/assets/js/main.js"></script>
	</body>
</html>