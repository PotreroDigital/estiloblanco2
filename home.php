<?php include 'controles/funciones.php' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SquareAway
Description: A four-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130804

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EstiloBlanco</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Open+Sans:400,300,600,700,800" rel="stylesheet" />
<link href="productos.css" rel="stylesheet" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
  <style>

	</style>
<div id="logo" class="container">
	<h1><a href="#" class="icon icon-spinner"><span>Estilo Blanco</span></a></h1>
</div>

  <?php
      $rol="secretario";

        if ($rol=="admin"){
          menu_admin();
      } elseif ($rol=="secretario") {
          menu_secretario();
      } else {
          menu_user();
      }
          ?>

<!--
<div id="header">
	<div id="menu" class="container">
		<ul>
			<li class="current_page_item"><a href="home.php" accesskey="1" title="">Homepage</a></li>
			<li><a href="productos.php" accesskey="1" title="">Productos</a></li>
			<li><a href="#Marcas" accesskey="2" title="">Marcas</a></li>
			<li><a href="login.php" accesskey="3" title="">log in</a></li>
			<!--<li><a href="#" accesskey="4" title="">Careers</a></li>
			<li><a href="#" accesskey="5" title="">Contact Us</a></li>-->
		</ul>
	</div>
</div>


<div id="page-wrapper">
	<!-- Slider -->
	<div class="slideshow-container">
		<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
			<img src="images/pic08.jpg" style="width:100%">
			<div class="text"></div>
		</div>

		<div class="mySlides fade">
					 <div class="numbertext">2 / 3</div>
					 <img src="images/pic12.jpg" style="width:100%">
					 <div class="text"></div>
		</div>

		<div class="mySlides fade">
					 <div class="numbertext">3 / 3</div>
					 <img src="images/pic13.jpg" style="width:100%">
					 <div class="text"></div>
		</div>
	</div>

	<!-- Espacio para JavaScript -->
	<script src="hoja.js">
	</script>
	<!-- termina Slider -->
	<!--<div id="banner" class="container"><a href="#"><img src="images/pic08.jpg" width="1200" height="300" alt="" /></a></div>
-->
	<div id="featured" class="container">
		<div class="box">
			<div class="title">
					<h2>Nosotros</h2>
			</div>
			<p><strong>Estilo Blanco</strong> se caracteriza por su gran equilibrio entre calidad precio que hace que los clientes nos vuelvan a elegir.</p>
		</div>
		<div class="title">
				<h2 id='space' class='gridsection'><a href="productos.php" style="text-decoration:none">Productos</a></h2>
		</div>
		<div id="box1"> <a id='space' class='grid section' href="#"><img src="images/pic07.jpg" width="282" height="220" alt="" /></a>
			<h2 class="subtitle">Cortinas</h2>
			<p>En cuanto cortinas, es uno de los productos que mas es vendido en nuestro showroom, contamos con marcas como Alcoyana, Arcoiris, Disney entre otras.</p>
			<ul class="contact">
				<li><a href="https://www.facebook.com/" target="_blank" class="icon icon-facebook"><span></span></a></li>
				<li><a href="https://www.instagram.com/" target="_blank" class="icon icon-instagram"><span>Pinterest</span></a></li>
				<li><a href="https://twitter.com/" target="_blank" class="icon icon-twitter"><span>Google+</span></a></li>
			</ul>
		</div>
		<div id="box2"> <a href="#"><img src="images/pic09.jpg" alt="" /></a>
			<h2 class="subtitle">Toallas</h2>
			<p>Toallas de muy buena calidad en diferentes tamaños y colores para todos los gustos contamos con marcas como Palette, Cannon, Camaro, entre otras.</p>
			<ul class="contact">
				<li><a href="https://www.facebook.com/" target="_blank" class="icon icon-facebook"><span></span></a></li>
				<li><a href="https://www.instagram.com/" target="_blank" class="icon icon-instagram"><span>Pinterest</span></a></li>
				<li><a href="https://twitter.com/" target="_blank" class="icon icon-twitter"><span>Google+</span></a></li>
			</ul>
		</div>



		<div id="box3"><a href="#"><img src="images/pic10.jpg" alt="" /></a>
			<h2 class="subtitle">Sabanas</h2>
			<p>Juegos variados de sabanas para niños y adultos de alta costura de marcas como Fantasia, Piñata, Disney.</p>
			<br>
			<br>
			<ul class="contact">
				<li><a href="https://www.facebook.com/" target="_blank" class="icon icon-facebook"><span></span></a></li>
				<li><a href="https://www.instagram.com/" target="_blank" class="icon icon-instagram"><span>Pinterest</span></a></li>
				<li><a href="https://twitter.com/" target="_blank" class="icon icon-twitter"><span>Google+</span></a></li>
			</ul>
		</div>

		<div id="box4"> <a href="#"><img src="images/pic11.jpg" alt="" /></a>
			<h2 class="subtitle">Almohadas</h2>
			<p>Contamos con almohadas viscoelástica cervical para dolores de cuello y espalda y las claisicas almhodas para sillones y camas.</p>
			<br>
			<br>
			<ul class="contact">
				<li><a href="https://www.facebook.com/" target="_blank" class="icon icon-facebook"><span></span></a></li>
				<li><a href="https://www.instagram.com/" target="_blank" class="icon icon-instagram"><span>Pinterest</span></a></li>
				<li><a href="https://twitter.com/" target="_blank" class="icon icon-twitter"><span>Google+</span></a></li>
			</ul>
		</div>
	</div>
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2 id='Marcas' class='grid section'>Marcas<span class="byline"> de nuestro showroom</span></h2>
			</div>
			<p>Trabajamos con mas de <strong>20 marcas</strong> como Alcoyana, Palette,
				Camaro, Disney, Pierre Balmain, Arcoiris entre muchas mas con años de experiencia en el mercado de la venta de productos de blanqueria.</p>
			<a href="#" class="button icon icon-arrow-right">Learn More</a>
		</div>
		<div id="sidebar"><a href="#"><img src="images/pic14.png" width="588" height="250" alt="" /></a></div>
	</div>
</div>
	<!-- Empieza precios -->
	<!-- termina  -->
<!--<div id="footer-wrapper">
	<div id="footer" class="container">
		<div id="fbox1">
			<h2>Maecenas luctus</h2>
			<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum.</p>
			<a href="#" class="button icon icon-arrow-right">Learn More</a> </div>
		<div id="fbox2">
			<h2>Integer gravida</h2>
			<p>Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris.</p>
			<a href="#" class="button icon icon-arrow-right">Learn More</a> </div>
		<div id="fbox3">
			<h2>Praesent scelerisque</h2>
			<p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper eleifend.</p>
			<a href="#" class="button icon icon-arrow-right">Learn More</a> </div>
		<div id="fbox4">
			<h2>Etiam rhoncus volutpat</h2>
			<p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper eleifend.</p>
			<a href="#" class="button icon icon-arrow-right">Learn More</a> </div>
	</div>
</div>
<!-- Empieza form -->
<div class="container1">
  <div class="row header">
    <h1 id='Contacto' class='grid section'>Contacto &nbsp;</h1>
    <h3>Complete el siguiente formulario para obtener más información.</h3>
  </div>


  <div class="row body">
    <form action="#">
      <ul>
        <li>
          <p class="left">
            <label for="first_name">Nombre</label>
            <input type="text" name="first_name" placeholder="John" />
          </p>
          <p class="pull-right">
            <label for="last_name">Apellido</label>
            <input type="text" name="last_name" placeholder="Smith" />
          </p>
        </li>

        <li>
					<p class="pull-right">
						<label for="dni">dni</label>
						<input type="text" name="last_name" placeholder="dni" />
					</p>
          <p>
            <label for="email">Email <span class="req">*</span></label>
            <input type="email" name="email" placeholder="john.smith@gmail.com" />
          </p>
        </li>
        <li><div class="divider"></div></li>
        <li>
          <label for="comments">Comentarios</label>
          <textarea cols="46" rows="3" name="comments"></textarea>
        </li>

        <li>
          <input class="btn btn-submit" type="submit" value="Submit" />
          <small> o presiona <strong>enter</strong></small>
        </li>

      </ul>
    </form>
  </div>
</div>
<!-- termina form -->
<div id="copyright">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
