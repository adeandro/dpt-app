<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$data = array();

		if ($this->ion_auth->logged_in()) {
			redirect('admin');
		}

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if ($this->ion_auth->login($email, $password)) {
				$this->session->set_flashdata('message', 'Success LogIn');	
				redirect('admin','refresh');
			}else{
				$this->session->set_flashdata('message',$this->ion_auth->errors());
				redirect('auth','refresh');
			}
		}

		$this->template->set('title','Login');
		$this->template->load('master_template','content','auth/login',$data);
	}

	public function login()
	{
		
	}

	public function logout()
	{
		$this->ion_auth->logout();
		redirect('auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */ 