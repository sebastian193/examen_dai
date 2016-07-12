<?php 
   require_once("../../class/usuario.class.php");
   $registro = new usuario();
?>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	  <?php $registro->insertUsuario($_POST['rut_usuario'], $_POST['nombre_usuario'], $_POST['apepaterno_usuario'], $_POST['apematerno_usuario'], $_POST['pass_user'], $_POST['reppass_user']) ?>
	</body>
</html>