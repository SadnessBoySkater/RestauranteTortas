<head>
	<!--El código de favicon debe estar en el index para funcionar adecuadamente-->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<?php
//las variables constantes globales van al inicio del index
//define('MICONSTANTE GLOBAL','hola');
//las variables constantes globales estan en el archivo configuracion.php
include_once('configuracion.php');
	//isset es para verificar la existencia de una variable por el método get o post
	//crear un if en una sola línea de código (condición)?verdadera:falso
	//null significa vacío, no tiene nada.
$accion = (isset($_POST['accion']))?$_POST['accion']:null;
$accion = (isset($_GET['accion']))?$_GET['accion']:$accion;

	//para concatenar en php es con .
//echo "accion tiene el valor de: ".$accion;

if(isset($_SESSION['user_session']))
{
	//print_r($_SESSION);

//Este es el encabezado y menú de mi código de mi aplicación web
include_once("header.php");

	switch($accion)
	{
		case "listTickets":
			include_once("Ticket/listTickets.php");
		break;
		
		case "listProductos":
			include_once("Productos/listProductos.php");
		break;
		
		case "listVentas":
			include_once("Ventas/listVentas.php");
		break;
		
		case "confirmarProducto":
			include_once("Productos/confirmarProducto.php");
		break;
		
		case "deleteProducto":
			include_once("Productos/deleteProducto.php");
		break;
		
		case "imgProducto":
			include_once("Productos/datosImgProducto.php");
		break;
		
		case "deleteVenta":
			include_once("Ventas/deleteVenta.php");
		break;
		
		case "addProducto":
			include_once("Productos/formProducto.php");
		break;
		
		case "addVenta":
			include_once("Ventas/formMedico.php");
		break;
		
		case "editProducto":
			include_once("Productos/formeditProducto.php");
		break;
		
		case "editVenta":
			include_once("Ventas/formEditMedico.php");
		break;
		
		case "listDetallesVentas":
			include_once("Citas/listDetallesVentas.php");
		break;
		
		case "confirmarCita":
			include_once("Citas/confirmarCita.php");
		break;
		
		case "addDetalleVenta":
			include_once("Citas/formCita.php");
		break;
		
		default:
			//Este es el archivo de inicio de mi aplicación web
			include_once("home.php");
		break;
	}
//Este es el pie de página de mi aplicación web
include_once("footer.php");
}else
{
	include_once("Login/formLogin.php");
}

?>