<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model {

	public function get_form()
	{

		$data_laporan = $this->db->join('form','form.id_form=laporan.id_form')
		->join('pelanggan','pelanggan.id_pelanggan=laporan.id_pelanggan')
		->get('form')->result();
		return $data_laporan;
	}
	public function get_pelanggan(){
		$data_pelanggan = $this->db->get('pelanggan')
						->result();
		return $data_pelanggan;
	}
	public function masuk_db()
	{
		$data_form=array(	
			'hasil'=>$this->input->post('hasil')
		);
		$sql_masuk = $this->db->insert('form', $data_form);
		return $sql_masuk;
	}	
	public function detail_laporan($id_form){
		return $this->db->where('id_form', $id_form)->get('form')->row();
	}
	public function update_laporan($value='')
	{
		$data = [
			'id_status' =>1
		];
		$this->db->where('id_konseling',$this->input->post('id_konseling'))->update('konseling', $data);
		$dt_up_form=array(
		'hasil'=>$this->input->post('hasil')
		);
		return $this->db->where('id_form',$this->input->post('id_form'))->update('form', $dt_up_form);
	}
	public function delete_laporan($id_form)
	{
		$delete = $this->db->where('id_form',$id_form)->delete('form');
		return $delete;
	}
	public function tambah_gambar()
	{
		$config['upload_path'] = './assets1/img';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size']  = '10000';
    	$config['max_width']  = '102400';
    	$config['max_height']  = '76800';
    
    $this->load->library('upload', $config);
    	
    if ( ! $this->upload->do_upload('gambar')){
        $this->session->set_flashdata('pesan', $this->upload->display_errors());
        return false;
    }
    else
    {
		$data = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'id_konseling' => $this->input->post('id_konseling'),
			'keluhan' => $this->input->post('keluhan'),
			'gambar' => $this->upload->data('file_name'),
		);

		$this->db->insert('form', $data);
		redirect('Dashboard_user/index','refresh');
	}
	}

}

/* End of file form_model.php */
/* Location: ./application/models/form_model.php */