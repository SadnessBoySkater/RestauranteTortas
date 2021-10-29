<h2>Productos - Registro de datos en BD</h2>
<center>
<!--action es el archivo php donde se encuentra la funcionalidad que queremos realizar -->
	<form name="frmProducto" id="frmProducto" action="Productos/addProducto.php" method="POST">
		<input type="hidden" name="accion" id="accion" value="addProducto" />
		<h3>Registro de Producto</h3>
		
		<label><b>Apellido Paterno
			<input type="text" name="APaterno" id="APaterno" required />
		</label><br>
		
		<label>Apellido Materno
			<input type="text" name="AMaterno" id="AMaterno" required />
		</label><br>
		
		<label>Nombre
			<input type="text" name="Nombre" id="Nombre" required />
		</label><br>
		
		<label>Precio
			<input type="text" name="Precio" id="Precio" required />
		</label><br>
		
		<input type="submit" name="btnRegistrar" id="btnRegistrar" value="Registrar" />
		
	</form>
<center>