<?php
print_r($_REQUEST);
require_once('../configuracion.php');
include_once('../MySqli_conexiondb.php');

$accion = $_POST['accion'];
$IDVenta = $_POST['IDVenta'];
$APaterno = $_POST['APaterno'];
$AMaterno = $_POST['AMaterno'];
$Nombre = $_POST['Nombre'];
$Especialidad = $_POST['Especialidad'];
$Turno = $_POST['Turno'];

require_once(HEADERADMIN);
		if($accion=="updateVenta")
		{
		//UPDATE nombreTabla SET nombreCampo1 = nuevoValorCampo1, nombreCampo2 = nuevoValorCampo2,nombreCampo3 = nuevoValorCampo3 WHERE nombreCampo=ValorBuscar
			$query = "UPDATE ventas SET APaterno='$APaterno', AMaterno='$AMaterno', Nombre='$Nombre', Especialidad='$Especialidad', Turno='$Turno' WHERE IDVenta='$IDVenta'";
			
			$resultado = mysqli_query($conexion,$query);
			if(!$resultado)
			{	?>			
			<center>
				<h3>Error al intentar registrar el m&eacute;dico!!!<?=mysqli_error($conexion)?></h3>
				<br><input type="button" value="Ir a la lista de Ventas" onclick=self.location="<?=ROOTURL?>?accion=listVentas" />
			</center>
			
<?php		}else {?>

				<center>
				<h3>Datos del m&eacute;dico Actualizados!!!</h3>
				<br><input type="button" value="Ir a la lista de Ventas" onclick=self.location="<?=ROOTURL?>?accion=listVentas" />
				</center>
<?php			}?>
			
<?php		}else{ ?>
			<center>
				<h3>Opci&oacute;n incorrecta!!!</h3>
				<br><input type="button" value="Ir a la lista de Ventas" onclick=self.location="<?=ROOTURL?>?accion=listVentas" />
			</center>
<?php 	     }?>
<?php require_once(FOOTERADMIN); ?>