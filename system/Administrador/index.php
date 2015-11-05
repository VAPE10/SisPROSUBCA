<?php
session_start();
//include "../utilerias/Historial/log.php";
$usuario = $_SESSION['usuario'];
if(!isset($usuario)){
	header("Location: ../index.php");
}
?>
<html>
<head>
</head>
<body>
	<a href="../utilerias/salir.php">Salir</a>
</body>
</html>