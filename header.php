<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Restaurante de Tortas, 5DM, Materia Aplicaciones Servidor">
		<meta name="keywords" content="restaurante, tortas, CETis 58, emiliano zapata">
		<meta name="author" content="<?=AUTOR?>">
		<title> <?=SIDENAME?> | <?=AUTOR?></title>
		
		<link rel="StyleSheet" type="text/css" href="css/miEstilo.css" />
		<link rel="StyleSheet" type="text/css" href="css/tabla.css" />
		<link rel="StyleSheet" type="text/css" href="css/menu.css" />
	</head>
	<body>
		<div id="header">
			<div id="logo">
				<img src="images/logo58.jpg">
			</div>
			<div id="menu">
				<ul>
					<li><a href=".">Inicio</a></li>
					<li>Ticket
						<ul>
							<li><a href="<?=ROOTURL?>?accion=listTickets">Lista Productos </a></li>
						</ul>
					</li>
					<li>Productos
						<ul>
							<li><a href="<?=ROOTURL?>?accion=listProductos">Lista Productos </a></li>
							<li><a href="<?=ROOTURL?>?accion=addProducto"> Registrar producto </a></li>
						</ul>
					</li>
					<li>Ventas
						<ul>
							<li><a href="<?=ROOTURL?>?accion=listVentas">Lista Ventas </a></li>
							<li><a href="<?=ROOTURL?>?accion=addVenta"> Registrar Venta </a></li>
						</ul>
					</li>
					<li>Ventas Detalles
						<ul>
							<li><a href="<?=ROOTURL?>?accion=listDetallesVentas">Lista Ventas Detalles</a></li>
							<li><a href="<?=ROOTURL?>?accion=addDetalleVenta"> Registrar Ventas Detalles </a></li>
						</ul>
					</li>
					<li><a href="Login/logout.php">Cerrar sesi&oacute;n</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>