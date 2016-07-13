<?php
require_once("../../class/sesion.class.php"); 
$objetoSesion = new sesion();
$objetoSesion->chequearSesion();
$nivel = $objetoSesion->getNivelAcceso();

?>
<header>
	<div id="logo" class="wrapper"><a href="perfilPostulante.php"><h1>CertificaDev</h1></a></div>
		<nav class="wrapper">
            <a><h5>Bienvenido usuario RUT <?php echo $objetoSesion->getUsuario()?></h5></a>
			<a href="ingresarPostulante.php">Ingresar  Solicitud </a>
			<a href="cerrarSesion.php">Cerrar Sesión</a>
		</nav>
</header>