<?php
print_r($_REQUEST);
require_once('../configuracion.php');
include_once('../MySqli_conexiondb.php');

$accion = $_POST['accion'];
$IDProducto = $_POST['IDProducto'];
$APaterno = $_POST['APaterno'];
$AMaterno = $_POST['AMaterno'];
$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];
$Peso = $_POST['Peso'];
$Altura = $_POST['Altura'];

require_once(HEADERADMIN);
		if($accion=="updateProducto")
		{
		//UPDATE nombreTabla SET nombreCampo1 = nuevoValorCampo1, nombreCampo2 = nuevoValorCampo2,nombreCampo3 = nuevoValorCampo3 WHERE nombreCampo=ValorBuscar
			$query = "UPDATE Productos SET APaterno='$APaterno', AMaterno='$AMaterno', Nombre='$Nombre', Precio='$Precio', Peso='$Peso', Altura='$Altura' WHERE IDProducto='$IDProducto'";
			
			$resultado = mysqli_query($conexion,$query);
			if(!$resultado)
			{	?>			
			<center>
				<h3>Error al intentar registrar el producto!!!<?=mysqli_error($conexion)?></h3>
				<br><input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
			</center>
			
<?php		}else {?>

				<center>
				<h3>Datos del producto Actualizados!!!</h3>
				<br><input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
				</center>
<?php			}?>
			
<?php		}else{ ?>
			<center>
				<h3>Opci&oacute;n incorrecta!!!</h3>
				<br><input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
			</center>
<?php 	     }?>
<?php require_once(FOOTERADMIN); ?>