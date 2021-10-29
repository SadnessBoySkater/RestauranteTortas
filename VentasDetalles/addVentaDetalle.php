<?php

print_r($_POST);
print_r($_REQUEST);


require_once('../configuracion.php');
include_once('../MySqli_conexiondb.php');

$accion = $_POST['accion'];
$IDPaciente = $_POST['IDPaciente'];
$IDMedico = $_POST['IDMedico'];
$Fecha = $_POST['Fecha'];
$Hora = $_POST['Hora'];
$Confirmado = $_POST['Confirmado'];

$datosMedico = obtenerDatosMedico($IDMedico);

$Turno = $datosMedico['Turno'];
$Tiempo = strtotime("$Hora");
$Mediodia = strtotime("12:00");

if($Turno=="MT" && $Tiempo >= $Mediodia || $Turno=="VT" && $Tiempo < $Mediodia)
		{?>
			<center>
			<h3>M&eacute;dico no disponible a esa hora, elige otra hora<h3>
			<br><input type="button" value="Ir a la lista de Citas" onclick=self.location="<?=ROOTURL?>?accion=addCita" />
			</center>
<?php	}else{

require_once(HEADERADMIN);
	if($accion=="addCita")
	{
		//INSERT INTO nombreTabla (nombreCampo1, nombreCampo2, nombreCampo3,...) VALUES (valorCampo1, valorCampo2, valorCampo3,...)
		echo '<br>'.$query = "INSERT INTO citas (IDPaciente,IDMedico,Fecha,Hora,Confirmado) VALUES ('$IDPaciente', '$IDMedico', '$Fecha', '$Hora', '$Confirmado')";
		
		$resultado = mysqli_query($conexion,$query);
			if(!$resultado)
			{
				?>			
			<center>
				<h3>Error al intentar registrar la Cita!!!<?=mysqli_error($conexion)?></h3>
				<br><input type="button" value="Ir a la lista de Citas" onclick=self.location="<?=ROOTURL?>?accion=listCitas" />
			</center>
<?php		}else {?>
				<center>
				<h3>Cita Registrada!!!</h3>
				<br><input type="button" value="Ir a la lista de Citas" onclick=self.location="<?=ROOTURL?>?accion=listCitas" />
				</center>
<?php			}?>
<?php	}else {?>
			<center>
				<h3>Opci&oacute;n incorrecta!!!</h3>
				<br><input type="button" value="Ir a la lista de Citas" onclick=self.location="<?=ROOTURL?>?accion=listCitas" />
			</center>
<?php	}      ?>
<?php } ?>
<?php require_once(FOOTERADMIN); ?>