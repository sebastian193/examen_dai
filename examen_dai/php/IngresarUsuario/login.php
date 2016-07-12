<?php


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
		<div id="login" class="wrapper">
			<form id="formSesion" action="procesarSesion.php" method="POST">
				<ul>
					<li class="par">
						<p class="title">Iniciar Sesión</p>
					</li>
					<li>
						<p>Usuario</p>
						<input type="text" name="rut_usuario" id="rut_usurio" placeholder="Ingrese su RUT" onblur="validadorRut(this)" required/>
					</li>
					<li class="par">
						<p>Contraseña</p>
						<input type="password" name="pass_user" id="pass_user" placeholder="Ingrese su contraseña" required/>
					</li>              
					<input type="submit" name="login" id="login" value="Iniciar Sesión"/>
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