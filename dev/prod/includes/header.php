<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mezcal Fruto del Sol</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="white"></div>
		<div class="main">
			<div class="yllw"></div>
			<div class="content">
				<a href="index.php"><div class="logo"></div></a>
				<div class="yllw">
					<div class="fb"><img src="img/fb.png" alt="Facebook" /></div>
					<div class="tw"><img src="img/tw.png" alt="Twitter" /></div>
				</div>
				<div class="menu">
					<ul>
						<?php if ( isset($thisPage) ) { ?>
						<a href="quienes.php"><li <?php if ( $thisPage == "quienes" ) { echo 'class="active"'; } ?> >QUIÉNES SOMOS</li></a>
						<a href="productos.php"><li <?php if ( $thisPage == "productos" ) { echo 'class="active"'; } ?> >PRODUCTOS</li></a>
						<!-- <a href=""><li>DÓNDE COMPRAR</li></a>
						<a href=""><li>NOTICIAS</li></a> -->
						<a href="contacto.php"><li <?php if ( $thisPage == "contacto" ) { echo 'class="active"'; } ?> >CONTACTO</li></a>
						<?php } ?>
					</ul>
				</div>