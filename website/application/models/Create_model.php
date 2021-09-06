<?php 

class Create_model extends CI_Model{

	function createSnews($formArray){

		$this->db->insert('scrolling_news',$formArray);
	}

	function createQuery($formArray){

		$this->db->insert('contact_form',$formArray);
	}

}


 ?>