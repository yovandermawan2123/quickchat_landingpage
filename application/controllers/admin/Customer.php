<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');
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
			"customers" => $this->customer_model->getData()->result(),
		];
    
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/partials/topbar', $data);
        $this->load->view('admin/customer/index', $data_body);
        $this->load->view('admin/partials/footer');
		
	}

	public function delete($id)
    {
		// print_r($id);die;
        $customers = $this->customer_model->getById($id);
       
	
        if (!isset($id)) show_404();
        if ($this->customer_model->delete($id)) {
			redirect(site_url('/admin/customer'));
		}

       
        
    }

	
}
