<?php 
   class iwpfeedbackmodel extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) { 
         if ($this->db->insert("feedback", $data)) { 
            return true; 
         } 
      } 
   
   } 
?> 