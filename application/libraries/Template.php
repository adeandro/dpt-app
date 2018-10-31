<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template
{
	protected $ci;

	protected $template_data = array();

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function set($content_area, $value)
	{
		$this->template_data[$content_area] = $value;
	}

	public function load($template = '', $name = '', $view = '', $view_data = array(), $return = FALSE)
	{
		$this->set($name, $this->ci->load->view($view, $view_data, TRUE));
		$this->ci->load->view('layouts/'.$template, $this->template_data);
	}

	

}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */
