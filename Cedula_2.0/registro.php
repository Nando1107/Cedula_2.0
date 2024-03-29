<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Cedula</title>
    <link rel="shortcut icon" href="C:\xampp\htdocs\Cedula_2.0\Cedula_2.0\img\iconofes.png">
	<link rel="stylesheet" href="css/inicio_sesion.css">
</head>
<body>
	<div class="caja-registro">
	<img class="avatar" src="img/logo-registro.png" alt="Logo Registro">
	<h1> Registrar Usuario</h1>
	<form>

		<!-- Usuario-->
		<label for="username">Usuario: </label>
		<input type="text" required pattern="[0-9]+{9-9}">

		<!-- Contraseña a elegir-->
		<label for="contraseña">Elige una contraseña: </label>
		<input type="text" placeholder="">

		<!-- Apellido paterno-->
		<label for="Ap_pat">Apellido Paterno: </label>
		<input type="text" placeholder="">

		<!-- Apellido materno-->
		<label for="Ap_mat">Apellido Materno: </label>
		<input type="text" placeholder="">

		<!-- Nombres-->
		<label for="name">Nombres: </label>
		<input type="text" placeholder="">

		<input type="submit" value="Terminar Registro">

		<p>¿Ya tienes una cuenta? <a class="link" href="inicio_sesion.php">Inicia Sesión </a></p>

	</form>

</body>
</html>