<?php

print_r($_POST);//leer todos los datos enviados por el formulario
print_r($_REQUEST);//Lee todos los datos enviados por el formulario ya sea en GET o POST
// los datos recibidos por el formulario son enviados como un arreglo

require_once('../configuracion.php');
include_once('../MySqli_conexiondb.php');

$accion = $_POST['accion'];
$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];

require_once(HEADERADMIN);
	if($accion=="addProducto")
	{
		//INSERT INTO nombreTabla (nombreCampo1, nombreCampo2, nombreCampo3,...) VALUES (valorCampo1, valorCampo2, valorCampo3,...)
		echo '<br>'.$query = "INSERT INTO Productos (Nombre,Precio) VALUES ('$Nombre', '$Precio')";
		
		$resultado = mysqli_query($conexion,$query);
			if(!$resultado)
			{
				?>			
			<center>
				<h3>Error al intentar registrar el producto!!!<?=mysqli_error($conexion)?></h3>
				<br><input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
			</center>
<?php		}else {?>
				<center>
				<h3>Producto Registrado!!!</h3>
				<br><input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
				</center>
<?php			}?>
<?php	}else {?>
			<center>
				<h3>Opci&oacute;n incorrecta!!!</h3>
				<br><input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
			</center>
<?php	}      ?>
<?php require_once(FOOTERADMIN); ?>