<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  //$this->load->model('user_model');
	}
	public function index(){
		//$this->load->view('test');
		 //load the database  
		 $this->load->database();  
		 //load the model  
		 $this->load->model('select');  
		 //load the method of model  
		 $data['h']=$this->select->select();  
		 //return the data in view  
		 $this->load->view('admin', $data); 
	}
}