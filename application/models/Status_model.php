<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_model extends CI_Model {
	
	public function get_status()
	{
		$data_status= $this->db->get('status')->result();
		return $data_status;
	}
	public function masuk_db()
	{
		$data_status=array(
		'nama_status'=>$this->input->post('nama_status')
		);
		$sql_masuk = $this->db->insert('status', $data_status);
		return $sql_masuk;
	}	
	public function detail_status($id_status){
		return $this->db->where('id_status', $id_status)->get('status')->row();
	}
	public function update_status()
	{
		$dt_up_status=array(
		'nama_status'=>$this->input->post('nama_status')
		);
		return $this->db->where('id_status',$this->input->post('id_status'))->update('status', $dt_up_status);
	}
	public function delete_status($id_status)
	{
		$delete = $this->db->where('id_kategori',$id_kategori)->delete('kategori');
		return $delete;
	}

	

}

/* End of file Status_model.php */
/* Location: ./application/models/Status_model.php */