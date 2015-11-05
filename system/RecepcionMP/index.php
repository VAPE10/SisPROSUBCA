<?php
session_start();
//include "../utilerias/Historial/log.php";
$usuario = $_SESSION['usuario'];
if(!isset($usuario)){
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo_principal.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
	<link rel="stylesheet" href="css/fonts.css">
	<script src="js/jquery-latest.js"></script>
	<script src="js/menu.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(e){
		
		$('#home').on('click',function(){
			$('#contenido').attr('src','../utilerias/galeria');
		});
		
		$('#btnTarjetas').on('click',function(){
			$('#contenido').attr('src','../tarjeta.php');
		});
		
		$('#btnReportes').on('click',function(){
			alert("sdfgsfdg");
		});
		});
	</script>

</head>
<body>
	<div class="divPrincipal">

		<header class="encabezado">
			<p>RECEPCION DE MATERIA PRIMA</p>
		</header>

		<div class="menu">
			<div class="menu_bar">
				<a href="#" class="bt-menu"><span class="icon-menu"></span>Menu</a>
			</div>
			<nav>
				<ul>
					<li><a href="#" id="home"><span class="icon-home"></span>Inicio</a></li>
					<li><a href="#" id="btnTarjetas"><span class="icon-stackoverflow"></span>Tarjetas</a></li>
					<li><a href="#" id="btnReportes"><span class="icon-stackoverflow"></span>Reportes</a></li>
					<li><a href="../utilerias/salir.php"><span class="icon-cross"></span>Salir</a></li>
				</ul>
			</nav>
		</div>

		<p style="text-align: center; font-size:.9em;">
			<?php echo utf8_encode($_SESSION['tipo'].": ".$_SESSION['usuario']." "
			."Nombre: ".$_SESSION['Nombre']." ".$_SESSION['ApPat']." ".$_SESSION['ApMat']);?>
		</p>
		<iframe style="width: 1000px; height:600px; allowfullscreen" id="contenido" class="contenido" src="../utilerias/galeria">iFrame not supported</iframe>
	</div>
	
</body>
</html>