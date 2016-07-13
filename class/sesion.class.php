<?php  
session_start();
require_once("conexion.class.php"); 

class sesion extends conexion{
	
	public function iniciarSesion($rut_usuario, $pass_user){
        
        $sql = "select * from usuario where rut_usuario='".$rut_usuario."' ";
        $sql = "select * from usuario where pass_user='".$pass_user."' ";


		$result = $this->db->query($sql);
        
        if($datos = $result->fetch_assoc()){
            $_SESSION['iniciada'] = true;
            $_SESSION['rut_usuario'] = $rut_usuario;
            $_SESSION['nivel'] = $datos['nivel_acceso'];
            header("Location: ../../php/postulante/perfilPostulante.php");

		}else{
		   $_SESSION['iniciada'] = false;
		   echo("Usuario o contraseña es incorrecto o usted no esta registrado <br><br> 
		   		<input type='button' value='ACEPTAR' onclick=\"top.location.href='../../php/ingresarUsuario/agregarUsuario.php'\">");
		}	
		
	}
	
	public function cerrarSesion(){
	   session_destroy();
	}
	
	public function chequearSesion(){
	   if($_SESSION['iniciada']){
	       return true;
	   }else{
		   exit("La sesi&oacute;n expir&oacute; o no ha sido iniciada. <br><br> <input type='button' value='ACEPTAR' onclick=\"top.location.href='../index.php'\">");
		   return false;
	   }
	}
	
	public function getNivelAcceso(){
	   return $_SESSION['nivel'];
	}

	public function getUsuario(){
	   return $_SESSION['rut_usuario'];
	}
	      
}

?>