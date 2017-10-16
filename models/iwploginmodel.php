<?php 
   class iwploginmodel extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) { 
         if ($this->db->insert("login", $data)) { 
            return true; 
         } 
      } 
   
   } 
?> 