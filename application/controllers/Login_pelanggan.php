<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pelanggan extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->model('LoginP_model','lpm');
}
	public function index()
	{
		$this->load->view('v_login_pelanggan');
	}
	public function cek_login()
	{
		if ($this->session->userdata('logged') == false) 
		{
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

			if ($this->form_validation->run()==true) 
			{
				if ($this->lpm->cek_pel()==true) {
					redirect('Dashboard_user/index','refresh');
				}
				else
				{
					$this->session->set_flashdata('pesan','gagal login');
					redirect('Login_pelanggan/index','refresh');
				}
			} 
			else 
			{
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('Login_pelanggan','refresh');
			}
		}
		else
		{
			redirect('Dashboard_user/index','refresh');
		}
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/Login_pelanggan'),'refresh');
	}

	public function tampil_daftar()
	{
		
		$this->load->view('v_daftar_pelanggan');
	}
	public function proses_daftar()
	{
		$this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if ($this->form_validation->run() == true) 
		{
			$tambah = $this->lpm->daftar();
			if ($tambah) 
			{
				$this->session->set_flashdata('pesan','berhasil daftar');
				redirect('Dashboard_user/index','refresh');
			}
			else
			{
				$this->session->set_flashdata('pesan','gagal daftar,,lengkapi data dulu');
				redirect('Login_pelanggan/tampil_daftar','refresh');
			}
		} 
		else 
		{
			$this->session->set_flashdata('pesan','gagal login,lengkapi data dulu');
			redirect('Login_pelanggan/tampil_daftar','refresh');
		}
	}

}

/* End of file Login_pelanggan.php */
/* Location: ./application/controllers/Login_pelanggan.php */