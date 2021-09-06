<?php 

class Snews extends CI_Controller{


	function createSnews(){
		$this->load->model('Create_model');
		$user = $this->session->userdata('user');
		$data['user'] = $user;
		


		$this->form_validation->set_rules('snews','Snews','required');

		if($this->form_validation->run() == false){
			$this->load->view('createSnews',$data);

		} else{

			$formArray = array();
			$formArray['snews'] = $this->input->post('snews');

			$this->Create_model->createSnews($formArray);

			$this->session->set_flashdata('success','Record added successfully !');

			redirect(base_url().'index.php/Manage/scrollingNews');



		}

		
	}

		
	function editSnews($snewsId)
	{
		$this->load->model('Edit_model');
		$user = $this->session->userdata('user');
		$data['user'] = $user;
		


		$item = $this->Edit_model->getSnewsitem($snewsId);
		
		$data['item'] = $item;

		$this->form_validation->set_rules('snews','Snews','required');
		


		if($this->form_validation->run() == false){

			$this->load->view('editSnews',$data);

		} else {
			$formArray = array();
			$formArray['snews'] = $this->input->post('snews');

			$this->Edit_model->updateSnews($snewsId, $formArray);
			$this->session->set_flashdata('success','Record updated successfully !');
			redirect(base_url().'index.php/Manage/scrollingNews');
		}


	}

	function delete($snewsId)

	{
		$this->load->model('Delete_model');
		$item = $this->Delete_model->getSnewsitem($snewsId);

		if(!empty($item)){

			$this->Delete_model->deleteSnews($snewsId);
			$this->session->set_flashdata('success','Record deleted successfully !');
			redirect(base_url().'index.php/Manage/scrollingNews');

		}
	}


}


 ?>