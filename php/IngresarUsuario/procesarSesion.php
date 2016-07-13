<?php
require_once("../../class/sesion.class.php"); 
$objetoSesion = new sesion();
$objetoSesion->iniciarSesion($_POST['rut_usuario'],$_POST['pass_user']);
?>