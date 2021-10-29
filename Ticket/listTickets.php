<h2>Lista Tickets</h2>
<p>Aqu&iacute; se demuestran los Productos registrados en la base de datos:</p>

<?php

//$listaTickets = array();

$listaTickets = obtenerListaTickets();

//print_r($listaTickets);
//si $listaAlumnos es diferente de nulo o vacío
if($listaTickets!=null)
{
?>
	<table border=1>
		<tr>
			<th colspan="10">Lista de Tickets</th>
		</tr>
		<tr>
			<th>IDTicket</th>
			<th>Fecha</th>
			<th>Hora</th>
			<th>Producto</th>
			<th>Precio</th>
			<th>IVA</th>
			<th>Importe</th>
			<th>Total</th>
			<th>Ahorro</th>
			<th>NomCajero</th>
		</tr>
		
	<?php
		//foreach se utiliza comunmente para arreglos
		foreach($listaTickets as $renglon=>$campos)
		{ ?>
			<tr>
				<td><?=$campos['IDTicket']?></td>
				<td><?=$campos['fechaDia']?></td>
				<td><?=$campos['fechaHora']?></td>
				<td><?=$campos['Producto']?></td>
				<td><?=$campos['Precio']?></td>
				<td><?=$campos['IVA']?> $MX</td>
				<td><?=$campos['Importe']?> $MX</td>
				<td><?=$campos['Total']?> $MX</td>
				<td><?=$campos['Ahorro']?> $MX</td>
				<td><?=$campos['NomCajero']?></td>
			</tr>
			
		<?php }?>
	</table>
<?php }else {?>

no hay datos

<?php }?>