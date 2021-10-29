<h2>Productos: Eliminar un Registro</h2>

<?php
	include_once('MySqli_conexiondb.php');

	$IDProducto = (isset($_GET['IDProducto']))?$_GET['IDProducto']:null;
	$respuesta = (isset($_GET['respuesta']))?$_GET['respuesta']:null;

	//el signo de ! es la negación
	// sino existe la respuesta
	if(!$respuesta)
	{
?>
	<center>
		<h3>¿Estás seguro de eliminar el registro?</h3>
		<input type="button" value="si" onclick=self.location="<?=ROOTURL?>?accion=deleteProducto&IDProducto=<?=$IDProducto?>&respuesta=si" />
		<input type="button" value="no" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
	</center>

<?php } ?>

<?php
	if($respuesta=="si")
	{
		//EStas sentencias son los nombres de la tabla/archivo de la base de datos
		//DELETE FROM nombreTabla WHERE nombreCampo=ValorBuscar
		$query = "DELETE FROM Productos WHERE IDProducto=".$IDProducto;
		$resultado = mysqli_query($conexion,$query);
		if(!$resultado)
		{
			//Este código se muestra cuando hay un error en la sentencia para eliminar un registro
		?>
			<center>
			<h3>Error al intentar eliminar el registro <?=mysqli_error($conexion)?>
			</h3>
			<input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
			</center>
<?php 		}else
			{
				//Este código se ejecuta cuando no hay errores en la sentencia
		?>
			<center>
				<h3>Registro eliminado!!!!</h3>
				<input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
			</center>
<?php 		}
	}
?>