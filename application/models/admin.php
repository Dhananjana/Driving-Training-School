<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
public function add_user()//here we add new admin to system
 {
  $data= array(
      'name' => $this->input->post('name'),
      'userid'  => $this->input->post('id'),
      'email'    => $this->input->post('email'),
      'password'   => $this->input->post('password')
  );//take data set to data array
  $insert = $this->db->insert('admin',$data);//insert data to admin table in database
  return $insert;
 }
 function can_login($username, $password)
	{
		$this->db->where('userid', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');//check whether the user name and password exist.

		if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}
  function check_user_reg($nicnumber){
    $this->db->where('nic_number',$nicnumber);
    $query = $this->db->get('customer_registration');//check whether the customer exist
    if($query->num_rows()>0){
      return TRUE;
    }
    else{
      return FALSE;
    }
  }
  function check_user_available($nicnumber, $password)
  {
    $this->db->where('nic_number', $nicnumber);//check whether the user exist in the system.
    $this->db->where('password', $password);
    $query = $this->db->get('new_customer_sign');

    if($query->num_rows()>0){
      return true;
    }
    else{
      return false;
    }
  }

  function save_newcustomer_detail($nicnumber,$password)
  {
    $nicnumber = $this->input->post('NICnumber');
    $password = $this->input->post('password');
    $data =  array('nic_number'=>$nicnumber,
            'password' =>$password);

    $this->db->insert('new_customer_sign',$data);

  }

 function check_userID_exists($userID){
 	//validate the user id
    $this->db->where('userid',$userID);
    $result = $this->db->get('admin');

    if($result->num_rows()>0){
      return FALSE; //username taken
    } else {
      return TRUE; //username reject
    }
  }
  function getCustomer(){
    $this->db->select('*');
    $this->db->from('regcustomer');
    $query = $this->db->get();
    return $query->result();
  }
  function deleteCust($id){
    $this->db->where('customerNIC', $id);
    $this->db->delete('regcustomer');
  }
  function updateCustomer($data, $id){
    //print_r($data);
    $this->db->set($data);
    $this->db->where('customerNIC', $id);
    $this->db->update('regcustomer', $data);
  }
  function checkID($id){
    $this->db->select('*');
    $this->db->from('new_customer_sign');
    $this->db->where('nic_number',$id);
    $result = $this->db->get();
    if($result->num_rows()>0){
      return TRUE; 
    } else {
      return FALSE; 
    }
  }
}
 
