 <?php 
 //require_once 'funciones.php';
 
 $IDProducto = (isset($_GET['IDProducto'])) ? $_GET['IDProducto'] : null;
 
 $DatosProducto=obtenerDatosProducto($IDProducto); //Se obtienen los datos del balón para subir la
 //print_r($DatosProducto);
	if($DatosProducto!=null)
	{
			$IDProducto = $DatosProducto['IDProducto'];
			$imagen = $DatosProducto['mostrarFoto'];
			$Nombre = $DatosProducto['Nombre'];
			$Precio = $DatosProducto['Precio'];
			$estado = $DatosProducto['Estado'];
	}
 ?>
	<center><div id="datosProducto">
			<form name="frmProducto" action="Productos/producto_SubirFoto.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" id="IDProductoFoto" name="IDProductoFoto" value="<?=$IDProducto?>"/>
				<h2>Subir imagen del Producto</h2>
				<center><img src="<?=$imagen?>"/></center>
				<label>IDProducto: <span>*</span>
					<input type="text" id="IDProducto" name="IDProducto" value="<?=$IDProducto?>" disabled />
				</label>
				
				<label>Nombre: <span>*</span>
					<input type="text" name="txtNombre" placeholder="Nombre" value="<?=$Nombre?>" disabled />
				</label>
				
				<label>Precio Total: <span>*</span>
					<input type="text" name="txtPrecio" placeholder="Precio" value="<?=$Precio?>" disabled />
				</label>
				
				<input type="file" id="uploadImage" name="uploadImage" />
				
				<input type="submit" name="btnRegistrar" value="subirImagen" >
			</form>
		</div>
		<div style="clear: both;">&nbsp;</div>
		</center>