<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
	
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
    public function show($id){
		// $data['bio'] = $this->m_data->ambil_data()->result();

		$data_body = [
			"post_get" => $this->blog_model->getById($id),
			// "post_get" => 'Test',
		];
		
        $this->load->view('home/partials/header');
        // $this->load->view('home/partials/navbar');
        $this->load->view('home/post', $data_body);
        $this->load->view('home/partials/footer_content');
        $this->load->view('home/partials/footer');
	}

	
}









