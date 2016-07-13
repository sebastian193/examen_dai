<?php
require_once("../../class/usuario.class.php"); 
$objUsuario = new usuario();
$resulUsuario = $objUsuario->selectUsuario();

?>
<!DOCTYPE html>
<html>
<head>
	<title>CertificaDev</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script type="text/javascript" src="../../js/script.js"></script>
</head>
<body>
	<div id="cuerpo">
	<?php
		include("../portada/header.php");
	?>
	<div id="contenido" class="wrapper">
        <div class="wrapper">
		<form name="formUsuario" id="formUsuario" class="wrapper" method="post" action="procesarAgregarUsuario.php">
			<ul class="par2">
				<li>
					<p class="title">Registro de Usuario</p>
				</li>
				<li>
					<label class="txt">RUT</label>
					<input type="text" name="rut_usuario" onblur="validadorRut(this)" placeholder="11111111-1" pattern="\d{7,8}-[\d|kK]{1}" required/>
				</li>
				<li>
					<label>Nombres</label>
					<input type="text" name="nombre_usuario" class="box" onblur="ponerMayusculas(this)" required/>
				</li>
				<li>
					<label>Apellido paterno</label>
					<input type="text" name="apepaterno_usuario" onblur="ponerMayusculas(this)" required/>
				</li>
				<li>
					<label>Apelldo Materno</label>
					<input type="text" name="apematerno_usuario" onblur="ponerMayusculas(this)" required/>
				</li>
				<li>
					<label>Contraseña</label>
					<input type="password" name="pass_user" onblur="comprobarClave()" required/>
				</li>
				<li>
					<label>Repetir contraseña</label>
					<input type="password" name="reppass_user" onblur="comprobarClave()" required/>
				</li>
                <li>
                    <input type="submit" id="registrarUsurio" name="registrarUsuario" value="Registrar"/>
                    <input type="reset" id="limpiarFormulario" name="limpiarFormulario" value="Limpiar"/>
                </li>
			</ul>
		</form>
        </div>    
	</div>
	
	<?php
		include("../portada/footer.php");
	?>	
	</div>
</body>
</html>	