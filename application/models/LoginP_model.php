<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginP_model extends CI_Model {

	public function get_pelanggan()
	{
		$this->db->get('pelanggan')->result();
	}
	public function cek_pel()
	{
		$login = $this->db->where('username', $this->input->post('username'))
						  ->where('password', $this->input->post('password'))
						  ->get('pelanggan');

		if ($this->db->affected_rows()>0) 
		{
			$dt_user = $login->row();
			$array = array('id_pelanggan' => $dt_user->id_pelanggan,
							'username' => $dt_user->username, 
						   'password' => $dt_user->password,
						   'logged' => true );

			
			$this->session->set_userdata( $array );
			return true;
		}
		else
		{
			return false;
		}
	}
	public function tambah_pelanggan()
	{
		return $this->db->get('level')->result();
	}
	public function daftar()
	{
		$array = array('nama_pelanggan' => $this->input->post('nama_pelanggan'),
						'alamat' => $this->input->post('alamat'),
						'no_hp' => $this->input->post('no_hp'),
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password')
						 );
		$this->db->insert('pelanggan', $array);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}


/* End of file LoginP_model.php */
/* Location: ./application/models/LoginP_model.php */