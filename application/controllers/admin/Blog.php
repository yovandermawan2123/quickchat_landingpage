<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('blog_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}


	public function index()
	{
        $data = [
            "current_user" => $this->auth_model->current_user(),
            // "article_count" => $this->article_model->count(),
            // "feedback_count" => $this->feedback_model->count()
        ];

		$data_body = [
			"blogs" => $this->blog_model->getData()->result(),
		];
    
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/partials/topbar', $data);
        $this->load->view('admin/blog/index', $data_body);
        $this->load->view('admin/partials/footer');
		
	}

	public function create(){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		$data = array(
			"current_user" => $this->auth_model->current_user(),

			// 'bio' => $this->m_data->ambil_data()->result()
		);

		
		
        $this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/partials/topbar', $data);
        $this->load->view('admin/blog/create');
        $this->load->view('admin/partials/footer');
	}

	public function store(){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		// $data = array(
		// 	'judul' => 'Halaman Data',
		// 	'bio' => $this->m_data->ambil_data()->result()
		// );
        $data['image']= '';

        // print_r($_FILES['image']['name']);die();
        $images = $_FILES['image']['name'];
        $config['upload_path'] = './upload_files';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('image')){
            echo 'Gambar tidak berhasil diupload!';
        } else {
            $gambar = $this->upload->data('file_name');
            $data['image'] = $gambar;
        }




		$blog = $this->blog_model;
        $validation = $this->form_validation;
        $validation->set_rules($blog->rules());
		
		// $biodata->save();
		// $this->session->set_flashdata('success', 'Berhasil disimpan');
		// redirect(site_url('/web/bio'));

        if ($validation->run()) {
            $blog->save($images);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
			
        }
		redirect(site_url('/admin/blog'));
		

	
	}


	public function delete($id)
    {
		// print_r($id);die;
        $blogs = $this->blog_model->getById($id);
       
	
        if (!isset($id)) show_404();
        if ($this->blog_model->delete($id)) {
            unlink("./upload_files/" . $blogs->image);
			redirect(site_url('/admin/blog'));
		}

       
        
    }

	public function edit($id){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		$data = array(
			"current_user" => $this->auth_model->current_user(),

			// 'bio' => $this->m_data->ambil_data()->result()
		);

		$data_body = [
			"information_get" => $this->blog_model->getById($id),
		];
		
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/partials/topbar', $data);
        $this->load->view('admin/information/edit', $data_body);
        $this->load->view('admin/partials/footer');
	}


	public function update($id){
		
		$information = $this->blog_model;
        $validation = $this->form_validation;
        $validation->set_rules($information->rules());

        if ($validation->run()) {
            $information->update($id);
			$this->session->set_flashdata('success', 'Berhasil diubah');
        }
		redirect(site_url('admin/information'));
		
	}
}
