<h2> Confirmar cita m&eacute;dica </h2>

<?php
	include_once('MySqli_conexiondb.php');

	$IDCita = (isset($_GET['IDCita']))?$_GET['IDCita']:null;
	$respuesta = (isset($_GET['respuesta']))?$_GET['respuesta']:null;

	if(!$respuesta)
	{
?>
	<center>
		<h3>¿El paciente confirm&oacute; su cita?</h3>
		<input type="button" value="si" onclick=self.location="<?=ROOTURL?>?accion=confirmarCita&IDCita=<?=$IDCita?>&respuesta=si" />
		<input type="button" value="no" onclick=self.location="<?=ROOTURL?>?accion=listCitas" />
	</center>

<?php } ?>

<?php
	if($respuesta=="si")
	{
		$query = "UPDATE citas SET Confirmado ='SI' WHERE IDCita=".$IDCita;
		$resultado = mysqli_query($conexion,$query);
		if(!$resultado)
		{
		?>
			<center>
			<h3>Error al intentar eliminar el registro <?=mysqli_error($conexion)?>
			</h3>
			<input type="button" value="Ir a la lista de Citas" onclick=self.location="<?=ROOTURL?>?accion=listCitas" />
			</center>
<?php 		}else
			{
				//Este código se ejecuta cuando no hay errores en la sentencia
		?>
			<center>
				<h3>Cita confirmada!!!!</h3>
				<input type="button" value="Ir a la lista de Citas" onclick=self.location="<?=ROOTURL?>?accion=listCitas" />
			</center>
<?php 		}
	}
?>