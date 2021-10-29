<h2>Ventas - Modificar datos de un registro</h2>
<?php

/*echo */$IDVenta = $_GET['IDVenta'];

$datosVenta = obtenerDatosVenta($IDVenta);

//print_r($datosVenta);

		if($datosVenta!=null)//no está vacío
		{?>
			<center>
				<form name="frmEditVenta" id="frmEditVenta" action="Ventas/updateVenta.php" method="POST">
					<input type="hidden" name="accion" id="accion" value="updateVenta" />
					<input type="hidden" name="IDVenta" id="IDVenta" value="<?=$datosVenta['IDVenta']?>" />
					<h3>Modificar datos de la Venta</h3>
					
					<label>IDVenta: <?=$datosVenta['IDVenta']?>
					</label><br>
					
					<label>Apellido Paterno
						<input type="text" name="APaterno" id="APaterno" value="<?=$datosVenta['APaterno']?>" required />
					</label><br>
					
					<label>Apellido Materno
						<input type="text" name="AMaterno" id="AMaterno" value="<?=$datosVenta['AMaterno']?>" required />
					</label><br>
					
					<label>Nombre
						<input type="text" name="Nombre" id="Nombre" value="<?=$datosVenta['Nombre']?>" required />
					</label><br>
					
					<label>Especialidad
						<input type="text" name="Especialidad" id="Especialidad" value="<?=$datosVenta['Especialidad']?>" required />
					</label><br>
					
					<label>Turno
						<input type="text" name="Turno" id="Turno" value="<?=$datosVenta['Turno']?>" required />
					</label><br>
					
					<input type="submit" name="btnActualizar" id="btnActualizar" value="Actualizar Datos" />
					
				</form>
			<center>
<?php		}

?>