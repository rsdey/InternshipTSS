<?php 

class Auth extends CI_Controller{
	
	public function register(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == false){
			$this->load->view('register');
			
		} else{

			$this->load->model('register_model');

			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['email'] = $this->input->post('email');
			$formArray['password'] = password_hash($this->input->post('password'),PASSWORD_BCRYPT);

			$this->register_model->create($formArray);

			$this->session->set_flashdata('msg','Account Created !');
			

			redirect(base_url().'index.php/auth/login');


		}

		

	}

	public function login(){

		$this->load->model('register_model');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == true){

			$email = $this->input->post('email');
			$user = $this->register_model->checkUser($email);

			if(!empty($user)){

				$password = $this->input->post('password');


				if(password_verify($password, $user['password']) == true){

					$sessionArray['id'] = $user['id'];
					$sessionArray['name'] = $user['name'];
					$sessionArray['email'] = $user['email'];
					$this->session->set_userdata('user',$sessionArray);



					redirect(base_url().'index.php/auth/dashboard');



				} else{
					
					$this->session->set_flashdata('msg','Incorrect Password !');
					redirect(base_url().'index.php/auth/login');

				}


			} else{
				
				$this->session->set_flashdata('msg','Incorrect Data !');
				redirect(base_url().'index.php/auth/login');
			}

		} else{

			$this->load->view('login');

		}


		
	}

	function dashboard(){

		$user = $this->session->userdata('user');
		$data['user'] = $user;


		
		$this->load->view('dashboard',$data);
		
	}

	

	function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url().'index.php/auth/login');
	}
}


 ?>