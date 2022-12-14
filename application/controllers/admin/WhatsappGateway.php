<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WhatsappGateway extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('customermodel');
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        $data = [
            "current_user" => $this->auth_model->current_user(),
            // "article_count" => $this->article_model->count(),
            // "feedback_count" => $this->feedback_model->count()
        ];

		$data_body = [
			"device_id" => "k6llpmgymzl",
			"token" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2Njk1NTM1MTV9.QSu3Pfb69Rr-ZHuM5cCLyFb4jpqqfXXEzWmh70vgu4o",
            "endpoint" => "https://api.wachatbot.id"
		];
    
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/partials/topbar', $data);
        $this->load->view('admin/whatsapp/index', $data_body);
        $this->load->view('admin/partials/footer');
		
	}

	
}
