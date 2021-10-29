<h2>Lista de Citas</h2>
<p>Aqu&iacute; se demuestran las citas registrados en la base de datos:</p>

<?php

$listaCitas = obtenerListaCitas();

//print_r($listaCitas);

if($listaCitas!=null)
{
?>
	<table border=1>
		<tr>
			<th colspan="8">Lista de Citas</th>
		</tr>
		<tr>
			<th>IDCita</th>
			<th>Nombre Paciente</th>
			<th>M&eacute;dico</th>
			<th>Turno</th>
			<th>Fecha</th>
			<th>Hora</th>
			<th>Confirmado</th>
			<th>Acci&oacute;n confirmar</th>
		</tr>
		
	<?php
		//foreach se utiliza comunmente para arreglos
		foreach($listaCitas as $renglon=>$campos)
		{ ?>
			<tr>
				<td><?=$campos['IDCita']?></td>
				
				<?php $datosPaciente = obtenerDatosPaciente($campos['IDPaciente']);?>
				
				<td><?=$datosPaciente['APaterno']?>-<?=$datosPaciente['AMaterno']?>-<?=$datosPaciente['Nombre']?></td>
				
				<?php $datosMedico = obtenerDatosMedico($campos['IDMedico']);?>
				
				<td><?=$datosMedico['APaterno']?>-<?=$datosMedico['AMaterno']?>-<?=$datosMedico['Nombre']?></td>
				<td><?=$datosMedico['Turno']?></td>
				
				<td><?=$campos['Fecha']?></td>
				<td><?=$campos['Hora']?></td>
				<td><?=$campos['Confirmado']?></td>
				<?php if($campos['Confirmado']=="NO") 
						{?>
						<td><a href="<?=ROOTURL?>?accion=confirmarCita&IDCita=<?=$campos['IDCita']?>">Registrar confirmaci&oacute;n</a></td>
				<?php   }else{ ?>
							<td>-</td>
				<?php   } ?>
			</tr>
			
		<?php }?>
	</table>
<?php }else {?>

no hay datos

<?php }?>