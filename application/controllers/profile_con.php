<?php

class Profile_con extends CI_Controller
{
    public function __construct(){
        parent:: __construct();
        $this->load->model('profile_model','m');
    } 

    public function index(){
        $id= $this->input->post('NICnumber');
        
        $data['menu'] = $this->load->view('commen/header2',null,TRUE);
        
        if($this->m->getUserById($id)){
            $data['user'] = $this->m->getUserById($id);
        }
        else{
            //$this->session->set_flashdata('error','Invalid user NIC');
            redirect(base_url('customer/home'));
        }
        $this->load->view('profile_view',$data);
        
    }
    
    public function update(){

        
        //form validation
        
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
       
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'full_name' => $this->input->post('full_name'),
                'dob' => $this->input->post('dob'),
                'address' => $this->input->post('address'),
                'phone_no' => $this->input->post('phone_no')
            );
            $id=$this->input->post('nic_number');

            $result = $this->m->update($id,$data);
            if($result){
                $this->session->set_flashdata('success_msg','user updated successfully');
            }
            else{
                $this->session->set_flashdata('error_msg','fail to update');
            }
            $data['user'] = $this->m->getUserById($id);
            
            $data['menu'] = $this->load->view('commen/header2',null,TRUE);
            $this->load->view('profile_view',$data);
            
        }
        else {
            
            $data['user'] = $this->m->getUserById($id);
            $data['menu'] = $this->load->view('commen/header2',null,TRUE);
            $this->load->view('profile_view',$data);
        }
        
    }
}
?>
