<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sansthas extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Sansthas_model');
      $this->load->library('upload');
      $this->load->library('pagination');
      $user = $this->session->userdata('user');
      $data['user'] = $user;
  }

  // function to retrieve data
  public function index()
  {
      $user = $this->session->userdata('user');
      $data['user'] = $user;
      $tosearch = $this->input->get('tosearch');
      $page = $this->input->get('per_page');

      $search = array('name' => $tosearch );

      $limit =  8; // 8 data per page
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

      $this->load->view('sansthas',$data);
  }

  // to display the add data page
  public function create()
  {
      $user = $this->session->userdata('user');
      $data['user'] = $user;
      return $this->load->view('createSansthas',$data);
  }

  // to enter data into database
  public function insertdata()
  {

      $user = $this->session->userdata('user');
      $data['user'] = $user;

      $name   = $this->input->post('name');
      $description = $this->input->post('description');



      // get foto
      $config['upload_path'] = './assets/images/Sansthasimages';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

      if (!empty($_FILES['fotopost']['name'])) {
          if ( $this->upload->do_upload('fotopost') ) {
              $foto = $this->upload->data();
              $data = array(
                            'name'       => $name,
                            'image'       => $foto['file_name'],
                            'description'     => $description,
                          );
              $this->Sansthas_model->insert($data);
              $this->session->set_flashdata('success','Record added successfully !');
              redirect(base_url().'index.php/sansthas/index');
          }else {
                 $this->load->view('failS',$data);
          }
      }else {
         
          $this->load->view('failS',$data);
      }

  }

  // delete
  public function deletedata($id,$image)
  {
      $path = './assets/images/Sansthasimages/';
      @unlink($path.$foto);

      $where = array('id' => $id );
      $this->Sansthas_model->delete($where);
      $this->session->set_flashdata('success','Record deleted successfully !');
      return redirect(base_url().'index.php/sansthas/index');
  }

  // edit
  public function edit($id)
  {
      $condition = array('id' => $id );
      $user = $this->session->userdata('user');
      $data['user'] = $user;

      $data['data'] = $this->Sansthas_model->get_by_id($condition);
      return $this->load->view('editSansthas',$data);
  }


  // update
  public function updatedata()
  {

      $user = $this->session->userdata('user');
      $data['user'] = $user;

      $id   = $this->input->post('id');
      $name = $this->input->post('name');
      $description = $this->input->post('description');

      $path = './assets/images/Sansthasimages/';

      $condition = array('id' => $id );

      // get foto
      $config['upload_path'] = './assets/images/Sansthasimages';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

      if (!empty($_FILES['fotopost']['name'])) {
          if ( $this->upload->do_upload('fotopost') ) {
              $foto = $this->upload->data();
              $data = array(
                            'name'       => $name,
                            'image'       => $foto['file_name'],
                            'description'     => $description,
                          );
              
              @unlink($path.$this->input->post('filelama'));

              $this->Sansthas_model->update($data,$condition);
              $this->session->set_flashdata('success','Record updated successfully !');
              redirect(base_url().'index.php/sansthas/index');
          }else {
                 $this->load->view('failS',$data);
          }
      }else {
            $this->load->view('failS',$data);
      }

  }


} 
