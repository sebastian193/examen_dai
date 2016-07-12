<?php
require_once("conexion.class.php");

class usuario extends conexion{ 
     	
    public function __construct(){ 
        parent::__construct(); 
    }

    public function selectUsuario(){ 
        $sql = "SELECT * FROM usuario order by rut_usuario ASC";
		$result = $this->db->query($sql); 
        return $result; 
    }

    public function insertUsuario($rut_usuario, $nombre_usuario, $apepaterno_usuario, $apematerno_usuario, $pass_user, $reppass_user){
        
	    $sql = "select * from usuario where rut_usuario = '".$rut_usuario."'";

		$result = $this->db->query($sql);
        
		if($result->num_rows > 0){
            
		   die("El usuario con el rut ".$rut_usuario." ya existe");
            
		}else{
		   $sql = "insert into usuario (rut_usuario, nombre_usuario, apepaterno_usuario, apematerno_usuario, pass_user, reppass_user)  values('".$rut_usuario."','".$nombre_usuario."','".$apepaterno_usuario."','".$apematerno_usuario."','".$pass_user."','".$reppass_user."')";
            
			   if ($this->db->query($sql) === TRUE) {
				   echo("El usuario ".$rut_usuario." ha sido agregado exitosamente");
			   }else{
				   echo("El usuario NO ha sido agregado");
			   }			   
		}
	}
	
	public function getDatosUsuario($rut_usuario){ 
        $sql = "select * from paciente where rut_usuario = '".$rut_usuario."'";
		$result = $this->db->query($sql);
        $datos = $result->fetch_assoc();		
        return $datos; 
    }	
			   
	}

?>