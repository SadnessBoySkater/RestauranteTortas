<?php
//print_r($_SESSION);
?>
<html lang="es">
	<head>
		<meta charset="ÜTF-8">
		<meta name="description" content="Primera pr&aacute;ctica de la clase de Aplicaciones Web" />
		
		<meta name="keywords" content="programación, páginas web, cetis58, 4DM" />
		
		<meta name="author" content="08_BravoZazuetaIanCaleb" />
		
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		
		<title>Inicio de sesi&oacute;n | 08_BravoZazuetaIanCaleb</title>
		
		
		<link rel="StyleSheet" type="text/css" href="css/login.css" />
	</head>
	<body>
	</br>
		<center>
			<form name="formLogin" id="formLogin" action="Login/loginProcess.php" method="POST" >
				<input type="hidden" name="accion" id="accion" value="login" />
				<h1> Inicio de sesi&oacute;n </h1>
				<img src="images/iconoUser.png" width="125" height="125" />
				</br>
				
				<input type="text" name="NombreUsuario" id="NombreUsuario" placeholder="Escribe nombre de usuario" required />
				</br>
				<input type="password" name="Contrasena" id="Contrasena" placeholder="Escribe contrase&ntilde;a" required />
				<br>
				<input type="submit" name="btnLogin" id="btnLogin" value="Ingresar" />
			</form>
		</center>
	</body>
</html>