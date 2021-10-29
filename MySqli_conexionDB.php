<?php

//librerías o extensiones ayudan a realizar funcionalidades sin codificar todo

//aquí se establece la conexión con los datos de donde se encuentra mi base de datos
$conexion = new mysqli(DBHOST,DBUSER,DBPASSWD,DBNAME);

//si falla la conexión, que me muestre el error 
if($conexion->connect_error)
{
	die("Conexión fallida".$conexion->connect_error);
}

//echo 'conexión exitosa';

//para que no salgan símbolos o espacio en negro en los acentos
$query = "SET NAMES 'utf8'";

// el signo de admiración quiere decir SINO ES EXITO
if(!$resultado= mysqli_query($conexion,$query))
{
	exit(mysqli_error($conexion));
}

?>