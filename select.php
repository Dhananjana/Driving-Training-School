<?php  
   class select extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function select()  
      {  
         //data is retrive from this query 
         $curdate = date('Y-m-d'); 
         $query = $this->db->get_where('lesson',array('lesson_date >='=> $curdate));  
         return $query;  
      }  
   }  
?>  