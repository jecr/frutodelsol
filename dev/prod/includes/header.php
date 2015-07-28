<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mezcal Fruto del Sol</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" href="favicon.png" type="image/png" sizes="32x32"> 
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<meta name="description" content="Expresiones de Sabor es una empresa 100% mexicana, que en sus Mezcales destaca la devoción, respeto y trato justo con los productores artesanos Oaxaqueños que por generaciones han elaborado este maravilloso producto, conservando la tradición para México y un regalo para el mundo entero.">
		<meta name="keywords" content="Expresiones de Sabor, Oaxaca, Mezcal, Fruto del Sol">
		<meta name="author" content="jorge.ecro@gmail.com">
	</head>
	<body>
		<div class="white"></div>
		<div class="main">
			<div class="yllw"></div>
			<div class="content">
				<a href="index.php"><div class="logo"></div></a>
				<div class="yllw">
					<div class="tw"><a href="https://twitter.com/frutodelsol" target="blank"><i class="fa fa-twitter"></i></a></div>
					<div class="fb"><a href="https://www.facebook.com/mezcalfrutodelsol" target="blank"><i class="fa fa-facebook"></i></a></div>
				</div>
				<div class="menu">
					<ul>
						<?php if ( isset($thisPage) ) { ?>
						<a href="index.php"><li <?php if ( $thisPage == "inicio" ) { echo 'class="active"'; } ?> >INICIO</li></a>
						<a href="quienes.php"><li <?php if ( $thisPage == "quienes" ) { echo 'class="active"'; } ?> >QUIÉNES SOMOS</li></a>
						<a href="productos.php"><li <?php if ( $thisPage == "productos" ) { echo 'class="active"'; } ?> >PRODUCTOS</li></a>
						<!-- <a href=""><li>DÓNDE COMPRAR</li></a>
						<a href=""><li>NOTICIAS</li></a> -->
						<a href="contacto.php"><li <?php if ( $thisPage == "contacto" ) { echo 'class="active"'; } ?> >CONTACTO</li></a>
						<?php } ?>
					</ul>
				</div>