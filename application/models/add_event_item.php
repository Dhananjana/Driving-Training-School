<?php  
   class add_event_item extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function insert_event()  
      {  
         
         $event_data = array(
             'eventTitle' => $this->input->post('event',TRUE),
             'Date' => $this->input->post('date',TRUE), 
         );
         return $this->db->insert('event',$event_data);
      }  
   }  
?>  