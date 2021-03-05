<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ImagesPro - Login</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body style="font-family: 'Lato', sans-serif;">
	<div class="login__contenedor">
		<div class="login__container">
			<div class="login__top">
				<h1 class="login__title">Sign In</h1>
			</div>

			<form action="#" method="post" class="login__form">
				<input type="text" name="inpUsuario" id="inpUsuario" placeholder="&#128100; Usuario" autocomplete="false">
				<input type="password" name="inpClave" id="inpClave" placeholder="&#x1f512; Contraseña" autocomplete="false">

				<button type="submit" class="btn__submit">INGRESAR</button>
				<a href="#" class="form__recover">Olvidaste la contrase&ntilde;a?</a>
			</form>
		</div>
	</div>
</body>
</html>
<?php
$link      = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$thread_id = mysql_thread_id($link);
if ($thread_id) {
    printf("current thread id is %d\n", $thread_id);
}

$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
printf("MySQL host info: %s\n", mysql_get_host_info());
?>
