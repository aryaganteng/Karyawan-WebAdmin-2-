<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		$data['konten']="v_laporan";

		$data['laporan']=$this->db->select('*')->from('form')
		->join('konseling', 'form.id_konseling = konseling.id_konseling')
		->join('pelanggan', 'form.id_pelanggan = pelanggan.id_pelanggan')->get()
		->result_array();
		$this->load->view('template', $data);			
	}

	public function getData()
	{
		$data=$this->db->select('*')->from('form')
		->join('konseling', 'form.id_konseling = konseling.id_konseling')
		->join('pelanggan', 'form.id_pelanggan = pelanggan.id_pelanggan')
		->where('pelanggan.id_pelanggan', $this->session->userdata('id_pelanggan'))
		->get()
		->result_array();
		
		echo json_encode($data);		
	}

	public function simpan_laporan()
	{
		$this->form_validation->set_rules('hasil', 'hasil', 'required',
		array('required' => 'Hasil harus diisi'));

		if ($this->form_validation->run() == TRUE ) {
			$this->load->model('form_model','fom');
			$masuk=$this->fom->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/laporan'),'refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/laporan'), 'refresh');
		}
	}
	public function detail_laporan($id_form)
	{
		$this->load->model('form_model');
		$data_detail=$this->form_model->detail_laporan($id_form);
		echo json_encode($data_detail);
	}
	public function update_laporan(){
		$this->form_validation->set_rules('hasil','Hasil', 'trim|required');

		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/laporan'),'refresh');
		}else{
			$this->load->model('form_model');
			$proses_update=$this->form_model->update_laporan();
			if($proses_update){
				$this->session->set_flashdata('pesan', 'sukses update');
			}
			else{
				$this->session->$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/laporan'),'refresh');
		}
	}
	public function deleteLaporan($id_form)
	{
		$this->load->model('form_model');
		$prosesDelete = $this->form_model->delete_laporan($id_form);

		if ($prosesDelete == TRUE) {
			$this->session->flashdata('pesan', 'Sukses Hapus Data');
		}else{
			$this->session->flashdata('pesan','Gagal Hapus Data');
		}
		redirect(base_url('index.php/laporan'),'refresh');
	}


}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */