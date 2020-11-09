<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	public function index()
	{
		$data['konten']="v_status";
		$this->load->model('status_model');
		$data['data_status']=$this->status_model->get_status();
		$this->load->view('template', $data);
		
	}
	public function simpan_status()
	{
		$this->form_validation->set_rules('nama_status', 'Satus', 'trim|required',
		array('required' => 'Status harus diisi'));

		if ($this->form_validation->run() == TRUE ) {
			$this->load->model('sta_model','sta');
			$masuk=$this->sta->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/status'),'refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/status'), 'refresh');
		}
	}
	public function detail_status($id_status='')
	{
		$this->load->model('status_model');
		$data_detail=$this->status_model->detail_status($id_status);
		echo json_encode($data_detail);
	}
	public function update_status(){
		$this->form_validation->set_rules('nama_status','nama_status', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/status'),'refresh');
		}else{
			$this->load->model('status_model');
			$proses_update=$this->status_model->update_status();
			if($proses_update){
				$this->session->set_flashdata('pesan', 'sukses update');
			}
			else{
				$this->session->$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/status'),'refresh');
		}
	}
	public function deleteStatus($id_status)
	{
		$this->load->model('status_model');
		$prosesDelete = $this->status_model->delete_status($id_status);

		if ($prosesDelete == TRUE) {
			$this->session->flashdata('pesan', 'Sukses Hapus Data');
		}else{
			$this->session->flashdata('pesan','Gagal Hapus Data');
		}
		redirect(base_url('index.php/status'),'refresh');
	}
}

/* End of file Status.php */
/* Location: ./application/controllers/Status.php */