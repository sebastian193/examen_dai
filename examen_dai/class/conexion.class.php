<?php
require_once("../../conf/config.php"); 

class conexion{ 
    protected $db; 

    public function __construct() 
    { 
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS); 
        if ( $this->db->connect_error ) 
        { 
            die("Fallo al conectar a MySQL: ". $this->_db->connect_error); 
        }else{
		    $this->db->select_db(DB_NAME);
		} 
    }
    
    public function cerrar(){
	   $this->db->close();
	}	
} 
?>