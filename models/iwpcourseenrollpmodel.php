<?php 
   class iwpcourseenrollpmodel extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) { 
         if ($this->db->insert("courses", $data)) { 
            return true; 
         } 
      } 
   
   } 
?> 



