<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>LeasingJYD</title>
		<link rel="stylesheet" type="text/css" href="JYDestilos.css">
		<link rel="stylesheet" type="text/css" href="css/slideshow.css">
		<link rel="stylesheet" type="text/css" href="css/social.css">
		<link rel="stylesheet" type="text/css" href="fonts.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/slideshow.js"></script>
		<script type="text/javascript" src="js/jquery.slides.min.js"></script>
		<script type="text/javascript" src="js/jquery.slides.js"></script>
		<script type="text/javascript" src="js/fundamentos2.js"></script>
		<link rel="shortcut icon" href="imagen/home.ico" type="image/x-icon">		
	</head>
<body>
	<header>
		<div class="logotipo">
				<img src="imagen/holi.png" width="1000" alt="">
			</div>
		<div id="ingreso">
			<form action= "loginconexion.php" method="POST">
			<table border="1">	
			<tr>
            <td><label>Usuario: </label></td>
            <td><input type="text" name="user" class="caja" id="usuario"/></td>
           	<td><label>Contraseña: </label></td>
            <td><input type="password" name="password" class="caja" id="contrasenia"/></td>
            <td><input type="submit" value="Enviar" class="btn" id="btn"/></td>
            </tr>
            <tr>
            <td colspan="2"><a href="olvidocontra.php">¿Olvidó su contraseña?</a></td>
            <td colspan="2"><span id="alerta">
            <?php
			if ($_POST["error"]="si"){
				echo "Introduce tus datos";
			}else{
				echo "<span>Verifica tus datos</span>";
			}
			?>
			</span></a></td>
            </tr>
            </table>
         </form>	
		</div>
				<div class="social">
		<ul>
			<li><a href="http://www.facebook.com" target="_blank" class="icon-facebook"></a></li>
			<li><a href="http://www.twitter.com" target="_blank" class="icon-twitter"></a></li>
			<li><a href="http://www.google.com.co" target="_blank" class="icon-google"></a></li>
			<li><a href="http://www.youtube.com" target="_blank" class="icon-youtube"></a></li>
		</ul>
	</div>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="buscarinmueble.php">Buscar Inmuebles</a></li>
				<li><a href="registrousuarios.php">Regístrate</a></li>
				<li><a href="somos.php">¿Quiénes somos?</a></li>
				<div id="reloj"></div>
				<div id="fecha"></div>

			</ul>
		</nav>
	</header>
	
	<div id = "contenedor-slideshow">
	 <div class="slideshow">
		<div style="relative" class="slides">
			<a href="somos.php"><img src="imagen/mapa.jpg" alt=""></a>
			<a href="registrousuarios.php"><img src="imagen/slide1.jpg" alt=""></a> 
			<!--<a href="#"><img src="imagen/slide3.jpg" alt=""></a>
			<a href="#"><img src="imagen/slide4.jpg" alt=""></a> -->
		</div>
	  </div>
	 </div> 
	<section class="main">
				<div class= "inmueblesa">
					<a href="buscarinmueble.php"> <img id ="casa" src="imagen/img/Casa.jpg" width="" alt=""></a>
					<a href="buscarinmueble.php"> <img id="apto" src="imagen/img/Apto.jpg" width="" alt=""></a>
				</div>
				<div class= "inmueblesb">
					<a href="buscarinmueble.php"> <img id="local" src="imagen/img/local.jpg" width="" alt=""></a>
					<a href="buscarinmueble.php"> <img id="finca" src="imagen/img/finca.jpg" width="" alt=""></a>
				</div>
	</section>
	</section>
		<footer>
			<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0378401328594!2d-75.58620568523065!3d6.258745995469811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44291ace0905c5%3A0xa82ebb8889ab4dae!2sFundaci%C3%B3n+Universitaria+Luis+Amig%C3%B3!5e0!3m2!1ses-419!2s!4v1446652666882" width="400" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="info"> FUNDACIÓN UNIVERSITARIA LUIS AMIGÓ<br>Transversal 51A #67B 90<br> Medellín - Colombia<br>funlam@funlam.edu.co</div>
		</footer>
		<script src="js/login.js"></script>
</body>
</html>