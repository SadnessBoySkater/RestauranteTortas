<h2>Ventas - Registro de datos en BD</h2>
<center>
<!--action es el archivo php donde se encuentra la funcionalidad que queremos realizar -->
	<form name="frmVenta" id="frmVenta" action="Ventas/addVenta.php" method="POST">
		<input type="hidden" name="accion" id="accion" value="addVenta" />
		<h3>Registro de Ventas</h3>
		
		<label>Apellido Paterno
			<input type="text" name="APaterno" id="APaterno" required />
		</label><br>
		
		<label>Apellido Materno
			<input type="text" name="AMaterno" id="AMaterno" required />
		</label><br>
		
		<label>Nombre
			<input type="text" name="Nombre" id="Nombre" required />
		</label><br>
		
		<label>Especialidad
			<input type="text" name="Especialidad" id="Especialidad" required />
		</label><br>
		
		<label>Turno
			<input type="text" name="Turno" id="Turno" required />
		</label><br>
		
		<input type="submit" name="btnRegistrar" id="btnRegistrar" value="Registrar" />
		
	</form>
<center>