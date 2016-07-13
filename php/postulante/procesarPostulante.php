<?php 
   require_once("../../class/postulante.class.php");
   $registro = new postulante();
?>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

	  <?php $registro->insertPostulante($_POST['rut_post'], $_POST['nombre_post'], $_POST['apepaterno_post'], $_POST['apematerno_post'], $_POST['fechanac_post'], $_POST['sexo_post'], $_POST['telefono_post'], $_POST['email_post'], $_POST['direccion_post'], $_POST['comuna'], $_POST['educacion_post'], $_POST['experiencia_post'], $_POST['modalidad_post'], $_POST['curso_post'])
	  ?>

	</body>
</html>