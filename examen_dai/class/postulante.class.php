<?php  
require_once("conexion.class.php"); 

class postulante extends conexion{  
		
    public function __construct(){ 
        parent::__construct(); 
    }

    public function selectPostulante(){ 
        $sql = "SELECT * FROM postulante order by rut_post ASC";
		$result = $this->db->query($sql); 
        return $result; 
    }

    public function insertPostulante($rut_post, $nombre_post, $apepaterno_post, $apematerno_post, $fechanac_post, $sexo_post, $telefono_post, $email_post, $direccion_post, $comuna, $educacion_post, $experiencia_post, $modalidad_post, $curso_post){
        
	    $sql = "select * from postulante where rut_post = '".$rut_post."' ";
        
		$result = $this->db->query($sql);
        
		if($result->num_rows > 0){
		   die("El postulante con el rut ".$rut_post." ya existe <br><br> <input type='button' value='VOLVER' onclick='javascript:history.back()'>");
		}else{
            
		   $sql = "insert into postulante(rut_post, nombre_post, apepaterno_post, apematerno_post, fechanac_post, sexo_post, telefono_post, email_post, direccion_post, comuna, educacion_post, experiencia_post, modalidad_post, curso_post)  values('".$rut_post."','".$nombre_post."','".$apepaterno_post."','".$apematerno_post."','".$fechanac_post."','".$sexo_post."','".$telefono_post."','".$email_post."','".$direccion_post."','".$comuna."','".$educacion_post."','".$experiencia_post."','".$modalidad_post."','".$curso_post."')";
            
			   if ($this->db->query($sql) === TRUE) {
				   echo("El postulante con el ".$rut_post." ha sido agregado exitosamente <br><br> <input type='button' value='ACEPTAR' onclick='volverMedico()''>");
			   }else{
				   echo("El medico NO ha sido agregado <br><br> <input type='button' value='ACEPTAR' onclick='volverMedico()''>");
			   }			   
		}
	}
    
	public function getDatosPostulante($rut_post){ 
         
        $sql = "select * from postulante where rut_post = '".$rut_post."'";
		$result = $this->db->query($sql);
        $datos = $result->fetch_assoc();		
        return $datos; 
    }
}

?> 