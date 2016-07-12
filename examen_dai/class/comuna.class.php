<?php  
require_once("conexion.class.php"); 

class comuna extends conexion{  
    
    public function __construct(){ 
    parent::__construct();
    } 

    public function selectComuna(){ 
        $sql = "SELECT * FROM comuna order by comuna ASC";
		$result = $this->db->query($sql); 
        return $result; 
    }
} 

?> 