<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingPrice extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('settingprice_model');
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
			"prices" => $this->settingprice_model->getData()->result(),
		];
    
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/partials/topbar', $data);
        $this->load->view('admin/setting_price/index', $data_body);
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
        $this->load->view('admin/setting_price/create');
        $this->load->view('admin/partials/footer');
	}

	public function store(){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		// $data = array(
		// 	'judul' => 'Halaman Data',
		// 	'bio' => $this->m_data->ambil_data()->result()
		// );
		$setting_price = $this->settingprice_model;
        $validation = $this->form_validation;
        $validation->set_rules($setting_price->rules());
		
		// $biodata->save();
		// $this->session->set_flashdata('success', 'Berhasil disimpan');
		// redirect(site_url('/web/bio'));

        if ($validation->run()) {
            $setting_price->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
			
        }
		redirect(site_url('/admin/settingprice'));
		

	
	}


	public function delete($id)
    {
		// print_r($id);die;
       
	
        if (!isset($id)) show_404();
        if ($this->settingprice_model->delete($id)) {
			redirect(site_url('/admin/settingprice'));
		}
        
    }

	public function edit($id){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		$data = array(
			"current_user" => $this->auth_model->current_user(),

			// 'bio' => $this->m_data->ambil_data()->result()
		);

		$data_body = [
			"price_get" => $this->settingprice_model->getById($id),
		];
		
		$this->load->view('admin/partials/header');
		$this->load->view('admin/partials/sidebar');
		$this->load->view('admin/partials/topbar', $data);
        $this->load->view('admin/setting_price/edit', $data_body);
        $this->load->view('admin/partials/footer');
	}


	public function update($id){
		
		$setting_price = $this->settingprice_model;
        $validation = $this->form_validation;
        $validation->set_rules($setting_price->rules());

        if ($validation->run()) {
            $setting_price->update($id);
			$this->session->set_flashdata('success', 'Berhasil diubah');
        }
		redirect(site_url('admin/settingprice'));
		
	}

	
}
