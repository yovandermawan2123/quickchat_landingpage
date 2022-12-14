<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('information_model');
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
			"informations" => $this->information_model->getData()->result(),
		];
    
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/partials/topbar', $data);
        $this->load->view('admin/information/index', $data_body);
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
        $this->load->view('admin/information/create');
        $this->load->view('admin/partials/footer');
	}

	public function store(){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		// $data = array(
		// 	'judul' => 'Halaman Data',
		// 	'bio' => $this->m_data->ambil_data()->result()
		// );
		$information = $this->information_model;
        $validation = $this->form_validation;
        $validation->set_rules($information->rules());
		
		// $biodata->save();
		// $this->session->set_flashdata('success', 'Berhasil disimpan');
		// redirect(site_url('/web/bio'));

        if ($validation->run()) {
            $information->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
			
        }
		redirect(site_url('/admin/information'));
		

	
	}


	public function delete($id)
    {
		// print_r($id);die;
       
	
        if (!isset($id)) show_404();
        if ($this->information_model->delete($id)) {
			redirect(site_url('/admin/information'));
		}
        
    }

	public function edit($id){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		$data = array(
			"current_user" => $this->auth_model->current_user(),

			// 'bio' => $this->m_data->ambil_data()->result()
		);

		$data_body = [
			"information_get" => $this->information_model->getById($id),
		];
		
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/partials/topbar', $data);
        $this->load->view('admin/information/edit', $data_body);
        $this->load->view('admin/partials/footer');
	}


	public function update($id){
		
		$information = $this->information_model;
        $validation = $this->form_validation;
        $validation->set_rules($information->rules());

        if ($validation->run()) {
            $information->update($id);
			$this->session->set_flashdata('success', 'Berhasil diubah');
        }
		redirect(site_url('admin/information'));
		
	}
}
