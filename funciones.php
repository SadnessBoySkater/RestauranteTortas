<?php
//éste archivo php SOLO VA A TENER CÓDIGO PHP

//-------------------------------- INICIO FUNCIONALIDADES PRODUCTOS --------------------------------//

function obtenerListaProductos()
{
	include_once('MySqli_conexiondb.php');
	$query = "SELECT IDProducto, Foto, Nombre, Precio, Estado, AplicaDescuento FROM Productos";
	
	$resultado = mysqli_query($conexion,$query);
	if(!$resultado)
	{
		exit(mysqli_error($conexion));
	}
	//arreglo puede guardar datos de diferente tipo
	//arrego no necesita tener el número de elementos a guardar
	//así se declara un arreglo
	$lista = array();
	
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon = mysqli_fetch_assoc($resultado))
		{
			if($renglon['Foto']=="") 
				$foto = ROOTURL. 'Productos/fotos/0.png';
			else
				$foto = ROOTURL. 'Productos/fotos/'.$renglon['Foto'];
			
			$lista[] = array(
				'IDProducto' => $renglon['IDProducto'],
				'mostrarFoto' => $foto,
				'Foto' => $renglon['Foto'],
				'Nombre' => $renglon['Nombre'],
				'Precio' => $renglon['Precio'],
				'Estado' => $renglon['Estado'],
				'AplicaDescuento' => $renglon['AplicaDescuento']
				);
		}
	}
	return $lista;
}
//ninguna función o procedimiento debe tener el mismo nombre
// Los parámetros son información o datos que recibo de otro lugar.
// Los parámetros se escriben en los paréntesis de la función o procedimiento (en PHP)

function obtenerDatosProducto($IDProducto)
{
	include('MySqli_conexiondb.php');
	//Esta es mi sentencia de consulta con una condición
	$query = "SELECT IDProducto, Foto, Nombre, Precio, Estado, AplicaDescuento FROM Productos WHERE IDProducto=".$IDProducto;
	
	$resultado = mysqli_query($conexion,$query);
	if(!$resultado)
	{
		exit(mysqli_error($conexion));
	}
	$lista = array();
	
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon = mysqli_fetch_assoc($resultado))
		{
			if($renglon['Foto']==null) 
				$foto = ROOTURL. 'Productos/fotos/0.png';
			else
				$foto = ROOTURL. 'Productos/fotos/'.$renglon['Foto'];
			
			$lista = array(
				'IDProducto' => $renglon['IDProducto'],
				'mostrarFoto' => $foto,
				'Foto' => $renglon['Foto'],
				'Nombre' => $renglon['Nombre'],
				'Precio' => $renglon['Precio'],
				'Estado' => $renglon['Estado'],
				'AplicaDescuento' => $renglon['AplicaDescuento']
				);
		}
	}
	return $lista;
}

//--------------------------------- FIN FUNCIONALIDADES PRODUCTOS ----------------------------------//

//-------------------------------- INICIO FUNCIONALIDADES VENTAS ---------------------------------//

function obtenerListaVentas()
{
	include('MySqli_conexiondb.php');
	$query = "SELECT IDVenta, APaterno, AMaterno, Nombre, Especialidad, Turno FROM ventas";
	$resultado = mysqli_query($conexion,$query);
	if(!$resultado)
	{
		exit(mysqli_error($conexion));
	}
	//arreglo puede guardar datos de diferente tipo
	//arrego no necesita tener el número de elementos a guardar
	//así se declara un arreglo
	$lista = array();
	
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon = mysqli_fetch_assoc($resultado))
		{
			$lista[] = array(
				'IDVenta' => $renglon['IDVenta'],
				'APaterno' => $renglon['APaterno'],
				'AMaterno' => $renglon['AMaterno'],
				'Nombre' => $renglon['Nombre'],
				'Especialidad' => $renglon['Especialidad'],
				'Turno' => $renglon['Turno']
				);
		}
	}
	return $lista;
}

function obtenerDatosVenta($IDVenta)
{
	include('MySqli_conexiondb.php');
	//Esta es mi sentencia de consulta con una condición
	$query = "SELECT IDVenta, APaterno, AMaterno, Nombre, Especialidad, Turno FROM ventas WHERE IDVenta=".$IDVenta;
	
	$resultado = mysqli_query($conexion,$query);
	if(!$resultado)
	{
		exit(mysqli_error($conexion));
	}
	$lista = array();
	
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon = mysqli_fetch_assoc($resultado))
		{
			$lista = array(
				'IDVenta' => $renglon['IDVenta'],
				'APaterno' => $renglon['APaterno'],
				'AMaterno' => $renglon['AMaterno'],
				'Nombre' => $renglon['Nombre'],
				'Especialidad' => $renglon['Especialidad'],
				'Turno' => $renglon['Turno']
				);
		}
	}
	return $lista;
}

//---------------------------------- FIN FUNCIONALIDADES VENTAS ----------------------------------//

//------------------------------- INICIO FUNCIONALIDADES CITAS -------------------------------//

function obtenerListaCitas()
{
	include_once('MySqli_conexiondb.php');
	$query = "SELECT IDCita, IDProducto, IDVenta, Fecha, Hora, Confirmado FROM citas";
	$resultado = mysqli_query($conexion,$query);
	if(!$resultado)
	{
		exit(mysqli_error($conexion));
	}
	//arreglo puede guardar datos de diferente tipo
	//arrego no necesita tener el número de elementos a guardar
	//así se declara un arreglo
	$lista = array();
	
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon = mysqli_fetch_assoc($resultado))
		{
			$lista[] = array(
				'IDCita' => $renglon['IDCita'],
				'IDProducto' => $renglon['IDProducto'],
				'IDVenta' => $renglon['IDVenta'],
				'Fecha' => $renglon['Fecha'],
				'Hora' => $renglon['Hora'],
				'Confirmado' => $renglon['Confirmado']
				);
		}
	}
	return $lista;
}

//--------------------------------- FIN FUNCIONALIDADES PRESTAMOS --------------------------------//

//-------------------------------- INICIO FUNCIONALIDADES TICKET --------------------------------//

function obtenerListaTickets()
{
	include_once('MySqli_conexiondb.php');
	$query = "SELECT IDTicket, fechaDia, fechaHora, Producto, Precio, IVA, Importe, Total, Ahorro, NomCajero FROM Tickets";
	
	$resultado = mysqli_query($conexion,$query);
	if(!$resultado)
	{
		exit(mysqli_error($conexion));
	}
	//arreglo puede guardar datos de diferente tipo
	//arrego no necesita tener el número de elementos a guardar
	//así se declara un arreglo
	$lista = array();
	
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon = mysqli_fetch_assoc($resultado))
		{
			$lista[] = array(
				'IDTicket' => $renglon['IDTicket'],
				'fechaDia' => $renglon['fechaDia'],
				'fechaHora' => $renglon['fechaHora'],
				'Producto' => $renglon['Producto'],
				'Precio' => $renglon['Precio'],
				'IVA' => $renglon['IVA'],
				'Importe' => $renglon['Importe'],
				'Total' => $renglon['Total'],
				'Ahorro' => $renglon['Ahorro'],
				'NomCajero' => $renglon['NomCajero']
				);
		}
	}
	return $lista;
}
//ninguna función o procedimiento debe tener el mismo nombre
// Los parámetros son información o datos que recibo de otro lugar.
// Los parámetros se escriben en los paréntesis de la función o procedimiento (en PHP)

function obtenerDatosTicket($IDTicket)
{
	include('MySqli_conexiondb.php');
	//Esta es mi sentencia de consulta con una condición
	$query = "SELECT IDTicket, fechaDia, fechaHora, Producto, Precio, IVA, Importe, Total, Ahorro, NomCajero FROM Tickets";
	
	$resultado = mysqli_query($conexion,$query);
	if(!$resultado)
	{
		exit(mysqli_error($conexion));
	}
	$lista = array();
	
	if(mysqli_num_rows($resultado)>0)
	{
		while($renglon = mysqli_fetch_assoc($resultado))
		{
			$lista = array(
				'IDTicket' => $renglon['IDTicket'],
				'fechaDia' => $renglon['fechaDia'],
				'fechaHora' => $renglon['fechaHora'],
				'Producto' => $renglon['Producto'],
				'Precio' => $renglon['Precio'],
				'IVA' => $renglon['IVA'],
				'Importe' => $renglon['Importe'],
				'Total' => $renglon['Total'],
				'Ahorro' => $renglon['Ahorro'],
				'NomCajero' => $renglon['NomCajero']
				);
		}
	}
	return $lista;
}

//--------------------------------- FIN FUNCIONALIDADES TICKET ----------------------------------//
?>