<h2>Lista Productos</h2>
<p>Aqu&iacute; se demuestran los Productos registrados en la base de datos:</p>

<?php

//$listaProductos = array();

$listaProductos = obtenerListaProductos();

//print_r($listaProductos);
//si $listaAlumnos es diferente de nulo o vacío
if($listaProductos!=null)
{
?>
	<table border=1>
		<tr>
			<th colspan="11">Lista de Productos</th>
		</tr>
		<tr>
			<th>IDProducto</th>
			<th>Imagen</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Estado</th>
			<th>Aplica Descuento</th>
			<th colspan="5">Acciones/Funcionalidades</th>
		</tr>
		
	<?php
		//foreach se utiliza comunmente para arreglos
		foreach($listaProductos as $renglon=>$campos)
		{ ?>
			<tr>
				<td><?=$campos['IDProducto']?></td>
				<td><center><img class="foto" src="<?=$campos['mostrarFoto']?>"/></center></td>
				<td><?=$campos['Nombre']?></td>
				<td><?=$campos['Precio']?> $MX</td>
				<td><?=$campos['Estado']?></td>
				
				<td><?=$campos['AplicaDescuento']?></td>
				
				<?php if($campos['Estado']=="NO") 
						{?>
						<td><a href="<?=ROOTURL?>?accion=confirmarProducto&IDProducto=<?=$campos['IDProducto']?>">Registrar Falta</a></td>
				<?php   }else{ ?>
							<td>-</td>
				<?php   } ?>
				
				<?php if($campos['AplicaDescuento']=="AGOTADO") 
						{?>
						<td><a href="<?=ROOTURL?>?accion=confirmarProducto&IDProducto=<?=$campos['IDProducto']?>">Registrar confirmaci&oacute;n</a></td>
				<?php   }else{ ?>
							<td>-</td>
				<?php   } ?>
				<td><a href="<?=ROOTURL?>?accion=deleteProducto&IDProducto=<?=$campos['IDProducto']?>">Eliminar</a></td>
				<td><a href="<?=ROOTURL?>?accion=editProducto&IDProducto=<?=$campos['IDProducto']?>">Modificar</a></td>
				<td><a href="<?=ROOTURL?>?accion=imgProducto&IDProducto=<?=$campos['IDProducto']?>">Agregar Imagen</a></td>
			</tr>
			
		<?php }?>
	</table>
<?php }else {?>

no hay datos

<?php }?>