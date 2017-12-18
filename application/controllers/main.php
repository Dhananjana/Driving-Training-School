<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  //$this->load->model('user_model');
	}
	public function index(){//first check whether user id is exist.

		if($this->session->userdata('logged') == 1){
		 $this->load->model('select');
		 $this->load->model('admin');  
		 //load the method of model 
		 $data['h']=$this->select->select();
		 $data1['customer_data']=$this->admin->getCustomer(); 
		 $data['table'] = $this->load->view('adminCustom',$data1,TRUE);
		 //return the data in view  
		 $this->load->view('admin', $data);

			
		}
		else{
			$this->load->view('newlogin');	//if the user does not exist agian load to new login view
		}
		
	}
	public function table(){
		$this->load->model('admin');
		$data['customer_data'] = $this->admin->getCustomer();//load only the table div to refresh automatically
		$this->load->view('adminCustom',$data);
	}
	public function load(){
		$refresh = 'refresh';
		$this->table($refresh);//auto refresh the table part only
	}
	public function validate(){//validate and check whether user data are correct.
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('admin');
			if($this->admin->can_login($username, $password)){
				$session_data = array(
						 $username = 'username'
					);
				$this->session->set_userdata('logged','1');//if the user is can logging set user data to logged
				//$data['username'] = $username;
				redirect(base_url().'main');
			}
			else{
				$this->session->set_flashdata('error','Invalid username and password');
				$this->index();			
			}
		}
		else{
			$this->index();
		}
	}
	
	 public function registration()
	 {
	  $this->load->library('form_validation');
	  // field name, error message, validation rules
	  $this->form_validation->set_rules('name', 'name','trim|required');
	  $this->form_validation->set_rules('id', 'id','required|callback_checks_userID');
	  $this->form_validation->set_rules('email', 'email','trim|required|valid_email|max_length[50]');
	  $this->form_validation->set_rules('password', 'password','trim|required|min_length[4]|max_length[20]');
	  
	  if($this->form_validation->run() == FALSE)
	  {
	   $this->load->model('select');  
	   //load the method of model  
	   $data['h']=$this->select->select();  
	   //return the data in view  
	   $this->load->view('admin', $data); 	
	  }
	  else
	  {
	   $this->load->model("admin");
	   $this->admin->add_user();//if the form validation is correct add user to system.
	   redirect(base_url().'main');
	  }
	 }
	function checks_userID($requested_ID){
	    $this->load->model('admin');//load the user model to this function
	    $id_available = $this->admin->check_userID_exists($requested_ID);//check whether the user id exists in the database
	    if($id_available){
	      return TRUE;//if the user data is id available send true
	    } else {
	      return FALSE;
	    }
	  }
	
 	public function login(){
		if($this->session->userdata('logged') == 1){
			redirect(base_url().'main');
		}
		else{
			$this->load->view('newlogin');//if the user data logged is not set load view login	
		}
		
	}
	function logout()  //logout function of the admin system.
      {  
           if($this->session->userdata('logged') == 1){
				$this->session->unset_userdata('logged');
           		//$this->session->unset_userdata('username');
           		$this->session->sess_destroy();  
           		redirect(base_url().'main/login');
			}
			else{
				$this->load->view('newlogin');	
			}  
      }
      /*public function send_mail() { 
         $from_email = "dhananjana.mobi@gmail.com"; 
         $to_email = $this->input->post('email'); 
   	     $send_subject = $this->input->post('subject');
   	     $textmessage = $this->input->post('message');
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject($send_subject); 
         $this->email->message($textmessage); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('admin'); 
      }*/
      function deleteCust(){
      	$id1 = $this->input->post('idnumber');
      	$this->load->model('admin');
	    $this->admin->deleteCust($id1);//remove customers
	    redirect(base_url().'Main');
      } 
    function updateCustomer(){
    $this->load->library('form_validation');
    // validate the users
    $this->form_validation->set_rules('customerclasses','VehicleClass','required');
    $this->form_validation->set_rules('customerjdate', 'JoinedDate','required');
    $this->form_validation->set_rules('customeredate', 'ExamDate','required');
    $this->form_validation->set_rules('customertdate','TrialDate','required');
    $this->form_validation->set_rules('customerpnumber','PhoneNumber','required|max_length[10]');
    $this->form_validation->set_rules('customerpayment','Payment','required');
  if($this->form_validation->run() == FALSE)
  {
  	$this->session->set_flashdata("message","Record Not Updated!");
    redirect(base_url().'main','refresh');    
  }
  else
  {    
    $data= array(//again take data from updating form
      'customerNIC' => $this->input->post('customernic'),
      'name'=>$this->input->post('customername'),
      'classes'  => $this->input->post('customerclasses'),
      'joinedDate'   => $this->input->post('customerjdate'),
      'examDate'   => $this->input->post('customeredate'),
      'trialDate'=> $this->input->post('customertdate'),
      'phoneNumber'=> $this->input->post('customerpnumber'),
      'paymentDetails'=> $this->input->post('customerpayment')
    );
    $id1 = $this->input->post('customernic');
    $this->load->model('admin');
    $this->admin->updateCustomer($data,$id1);
    redirect(base_url().'main');
    
  }  
  }
  /*function send(){
  	/*$config = Array(
  		'protocol' =>'smtp',
  		'smtp_host' => 'smtp.gmail.com',
  		'smtp_port' => 465,
  		'smtp_user' =>'dhananjana.mobi@gmail.com',
  		'smtp_pass' => 'mobi@1995',
  		'charset' => 'iso-8859-1',
  		'mailpath' => '/usr/sbin/sendmail'
  		'wordwrap' => TRUE,
  		'mailtype' => 'html' 
  		);*/
	/*$config['protocol'] = 'smtp';
	$config['smtp_host'] = 'smtp.gmail.com';
	//$config['smtp_port'] = 465;
	$config['smtp_user'] = 'dhananjana.mobi@gmail.com';
	$config['smtp_pass'] = 'mobi@1995';
	$config['mailpath'] = '/usr/sbin/sendmail';
	$config['charset'] = 'utf-8';
	$config['wordwrap'] = TRUE;

	$this->load->library('email');
	$this->email->initialize();
	$this->email->set_newline("\r\n");

  	$this->email->from('dhananjana.mobi@gmail.com','Dhananjana Milinda');
  	$this->email->to('dhananjana.milinda.kumarasiri@gmail.com');
  	$this->email->subject('test');
  	$this->email->message('testing practise1');
  	if($this->email->send()) 
     	echo "send";
    else 
        echo "not send";
  }*/
  

}