<?php
session_start();
include "utilerias/conexSispro.php";

$user = $_POST['usuario'];
$pass = $_POST['contrasena'];


$Usser = trim($user);
$Password = trim($pass);
$salt = '$?!k.r3#$/';
$Password = sha1(md5($salt . $Password));

$sql = "select * from usuarios where Usuario='$Usser'";
$result = mysql_query($sql,$conne);

if($row = mysql_fetch_array($result)){
	// nombre del usuario echo $row[1];

	if($row["Contrasena"] == $Password){

		$_SESSION['Nombre']  = $row[1];
		$_SESSION['ApPat'] = $row[2];
		$_SESSION['ApMat'] = $row[3];
		$_SESSION['usuario'] = $row[7];

		switch ($row["Departamento"]) {
			
			case (1):
			
			$_SESSION['tipo'] ="Administrador";
			header("Location: Administrador/index.php"); 
			break;
		
			case (2):
			$_SESSION['tipo'] ="Usuario";
			header("Location: Auditoria/index.php"); 
			break;

			case (3):
			$_SESSION['tipo'] ="Usuario";
			header("Location: RecepcionMP/index.php"); 
			break;
		
			case (4):
			$_SESSION['tipo'] ="Usuario";
			header("Location: Produccion/index.php"); 
			break;		
		}
	}else{?>

		<script languaje="javascript">
		alert("Contraseña Incorrecta");
		location.href = "index.php";
   		</script>
	<?php }
}else{?>
	<script languaje="javascript">
	alert("El nombre de usuario es incorrecto!");
	location.href = "index.php";
	</script>
	<?php
}
mysql_close($conne);
?>