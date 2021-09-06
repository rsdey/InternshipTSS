<?php 

class Query extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Create_model');
	}

	function index()
	{
		$this->load->view('contactUs');
	}

	function validate()
	{
		$captcha_response = trim($this->input->post('g-recaptcha-response'));

		if($captcha_response != '')
		{
			$keySecret = '6LdP2iIcAAAAACI5d9TcSOtr0XIu5SLQXPRVndqV';

			$check = array(
				'secret'		=>	$keySecret,
				'response'		=>	$this->input->post('g-recaptcha-response')
			);

			$startProcess = curl_init();

			curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

			curl_setopt($startProcess, CURLOPT_POST, true);

			curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

			curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

			curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

			$receiveData = curl_exec($startProcess);

			$finalResponse = json_decode($receiveData, true);

			if($finalResponse['success'])
			{
				$this->form_validation->set_rules('name','Name','required');
				$this->form_validation->set_rules('email','Email','required|valid_email');
				$this->form_validation->set_rules('phone','Phone','required');


				if($this->form_validation->run() == false){
					$this->load->view('contactUs');

				} else {

					$formArray = array();
					$formArray['name'] = $this->input->post('name');
					$formArray['email'] = $this->input->post('email');
					$formArray['phone'] = $this->input->post('phone');
					$formArray['email'] = $this->input->post('email');
					$formArray['query'] = $this->input->post('query');
					$formArray['submitted_at'] = date('Y-m-d');

					$this->Create_model->createQuery($formArray);

					$this->session->set_flashdata('success_message','Data sent successfully !');

					redirect(base_url().'index.php/AlandiDarshan/contactUs');



				}


				
			}
			else
			{
				$this->session->set_flashdata('message', 'Validation Failed Try Again');
				redirect(base_url().'index.php/AlandiDarshan/contactUs');
			}
		}
		else
		{
			$this->session->set_flashdata('message', 'Validation Failed Try Again !');

			redirect(base_url().'index.php/AlandiDarshan/contactUs');
		}
	}



	function delete($queryId)

	{
		$this->load->model('Delete_model');
		$item = $this->Delete_model->getQueryitem($queryId);

		if(!empty($item)){

			$this->Delete_model->deleteQuery($queryId);
			$this->session->set_flashdata('success','Record deleted successfully !');
			redirect(base_url().'index.php/Manage/queries');

		}
	}

}


 ?>