<?php
						//nombre del dominio www.cetis58.edu.mx
if($_SERVER['SERVER_NAME']=='localhost'|| $_SERVER['SERVER_ADDR']=='127.0.0.1'){
									// || son "o" en PHP
	define('MICONSTANTEGLOBAL','hola'); 

	define('ROOTURL','http://localhost/RestauranteTortas_07_Bravo/');
	define('DOCROOT',$_SERVER['DOCUMENT_ROOT'].'/RestauranteTortas_07_Bravo/');
	define('AUTOR','08 Bravo Zazueta Ian Caleb');
	define('SIDENAME','Restaurante de Tortas');
							
							//nombre de la carpeta donde están las imágenes
	define('IMAGES',ROOTURL.'images/');
	define('CSS',ROOTURL.'css/');
	define('JS',ROOTURL.'js/');

	define('DBHOST','localhost');//nombre de nuestro servidor
	define('DBUSER','root');//nombre de usuario para accesar
	define('DBPASSWD','');//es la contraseña para accesar a la base de datos
	define('DBNAME','restaurantetortascetis58_5dm');//apellido del alumno
	
	define('HEADERADMIN', DOCROOT.'header.php');
	define('FOOTERADMIN', DOCROOT.'footer.php');
}

include_once('funciones.php');
session_start();//se indica que se van a utilizar variables de tipo sesión o cookies

?>