<?php
$comprador=$_POST['comprador'];
$contraseña=$_POST['contraseña'];


if (($comprador == 'comprador') AND ($contraseña=='comprador')) {

	echo "Bienvenido al sistema";
}else{
	echo "error al ingresar verifica tus datos, <br> <a href='login.php' > volver al login </a>";
}
?>