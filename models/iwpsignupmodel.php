<?php 
   class iwpsignupmodel extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) {
			
         if ($this->db->insert("signup", $data)) { 
            return true; 
         } 
      } 
   
   } 
?> 