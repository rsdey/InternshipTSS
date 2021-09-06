<?php 

class List_model extends CI_Model{


	function getSnews(){
		return $snews = $this->db->get('scrolling_news')->result_array();
	}

	function getAdmins(){
		return $admins = $this->db->get('admin')->result_array();
	}

	function getQueries(){
		return $queries = $this->db->get('contact_form')->result_array();
	}
}


 ?>