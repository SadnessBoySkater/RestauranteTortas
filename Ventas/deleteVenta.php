<h2>Ventas: Eliminar un Registro</h2>

<?php
	include_once('MySqli_conexiondb.php');

	$IDVenta = (isset($_GET['IDVenta']))?$_GET['IDVenta']:null;
	$respuesta = (isset($_GET['respuesta']))?$_GET['respuesta']:null;

	//el signo de ! es la negación
	// sino existe la respuesta
	if(!$respuesta)
	{
?>
	<center>
		<h3>¿Estás seguro de eliminar el registro?</h3>
		<input type="button" value="si" onclick=self.location="<?=ROOTURL?>?accion=deleteVenta&IDVenta=<?=$IDVenta?>&respuesta=si" />
		<input type="button" value="no" onclick=self.location="<?=ROOTURL?>?accion=listVentas" />
	</center>

<?php } ?>

<?php
	if($respuesta=="si")
	{
		//EStas sentencias son los nombres de la tabla/archivo de la base de datos
		//DELETE FROM nombreTabla WHERE nombreCampo=ValorBuscar
		$query = "DELETE FROM ventas WHERE IDVenta=".$IDVenta;
		$resultado = mysqli_query($conexion,$query);
		if(!$resultado)
		{
			//Este código se muestra cuando hay un error en la sentencia para eliminar un registro
		?>
			<center>
			<h3>Error al intentar eliminar el registro <?=mysqli_error($conexion)?>
			</h3>
			<input type="button" value="Ir a la lista de Ventas" onclick=self.location="<?=ROOTURL?>?accion=listVentas" />
			</center>
<?php 		}else
			{
				//Este código se ejecuta cuando no hay errores en la sentencia
		?>
			<center>
				<h3>Registro eliminado!!!!</h3>
				<input type="button" value="Ir a la lista de Ventas" onclick=self.location="<?=ROOTURL?>?accion=listVentas" />
			</center>
<?php 		}
	}
?>