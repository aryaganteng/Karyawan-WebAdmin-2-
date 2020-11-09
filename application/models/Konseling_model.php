<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konseling_model extends CI_Model {

	public function get_konseling()
	{
		$data_konseling= $this->db->join('kategori','kategori.id_kategori=konseling.id_kategori')
		->join('status','status.id_status=konseling.id_status')
		->get('konseling')->result();
		return $data_konseling;
	}
	public function masuk_db()
  {
    $data_konseling=array(
      'id_konseling'=>$this->input->post('id_konseling'),
      'id_kategori'=>$this->input->post('id_kategori'),
      'id_status'=>$this->input->post('id_status'),
      'nama_konseling'=>$this->input->post('nama_konseling'),
      'pengalaman'=>$this->input->post('pengalaman'),
      'alamat'=>$this->input->post('alamat'),
      'no_hp'=>$this->input->post('no_hp'),
      'jadwal'=>$this->input->post('jadwal'),
      'tarif'=>$this->input->post('tarif'),

    );
    $ql_masuk=$this->db->insert('konseling', $data_konseling);
    return $ql_masuk;
  }
  public function detail_konseling($id_konseling='')
{
  return $this->db->where('id_konseling', $id_konseling)->get('konseling')->row();
  }

   public function update_konseling()
  {
    $dt_up_konseling=array(
			'id_konseling'=>$this->input->post('id_konseling'),
			'id_kategori'=>$this->input->post('id_kategori'),
			'id_status'=>$this->input->post('id_status'),
			'nama_konseling'=>$this->input->post('nama_konseling'),
			'pengalaman'=>$this->input->post('pengalaman'),
			'alamat'=>$this->input->post('alamat'),
      'no_hp'=>$this->input->post('no_hp'),
			'jadwal'=>$this->input->post('jadwal'),
			'tarif'=>$this->input->post('tarif'),
    );
  return $this->db->where('id_konseling',$this->input->post('id_konseling'))->update('konseling', $dt_up_konseling);
  }
  public function hapus_konseling($id_konseling)
  {
    $this->db->where('id_konseling', $id_konseling);
     return $this->db->delete('konseling');
  }


}

/* End of file Konseling_model.php */
/* Location: ./application/models/Konseling_model.php */
