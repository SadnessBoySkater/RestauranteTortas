<h2>Lista Ventas</h2>
<p>Aqu&iacute; se demuestran los m&eacute;dicos registrados en la base de datos:</p>

<?php

//$listaVentas = array();

$listaVentas = obtenerListaVentas();

//print_r($listaVentas);
//si $listaAlumnos es diferente de nulo o vacío
if($listaVentas!=null)
{
?>
	<table border=1>
		<tr>
			<th colspan="8">Lista de Ventas</th>
		</tr>
		<tr>
			<th>IDVenta</th>
			<th>APaterno</th>
			<th>AMaterno</th>
			<th>Nombre</th>
			<th>Especialidad</th>
			<th>Turno</td>
			<th colspan="2">Acciones/Funcionalidades</th>
		</tr>
		
	<?php
		//foreach se utiliza comunmente para arreglos
		foreach($listaVentas as $renglon=>$campos)
		{ ?>
			<tr>
				<td><?=$campos['IDVenta']?></td>
				<td><?=$campos['APaterno']?></td>
				<td><?=$campos['AMaterno']?></td>
				<td><?=$campos['Nombre']?></td>
				<td><?=$campos['Especialidad']?></td>
				<td><?=$campos['Turno']?></td>
				<td><a href="<?=ROOTURL?>?accion=deleteVenta&IDVenta=<?=$campos['IDVenta']?>">Eliminar</a></td>
				<td><a href="<?=ROOTURL?>?accion=editVenta&IDVenta=<?=$campos['IDVenta']?>">Modificar</a></td>
			</tr>
			
		<?php }?>
	</table>
<?php }else {?>

no hay datos

<?php }?>