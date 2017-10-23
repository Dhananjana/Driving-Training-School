<?php
class AddEvent extends CI_Controller {
	public function __construct(){
	  parent::__construct();
	  //$this->load->model('user_model');
	}
	public function AddNew(){
		$this->form_validation->set_rules('event', 'Event', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');

		if ($this->form_validation->run() == FALSE)
		{
					
						redirect('main');

		}
						
						
		else
		{
				 //load the database  
		 $this->load->database();  
		 //load the model  
		 $this->load->model('add_event_item');
		 $response = $this->add_event_item->insert_event();  
		 if($response){
			 redirect('main');
		 }
		 //load the method of model  
		 //$data['h']=$this->select->select();  
		 //return the data in view  	
		 //$this->load->view('admin', $data); 	
		}
		
		
	}
}
?>