<?php

require_once('../configuracion.php');

unset($_SESSION['user_session']);
//se puede tener mas de una variable de sesión en funcionamiento

//se crea una variable donde si el usuario no realiza un movimiento en un cierto tiempo, la sasión se cierra automáticamente
if(isset($_COOKIE[session_name()]))
{
	setcookie(session_name,'',time()-4200,'/');
}

if(session_destroy())
{
	header("Location: ".ROOTURL);
}

?>