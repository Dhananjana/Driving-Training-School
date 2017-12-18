<?php  
   class Register_model extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function insert_user_Data($data)  
      {  
         return $this->db->insert('customer_registration',$data);
      }  
   }  
?>  