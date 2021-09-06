<?php 

class AlandiDarshan extends CI_Controller{

	public function home(){

		$this->load->model('List_model');
		
		$snews = $this->List_model->getSnews();

		
		$data['snews'] = $snews;
		
		$this->load->view('home',$data);
	}

	public function contactUs(){

		$this->load->view('contactUs');


	}
	public function places(){

		$this->load->view('places');

	}

	public function gallary(){

		$this->load->view('gallary');

	}

	public function howtoreach(){

		$this->load->view('howtoreach');

	}

	public function aboutus(){

		$this->load->view('aboutus');

	}

	

	public function accomodationPage(){

		$this->load->view('accomodationPage');

	}

	public function booksPage(){

		$this->load->view('booksPage');

	}

	public function marriagehallsPage(){

      $this->load->model('MarriageHalls_model');
      $this->load->library('upload');
      $this->load->library('pagination');

	$tosearch = $this->input->get('tosearch');
      $page = $this->input->get('per_page');

      $search = array('name' => $tosearch );

      $limit =  9; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
      $config['base_url']          = base_url().'index.php/marriageHalls/?tosearch='.$tosearch;
      $config['total_rows']        = $this->MarriageHalls_model->count_row($search);

      $config['per_page']          = $limit;
      $config['uri_segment']       = $page;

      $config['full_tag_open']    = '<ul class="pagination">';
      $config['full_tag_close']   = '<ul>';

      $config['first_link']       = 'first';
      $config['first_tag_open']   = '<li><a>';
      $config['first_tag_close']  = '</a></li>';

      $config['last_link']        = 'last';
      $config['last_tag_open']    = '<li><a>';
      $config['last_tag_close']   = '</a></li>';

      $config['next_link']        = '&raquo;';
      $config['next_tag_open']    = '<li><a>';
      $config['next_tag_close']   = '</a></li>';

      $config['prev_link']        = '&laquo;';
      $config['prev_tag_open']    = '<li><a>';
      $config['prev_tag_close']   = '</a></li>';

      $config['cur_tag_open']     = '<li class="active"><a>';
      $config['cur_tag_close']    = '</a></li>';

      $config['num_tag_open']     = '<li><a>';
      $config['num_tag_close']    = '</a></li>';

      $this->pagination->initialize($config);
      $data['pagination']  = $this->pagination->create_links();
      $data['count_page'] = $page;


      $data['data'] = $this->MarriageHalls_model->get($limit,$offset,$search);

      $this->load->view('marriageHallsPage',$data);
  


	}

      public function sansthasPage(){

      $this->load->model('Sansthas_model');
      $this->load->library('upload');
      $this->load->library('pagination');
      
      $tosearch = $this->input->get('tosearch');
      $page = $this->input->get('per_page');

      $search = array('name' => $tosearch );

      $limit =  9; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
      $config['base_url']          = base_url().'index.php/sansthas/?tosearch='.$tosearch;
      $config['total_rows']        = $this->Sansthas_model->count_row($search);

      $config['per_page']          = $limit;
      $config['uri_segment']       = $page;

      $config['full_tag_open']    = '<ul class="pagination">';
      $config['full_tag_close']   = '<ul>';

      $config['first_link']       = 'first';
      $config['first_tag_open']   = '<li><a>';
      $config['first_tag_close']  = '</a></li>';

      $config['last_link']        = 'last';
      $config['last_tag_open']    = '<li><a>';
      $config['last_tag_close']   = '</a></li>';

      $config['next_link']        = '&raquo;';
      $config['next_tag_open']    = '<li><a>';
      $config['next_tag_close']   = '</a></li>';

      $config['prev_link']        = '&laquo;';
      $config['prev_tag_open']    = '<li><a>';
      $config['prev_tag_close']   = '</a></li>';

      $config['cur_tag_open']     = '<li class="active"><a>';
      $config['cur_tag_close']    = '</a></li>';

      $config['num_tag_open']     = '<li><a>';
      $config['num_tag_close']    = '</a></li>';

      $this->pagination->initialize($config);
      $data['pagination']  = $this->pagination->create_links();
      $data['count_page'] = $page;


      $data['data'] = $this->Sansthas_model->get($limit,$offset,$search);

      $this->load->view('sansthasPage',$data);
  


      }
}


 ?>