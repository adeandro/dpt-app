<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$data = array();
		$this->template->set('title','Test');
		$this->template->load('master_template','content','auth/login', $data);	
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		echo $email." ".$password;
	}

	public function dashboard()
	{
		$data = array();

		$this->template->set('title','Dashboard');
		$this->template->load('master_template','content','admin/dashboard', $data);
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */ 