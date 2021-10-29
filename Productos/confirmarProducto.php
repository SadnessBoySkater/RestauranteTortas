<h2> Confirmar Producto </h2>

<?php
	include_once('MySqli_conexiondb.php');

	$IDProducto = (isset($_GET['IDProducto']))?$_GET['IDProducto']:null;
	$respuesta = (isset($_GET['respuesta']))?$_GET['respuesta']:null;

	if(!$respuesta)
	{
?>
	<center>
		<h3>¿El producto se encuentra disponible?</h3>
		<input type="button" value="si" onclick=self.location="<?=ROOTURL?>?accion=confirmarProducto&IDProducto=<?=$IDProducto?>&respuesta=si" />
		<input type="button" value="no" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
	</center>

<?php } ?>

<?php
	if($respuesta=="si")
	{
		$query = "UPDATE productos SET Confirmado ='SI' WHERE IDProducto=".$IDProducto;
		$resultado = mysqli_query($conexion,$query);
		if(!$resultado)
		{
		?>
			<center>
			<h3>Error al intentar eliminar el registro <?=mysqli_error($conexion)?>
			</h3>
			<input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProducto" />
			</center>
<?php 		}else
			{
				//Este código se ejecuta cuando no hay errores en la sentencia
		?>
			<center>
				<h3>Producto confirmado!!!!</h3>
				<input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProducto" />
			</center>
<?php 		}
	}
?>