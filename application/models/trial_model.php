<?php
	
	class Trial_model extends CI_Model
	{
		
		function __construct()
		{
		
			parent::__construct();
		}
		// insert data to the tabel
		public function fetch_data()
		{
			$data = array(
				'date' => $this->input->post('date',TRUE),
				'type' => $this->input->post('checktype',TRUE),
				'participation' => $this->input->post('participation',TRUE),
				'fail_count' => $this->input->post('fail_count',TRUE)
			);

			return $this->db->insert('trial',$data); 
		}
	}



?>