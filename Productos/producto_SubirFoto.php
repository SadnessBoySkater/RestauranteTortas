<?php 
include "../configuracion.php";
include_once('../MySqli_conexiondb.php');

require_once(HEADERADMIN);

if (isset($_POST['btnRegistrar'])) {
	$uploadfile = $_FILES["uploadImage"]["tmp_name"];//variable donde se guarda el archivo tipo imagen
	$folderRuta = "fotos/";
	$tipoImagen = explode("/",$_FILES["uploadImage"]["type"]);//variable donde se guarda el tipo de imagen
	$IDProducto = $_REQUEST['IDProductoFoto'];//variable donde se guarda el ID del balón
	$nombreImagen = $IDProducto.".".$tipoImagen[1]; //se renombra la imagen con el ID del balón para evitar que se reemplacen imagenes con el mismo nombre
	//var_dump($_REQUEST);
	if (! is_writable($folderRuta) || ! is_dir($folderRuta))
	{ //Si ocurre algún error se muestra el mensaje para regresar a la lista
	?>
	<center>
		<h2 class="title">Error al intentar Registrar el Producto</h2>
		<?=mysqli_error($conexion)?>
		<input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
	</center>
<?php
	//exit();
	}
	$query = "SELECT IDProducto, Foto FROM Productos WHERE IDProducto = '$IDProducto'"; //se realiza la consulta para verificar si hay una imagen borrarla y guardar la nueva imagen

	if (!$result = mysqli_query($conexion, $query))
		exit(mysqli_error($conexion));

	if(mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			if(file_exists(DOCROOT."Productos/fotos/".$row['Foto']) && $row['Foto']<>""){
				unlink(DOCROOT."Productos/fotos/".$row['Foto'])or die("Couldn't delete file");//unlink es la instrucción para borrar archivos
			}
		}
	}

	if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $folderRuta . $nombreImagen)) {//se guarda la imagen seleciona
		echo '<img src="' . ROOTURL."Productos/" . $folderRuta . "" . $nombreImagen .'">';//se muestra la imagen guardada
		$query = "UPDATE Productos SET Foto='$nombreImagen' WHERE IDProducto ='$IDProducto'";//se guarda el nombre de la imagen
		if (!$result = mysqli_query($conexion, $query))
		exit(mysqli_error($conexion));
		//exit();
	}
?>
	<center>
		<br><h2>Imagen Guardada!!!</h2>
		<br><input type="button" value="Ir a la lista de Productos" onclick=self.location="<?=ROOTURL?>?accion=listProductos" />
	</center>
<?php
}
require_once(FOOTERADMIN);
?>