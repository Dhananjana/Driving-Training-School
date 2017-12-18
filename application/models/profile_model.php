<?php

class profile_model extends CI_Model
{
    public function getUserById($id){
        
        $this->db->select('*');
        $this->db->from('customer_registration');
        $this->db->where('nic_number', $id); //here $id
        $query = $this->db->get();
        
        if($query->num_rows() > 0){
            return $query->row();
        }
        else {
            return false;
        }
        
    }

    public function insert($id,$data){
        $this->db->where('nic_number', $id);
		$this->db->update('customer_registration', $data);
		echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }

    public function update($id,$data){
        $this->db->update('customer_registration', $data, array('nic_number' => $id));
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        }
        
    }

}
