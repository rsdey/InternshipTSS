<?php 

class Edit_model extends CI_Model{

	function getSnewsitem($snewsId){

		$this->db->where('id',$snewsId);
		return $item = $this->db->get('scrolling_news')->row_array();
	}

	function updateSnews($snewsId, $formArray){

		$this->db->where('id',$snewsId);
		$this->db->update('scrolling_news',$formArray);
	}


}

 ?>