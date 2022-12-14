<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('information_model');
		$this->load->model('settingprice_model');
		$this->load->model('blog_model');
		$this->load->model('customer_model');
		
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
		$data_body = [
			"device_id" => "k6llpmgymzl",
			"token" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2Njk1NTM1MTV9.QSu3Pfb69Rr-ZHuM5cCLyFb4jpqqfXXEzWmh70vgu4o",
            "endpoint" => "https://api.wachatbot.id",
			"jumbotron" => $this->information_model->getByType("Jumbotron"),
			"about" => $this->information_model->getByType("About"),
			"trial" => $this->information_model->getByType("Trial"),
			"prices" => $this->settingprice_model->getData()->result(),
			"blogs" => $this->blog_model->getData()->result(),
		];



        $this->load->view('home/partials/header');
        $this->load->view('home/partials/navbar');
        $this->load->view('home/index', $data_body);
        $this->load->view('home/partials/footer_content');
        $this->load->view('home/partials/footer');
		
	}


	public function store(){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		// $data = array(
		// 	'judul' => 'Halaman Data',
		// 	'bio' => $this->m_data->ambil_data()->result()
		// );
		$customer = $this->customer_model;
        $validation = $this->form_validation;
        $validation->set_rules($customer->rules());
		
		// $biodata->save();
		// $this->session->set_flashdata('success', 'Berhasil disimpan');
		// redirect(site_url('/web/bio'));

        if ($validation->run()) {
            $customer->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
			
        }
		redirect(site_url('/'));
		

	
	}




	
}
