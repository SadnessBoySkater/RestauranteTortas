<?php
print_r($_POST);

require_once('../configuracion.php');
include_once('../MySqli_conexiondb.php');

$accion = $_POST['accion'];
$NombreUsuario = $_POST['NombreUsuario'];
$Contrasena = $_POST['Contrasena'];


	if($accion=="login")
	{
		$query = "SELECT IDUsuario, APaterno, AMaterno, Nombre, Puesto, NombreUsuario, Contrasena FROM usuarios WHERE NombreUsuario='$NombreUsuario' AND Contrasena='$Contrasena'";
		
		$resultado = mysqli_query($conexion,$query);
			if(!$resultado)
			{
				?>			
			<center>
				<h3>Error al intentar Iniciar sesi&oacute;n!!!<?=mysqli_error($conexion)?></h3>
				<br><input type="button" value="Ir al formulario de inicio de sesi&oacute;n" onclick=self.location="<?=ROOTURL?>" />
			</center>
			
<?php		}else {
				$datosUsuario = mysqli_fetch_assoc($resultado);
				
				//en php el Y(AND) es && (2 anpersand juntos)
				if($datosUsuario['NombreUsuario']==$NombreUsuario && $datosUsuario['Contrasena']==$Contrasena)
				{
					$_SESSION['user_session'] = $datosUsuario['IDUsuario'];
					
					
			?>

				<center>
					<h3>Usuario autorizado para ingresar!!!</h3>
					<br><input type="button" value="Ir a la p&aacute;gina de inicio" onclick=self.location="<?=ROOTURL?>" />
				</center>
				
<?php			}else
				{
				?>
				
				<center>
					<h3>Usuario no autorizado para ingresar!!!</h3>
					<br><input type="button" value="Ir al formulario de inicio de sesi&oacute;n" onclick=self.location="<?=ROOTURL?>" />
				</center>
				
<?php			}
			}
?>
<?php	}else {?>
			<center>
				<h3>Opci&oacute;n incorrecta!!!</h3>
				<br><input type="button" value="Ir al formulario de inicio de sesi&oacute;n" onclick=self.location="<?=ROOTURL?>" />
			</center>
<?php	}      ?>
