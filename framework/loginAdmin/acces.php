<?php
$administrador=$_POST['administrador'];
$contraseña=$_POST['password'];


if (($administrador == 'administrador') AND ($contraseña== 'administrador')) {
	header('Location: http://localhost:88/framework/Página-Pirma/ejemplo.html');

}else{
	echo "error al ingresar verifica tus datos,<br> <a href='login.php'> volver al login </a>";
}
?>
