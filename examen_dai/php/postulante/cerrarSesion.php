<?php
require_once("../../class/sesion.class.php"); 
$objetoSesion = new sesion();
$objetoSesion->chequearSesion();
$objetoSesion->cerrarSesion();
exit("A cerraso su sesión. <br><br> 
<input type='button' value='ACEPTAR' onclick=\"top.location.href='../portada/portada.php'\">");
?>
