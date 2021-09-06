<?php 

class Register_model extends CI_Model{


	public function create($formArray){

		$this->db->insert('admin',$formArray);
	}

	public function checkUser($email){
		$this->db->where('email',$email);
		return $row = $this->db->get('admin')->row_array();


	}
}


 ?>