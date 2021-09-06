<?php 

class Delete_model extends CI_Model{

	function getSnewsitem($snewsId){

		$this->db->where('id',$snewsId);
		return $item = $this->db->get('scrolling_news')->row_array();
	}

	function deleteSnews($snewsId){

		$this->db->where('id',$snewsId);
		$this->db->delete('scrolling_news');
	}

	function getQueryitem($queryId){

		$this->db->where('id',$queryId);
		return $item = $this->db->get('contact_form')->row_array();
	}	

	function deleteQuery($queryId){

		$this->db->where('id',$queryId);
		$this->db->delete('contact_form');
	}


}

 ?>