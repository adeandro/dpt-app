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
		
		$data = array();

		$data['user'] = $this->ion_auth->user()->row();

		$this->template->set('title','Dashboard');
		$this->template->load('master_template','content','admin/dashboard',$data);

	}

	public function dpt_manager()
	{
		$data = array();
		$data['user'] = $this->ion_auth->user()->row();

		$this->template->set('title','DPT Manager');
		$this->template->load('master_template','content','admin/dpt_manager',$data);
	}

	public function user_manager()
	{
		$data = array();

		$this->template->set('title','Admin List');
		$this->template->load('master_template','content','admin/user_manager',$data);
	}

	public function logout()
	{
		$this->ion_auth->logout();
		redirect('auth');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */ 