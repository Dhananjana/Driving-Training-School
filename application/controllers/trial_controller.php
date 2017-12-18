<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Trial_controller extends CI_Controller
	{
		
		// function __construct()
		// {
		// 	# code...
		// 	parent::__construct();
		// }

		function insert_data()
		{

			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
		 	$this->form_validation->set_rules('date', 'Date', 'required');
			$this->form_validation->set_rules('checktype', 'Type', 'required');
			$this->form_validation->set_rules('participation', 'Participation', 'required');
			$this->form_validation->set_rules('fail_count', 'Fail_Count', 'required');

			if($this->form_validation->run()==FALSE)
			{
				$this->load->view('admin');
			}
			else
			{

        		$this->load->model('trial_model');
       			$response = $this->trial_model->fetch_data();
       			if($response)
       			{
       			//$this->session->set_flashdata('msg','Added Successfuly');
       			redirect('main');
       			}
			}
	
	
		}
	}

?>