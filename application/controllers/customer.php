<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  //$this->load->model('user_model');
	}
	function head1(){
		$this->load->view('commen/header1');
	}
	function head2(){
		$this->load->view('commen/header2');
	}
	function head3(){
		$this->load->view('commen/header3');
	}
	function home(){
		if($this->session->userdata('logged') == 1)
		{
			$data['menu'] = $this->load->view('commen/header2',null,TRUE);
			$this->load->view('customer/index',$data);
		}
		elseif($this->session->userdata('logged') == 2)
		{
			$data['menu'] = $this->load->view('commen/header3',null,TRUE);
			$this->load->view('customer/index',$data);
		}
		else{
			$data['menu'] = $this->load->view('commen/header1',null,TRUE);
			$this->load->view('customer/index',$data);
		}		
	}
	function about(){
		if($this->session->userdata('logged') == 1)
		{
			$data['menu'] = $this->load->view('commen/header2',null,TRUE);
			$this->load->view('customer/about',$data);
		}
		elseif($this->session->userdata('logged') == 2)
		{
			$data['menu'] = $this->load->view('commen/header3',null,TRUE);
			$this->load->view('customer/about',$data);
		}
		else{
			$data['menu'] = $this->load->view('commen/header1',null,TRUE);
			$this->load->view('customer/about',$data);
		}
	}
	// register new user to the system
	function registration_new(){ 
		if($this->session->userdata('logged') == 1)
		{
			$data['menu'] = $this->load->view('commen/header2',null,TRUE);
			$this->load->view('customer/registration_new',$data);
		}
		elseif($this->session->userdata('logged') == 2)
		{
			$data['menu'] = $this->load->view('commen/header2',null,TRUE);
			$this->load->view('customer/registration_new',$data);
		}
		else{
			
			redirect(base_url().'customer/home');
		}
		
	}
	//show service tab acording to the logging
	function service(){
		if($this->session->userdata('logged') == 1)
		{
			$data['menu'] = $this->load->view('commen/header2',null,TRUE);
			$this->load->view('customer/service',$data);
		}
		elseif($this->session->userdata('logged') == 2)
		{
			$data['menu'] = $this->load->view('commen/header3',null,TRUE);
			$this->load->view('customer/service',$data);
		}
		else{
			$data['menu'] = $this->load->view('commen/header1',null,TRUE);
			$this->load->view('customer/service',$data);
		}
	}
	function signout()  
      {  
           if($this->session->userdata('logged') == 1){
				$this->session->unset_userdata('logged');
           		//$this->session->unset_userdata('username');
           		$this->session->sess_destroy();  
           		redirect(base_url().'customer/home');
			}
			elseif($this->session->userdata('logged') == 2){
				$this->session->unset_userdata('logged');
           		//$this->session->unset_userdata('username');
           		$this->session->sess_destroy();  
           		redirect(base_url().'customer/home');
			}
			else{
				$this->home();	
			}  
      }
    
	function cus_sign(){
		$this->load->view('customer/cus_sign');
	}
	//sign in action
	function action(){
		if($this->input->post('Sign_button'))
		{
    
		
			$this->load->library('form_validation');
			$this->form_validation->set_rules('NICnumber', 'NIC number', 'required|regex_match[/^[0-9]{9}$/]');
			$this->form_validation->set_rules('password','Password', 'required');
			if($this->form_validation->run())
			{
				$nicnumber = $this->input->post('NICnumber');
				$password = $this->input->post('password');

				$this->load->model('admin');
				if($this->admin->check_user_available($nicnumber, $password))
				{
					$session_data = array(
						 $nicnumber = 'NICnumber'
					);
					if($this->admin->check_user_reg($nicnumber)){
						$this->session->set_userdata('logged','2');
					}
					else{
						$this->session->set_userdata('logged','1');
					}
					//$data['username'] = $username;
					redirect(base_url().'customer/customer_profile');
				}
				else
				{
					$this->load->model('admin');
					$this->admin->save_newcustomer_detail($nicnumber,$password);
					//$this->load->view('customer/registration_new');
					redirect(base_url().'customer/registration_new');		
				}
			}
			else
			{
				$this->session->set_flashdata('error','Invalid username and password');
			 	$this->home();
			}
	
		}
 		{
    //Cancel button was pressed
			$this->load->view('customer/index');
			 
		}
	}
	//sign up action
	function action1(){
		if($this->input->post('Sign_button'))
		{
    
		
			$this->load->library('form_validation');
			$this->form_validation->set_rules('NICnumber', 'NIC number', 'required|regex_match[/^[0-9]{9}$/]|callback_checkID');
			$this->form_validation->set_rules('password','Password', 'required');
			if($this->form_validation->run())
			{
				$nicnumber = $this->input->post('NICnumber');
				$password = $this->input->post('password');

				$this->load->model('admin');
				if($this->admin->check_user_available($nicnumber, $password))
				{
					$session_data = array(
						 $nicnumber = 'NICnumber'
					);
					if($this->admin->check_user_reg($nicnumber)){
						$this->session->set_userdata('logged','2');
					}
					else{
						$this->session->set_userdata('logged','1');
					}
					
					redirect(base_url().'customer/customer_profile');
				}
				else
				{
					$this->load->model('admin');
					$this->admin->save_newcustomer_detail($nicnumber,$password);
					
					redirect(base_url().'customer/registration_new');		
				}
			}
			else
			{
				$this->session->set_flashdata('error','Invalid username and password');
			 	$this->home();
			}
	
		}
 		{
    //Cancel button was pressed
			$this->load->view('customer/index');
			//<?php echo form_close(); 
		}
	}
	function checkID($id){
		$this->load->model('admin');
		if($this->admin->checkID($id)){
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	function customer_profile(){
		if($this->session->userdata('logged') == 1)
		{
			$data['menu'] = $this->load->view('commen/header2',null,TRUE);
			$this->load->view('customer/customer_profle',$data);
		}
		elseif($this->session->userdata('logged') == 2)
		{
			$data['menu'] = $this->load->view('commen/header2',null,TRUE);
			$this->load->view('customer/customer_profle',$data);
		}
		else{
			redirect('customer/home');
		}
		
	}
	//register form validation
	function register_customer()
	{
		if($this->session->userdata('logged') == 1){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nic', 'Nic', 'required');
			$this->form_validation->set_rules('fullname', 'Fullname', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('dob', 'DoB', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('fullname', 'Fullname', 'required');
			$this->form_validation->set_rules('pnumber', 'Pnumber', 'required');
			$this->form_validation->set_rules('division', 'Division', 'required');
			$this->form_validation->set_rules('oldnumber', 'Oldnumbr');
			$this->form_validation->set_rules('issueDate', 'Issuedate');
			$this->form_validation->set_rules('policeStation', 'PoliceStation', 'required');
			$this->form_validation->set_rules('vehicle_class', 'Vehicle_class', 'required');
			if($this->form_validation->run()==FALSE)
			{
				$this->load->view('registration_new');
			}
			//insert data to the table
			else
			{
				$data =  array(
               'nic_number' => $this->input->post('nic',TRUE),
               'full_name'  => $this->input->post('fullname',TRUE),
               'gender'     => $this->input->post('gender',TRUE),
               'dob'        => $this->input->post('dob',TRUE),
               'address'    => $this->input->post('address',TRUE),
               'phone_no'   => $this->input->post('pnumber',TRUE),
               'division'   => $this->input->post('division',TRUE),
               'old_licence_no'          => $this->input->post('oldnnumber',TRUE),
               'old_licence_issue_date'  => $this->input->post('issueDate',TRUE),
               'police_station'          => $this->input->post('policeStation',TRUE),
               'vehicle_class'           => $this->input->post('vehicle_class',TRUE)

                );

	        	$this->load->model('register_model');
	       		$response = $this->register_model->insert_user_Data($data);
	       		if($response)
	       		{
	       			$this->session->unset_userdata('logged');
	       			$this->session->set_userdata('logged','2');
	       			$this->session->set_flashdata('msg','Registered Successfuly');
	       			redirect('customer/registration_new');
	       		}
			}
		}
		else{
			$this->home();
		}
	}
	
}
?>		