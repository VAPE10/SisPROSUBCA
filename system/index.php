<!DOCTYPE html>
<?php
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SisPROSUBCA</title>
        <link rel="stylesheet" href="../css/estilo_login.css">
		<script type="text/javascript">{
			if(history.forward(1))
			location.replace(history.forward(1))
			}
			</script>
  </head>
  <body>
    <div class="wrapper">
	<div class="container">
		<h1>Bienvenido</h1>
		<form class="form" action="login.php" method="post">
			<input type="text" maxlength="10" id="usuario" name="usuario" placeholder="Usuario" required>
			<input type="password" maxlength="10" id="contrasena" name="contrasena" placeholder="Contraseña" required>
			<button type="submit" id="login-button">Entrar</button><br><br>
			<a href="recu_Contra.php">¿Has olvidado tu contraseña?</a>
		</form>
	</div>
	<ul class="bg-bubbles">
		<li> <img src="../images/1.png"> </li>
		<li> <img src="../images/1.png"> </li>
		<li> <img src="../images/1.png"> </li>
		<li> <img src="../images/1.png"> </li>
		<li> <img src="../images/1.png"> </li>
		<li> <img src="../images/1.png"> </li>
		<li> <img src="../images/1.png"> </li>
		<li> <img src="../images/1.png"> </li>
		<li> <img src="../images/1.png"> </li>
		<li> <img src="../images/1.png"> </li>
	</ul>
</div>
  </body>
</html>