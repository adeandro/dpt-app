<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		if (!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata('message','You must loggin to access the admin page');
			redirect('auth');
		}
	}

	public function index()
	{
		
		echo "welcome to dpt dashboard";

	}

	public function logout()
	{
		$this->ion_auth->logout();
		redirect('auth');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */ 