<h2>Pacientes - Modificar datos de un registro</h2>
<?php

/*echo */$IDPaciente = $_GET['IDPaciente'];

$datosPaciente = obtenerDatosPaciente($IDPaciente);

//print_r($datosPaciente);

		if($datosPaciente!=null)//no está vacío
		{?>
			<center>
				<form name="frmEditPaciente" id="frmEditPaciente" action="Pacientes/updatePaciente.php" method="POST">
					<input type="hidden" name="accion" id="accion" value="updatePaciente" />
					<input type="hidden" name="IDPaciente" id="IDPaciente" value="<?=$datosPaciente['IDPaciente']?>" />
					<h3>Modificar datos del Paciente</h3>
					
					<label>IDPaciente: <?=$datosPaciente['IDPaciente']?>
					</label><br>
					
					<label>Apellido Paterno
						<input type="text" name="APaterno" id="APaterno" value="<?=$datosPaciente['APaterno']?>" required />
					</label><br>
					
					<label>Apellido Materno
						<input type="text" name="AMaterno" id="AMaterno" value="<?=$datosPaciente['AMaterno']?>" required />
					</label><br>
					
					<label>Nombre
						<input type="text" name="Nombre" id="Nombre" value="<?=$datosPaciente['Nombre']?>" required />
					</label><br>
					
					<label>Edad
						<input type="text" name="Edad" id="Edad" value="<?=$datosPaciente['Edad']?>" required />
					</label><br>
					
					<label>Peso
						<input type="text" name="Peso" id="Peso" value="<?=$datosPaciente['Peso']?>" required />
					</label><br>
					
					<label>Altura
						<input type="text" name="Altura" id="Altura" value="<?=$datosPaciente['Altura']?>" required />
					</label><br>
					
					<input type="submit" name="btnActualizar" id="btnActualizar" value="Actualizar Datos" />
					
				</form>
			<center>
<?php		}

?>