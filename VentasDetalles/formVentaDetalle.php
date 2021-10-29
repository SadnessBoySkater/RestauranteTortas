<?php 

$listPacientes = obtenerListaPacientes();
$listMedicos = obtenerListaMedicos();

?>

<h2>Formulario Registrar Cita m&eacute;dica</h2>
<center>
	<form name="formCita" id="formCita" action="Citas/addCita.php" method="POST">
		<input type="hidden" name="accion" id="accion" value="addCita" />
		<h3>Registrar Cita</h3>
		<label>Selecciona el Paciente*
			<?php if($listPacientes != null) //null significa vacío 
					{	?>
					<select name="IDPaciente" id="IDPaciente" required>
						
						<?php foreach($listPacientes as $renglon=>$campos)
								{	?>
									<option value="<?=$campos['IDPaciente']?>" ><?=$campos['APaterno']?>-<?=$campos['AMaterno']?>-<?=$campos['Nombre']?> </option>
						<?php 	}	?>
					</select>
			<?php 	} 	?>
		</label></br>
		<label>Selecciona el M&eacute;dico*
			<?php if($listMedicos != null) //null significa vacío 
					{	?>
					<select name="IDMedico" id="IDMedico" required>
						
						<?php foreach($listMedicos as $renglon=>$campos)
								{	?>
									<option value="<?=$campos['IDMedico']?>" ><?=$campos['APaterno']?>-<?=$campos['AMaterno']?>-<?=$campos['Nombre']?>-<?=$campos['Turno']?> </option>
						<?php 	}	?>
					</select>
			<?php 	} 	?>
		
		</label></br>
		<label>Fecha de consulta*
			<input type="date" name="Fecha" id="Fecha" required />
		</label></br>
		
		<label>Hora de consulta*
			<input type="time" name="Hora" id="Hora" required />
		</label></br>
		
		<input type="submit" name="btnRegistrar" id="btnRegistrar" value="Registrar Cita" />
		
		<input type="hidden" name="Confirmado" id="Confirmado" value="NO" />
	</form>
</center>