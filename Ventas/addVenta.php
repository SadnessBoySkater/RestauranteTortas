<?php

print_r($_POST);//leer todos los datos enviados por el formulario
print_r($_REQUEST);//Lee todos los datos enviados por el formulario ya sea en GET o POST
// los datos recibidos por el formulario son enviados como un arreglo

require_once('../configuracion.php');
include_once('../MySqli_conexiondb.php');

$accion = $_POST['accion'];
$APaterno = $_POST['APaterno'];
$AMaterno = $_POST['AMaterno'];
$Nombre = $_POST['Nombre'];
$Especialidad = $_POST['Especialidad'];
$Turno = $_POST['Turno'];

require_once(HEADERADMIN);
	if($accion=="addVenta")
	{
		//INSERT INTO nombreTabla (nombreCampo1, nombreCampo2, nombreCampo3,...) VALUES (valorCampo1, valorCampo2, valorCampo3,...)
		echo '<br>'.$query = "INSERT INTO ventas (APaterno,AMaterno,Nombre,Especialidad,Turno) VALUES ('$APaterno', '$AMaterno', '$Nombre', '$Especialidad', '$Turno')";
		
		$resultado = mysqli_query($conexion,$query);
			if(!$resultado)
			{
				?>			
			<center>
				<h3>Error al intentar registrar la venta!!!<?=mysqli_error($conexion)?></h3>
				<br><input type="button" value="Ir a la lista de Ventas" onclick=self.location="<?=ROOTURL?>?accion=listVentas" />
			</center>
<?php		}else {?>
				<center>
				<h3>M&eacute;dico Registrado!!!</h3>
				<br><input type="button" value="Ir a la lista de Ventas" onclick=self.location="<?=ROOTURL?>?accion=listVentas" />
				</center>
<?php			}?>
<?php	}else {?>
			<center>
				<h3>Opci&oacute;n incorrecta!!!</h3>
				<br><input type="button" value="Ir a la lista de Ventas" onclick=self.location="<?=ROOTURL?>?accion=listVentas" />
			</center>
<?php	}      ?>
<?php require_once(FOOTERADMIN); ?>