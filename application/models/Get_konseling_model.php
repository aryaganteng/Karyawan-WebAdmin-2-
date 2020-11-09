<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_konseling_model extends CI_Model {

	public function get_konseling()
	{
		return $this->db->where('id_status', 1)->get('konseling')->result();
	}
	public function cari_get_konseling($nama_konseling)
	{
		return $this->db->like('nama_konseling', $nama_konseling)->get('konseling')->result();
	}

	public function get_detail($id_konseling)
	{
		return $this->db->join('kategori','kategori.id_kategori=konseling.id_kategori')
		->join('status','status.id_status=konseling.id_status')
		->where('id_konseling',$id_konseling)
		->get('konseling')->row();
	}

}

/* End of file Get_konseling_model.php */
/* Location: ./application/models/Get_konseling_model.php */