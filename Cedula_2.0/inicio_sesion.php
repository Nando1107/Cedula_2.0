<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login FES ARAGON</title>
    <link rel="shortcut icon" href="C:\xampp\htdocs\Cedula_2.0\Cedula_2.0\img\iconofes.png">
	<link rel="stylesheet" href="css/inicio_sesion.css">
</head>
<body>
	
	<div class="caja-login">
		<img class="avatar" src="img/lgo.jpg" alt="Logo FES">

		<h1> Inicia Sesión </h1>
		<form>
			<!-- USUARIO -->
			<label for="username">Usuario:</label>
			<input type="text" placeholder="Ingresar Usuario">

			<!-- CONTRASEÑA -->
			<label for="password">Contraseña:</label>
			<input type="password" placeholder="Ingresar Contraseña">

			<!-- ACCEDER   -->
			<!-- <input type="submit"  value="Entrar"> -->

			<input type="button" value= "Entrar" class="button_active" onclick="location.href='index.php';" />

			<a href="#"> ¿Olvidaste tu contraseña? </a><br>

			<p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
		</form>
	</div>

</body>
</html>


