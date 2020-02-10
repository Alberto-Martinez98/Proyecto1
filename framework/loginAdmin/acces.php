<?php
$administrador=$_POST['administrador'];
$contraseña=$_POST['contraseña'];


if (($administrador == 'administrador') AND ($contraseña=='administrador')) {

	echo "Bienvenido al sistema";
}else{
	echo "error al ingresar verifica tus datos,<br> <a href='login.php'> volver al login </a>";
}
?>