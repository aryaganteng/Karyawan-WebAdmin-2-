<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

	public function index()
	{
		$data['konten']='home';
		$this->load->view('template', $data);
	}

}

/* End of file Template.php */
/* Location: ./application/controllers/Template.php */