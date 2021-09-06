<?php 

class Manage extends CI_Controller{


	public function scrollingNews(){

		$user = $this->session->userdata('user');
		$data['user'] = $user;



		$this->load->model('List_model');
		
		$snews = $this->List_model->getSnews();

		
		$data['snews'] = $snews;
		$this->load->view('scrollingNews',$data);
		
	}

	function banner(){


		$user = $this->session->userdata('user');
		$data['user'] = $user;

		$this->load->view('dashboard',$data);
	}

	function admins(){


		$user = $this->session->userdata('user');
		$data['user'] = $user;

		$this->load->model('List_model');
		
		$admins = $this->List_model->getAdmins();

		
		$data['admins'] = $admins;
		$this->load->view('admins',$data);

	}

	public function queries(){

		$user = $this->session->userdata('user');
		$data['user'] = $user;



		$this->load->model('List_model');
		
		$queries = $this->List_model->getQueries();

		
		$data['queries'] = $queries;
		$this->load->view('queries',$data);
		
	}

	public function marriageHalls(){

		$user = $this->session->userdata('user');
		$data['user'] = $user;

		$this->load->view('marriageHalls',$data);




	}


}

 ?>