<?php

class Auth extends CI_Controller
{

	

	public function index()
	{
		show_404();
	}

	public function login()
	{
		

		$this->load->model('auth_model');
		$this->load->library('form_validation');

		if($this->auth_model->current_user()){
			redirect('admin/dashboard');
		}

		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('auth/login');
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->auth_model->login($email, $password)){
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}

		$this->load->view('auth/login');
	}

	public function logout()
	{
		$this->load->model('auth_model');
		$this->auth_model->logout();
		redirect(site_url(). 'auth/login');
	}
}