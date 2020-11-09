<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konseling extends CI_Controller {

	public function index()
	{
		$data['konten']="v_konseling";
		$this->load->model('konseling_model');
		$data['data_konseling']=$this->konseling_model->get_konseling();
		$this->load->model('kategori_model');
		$data['data_kategori']=$this->kategori_model->get_kategori();
		$this->load->model('status_model');
		$data['data_status']=$this->status_model->get_status();
		$this->load->view('template', $data);
		
	}
	public function simpan_konseling()
	{
		$this->form_validation->set_rules('id_kategori', 'kategori', 'trim|required',
		array('required' => 'Id Kategori harus diisi'));
		$this->form_validation->set_rules('id_status', 'status', 'trim|required',
		array('required'=> 'Status harus diisi'));
		$this->form_validation->set_rules('nama_konseling', 'nama konseling', 'trim|required',
		array('required' => 'Nama Konseling harus diisi'));
		$this->form_validation->set_rules('pengalaman', 'pengalaman', 'trim|required',
		array('required' => 'pengalaman harus diisi'));
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required',
		array('required' => 'alamat harus diisi'));
		$this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required',
		array('required' => 'No Hp harus diisi'));
		$this->form_validation->set_rules('jadwal', 'jadwal', 'trim|required',
		array('required' => 'Jadwal harus diisi'));
		$this->form_validation->set_rules('tarif', 'tarif', 'trim|required',
		array('required' => 'tarif harus diisi'));

		if ($this->form_validation->run() == TRUE ) {
			$this->load->model('konseling_model','kon');
			$masuk=$this->kon->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan','sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/konseling'),'refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/konseling'), 'refresh');
		}
	}
	public function detail_konseling($id_konseling='')
	{
		$this->load->model('konseling_model');
		$data_detail=$this->konseling_model->detail_konseling($id_konseling);
		echo json_encode($data_detail);
	}
	public function update_konseling(){
		$this->form_validation->set_rules('id_kategori','Id Kategori', 'trim|required');
		$this->form_validation->set_rules('id_status','Status', 'trim|required');
		$this->form_validation->set_rules('nama_konseling','nama_konseling', 'trim|required');
		$this->form_validation->set_rules('pengalaman','pengalaman', 'trim|required');
		$this->form_validation->set_rules('alamat','alamat', 'trim|required');
		$this->form_validation->set_rules('no_hp','no_hp', 'trim|required');
		$this->form_validation->set_rules('jadwal','jadwal', 'trim|required');
		$this->form_validation->set_rules('tarif','tarif', 'trim|required');

		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/konseling'),'refresh');
		}else{
			$this->load->model('konseling_model');
			$proses_update=$this->konseling_model->update_konseling();
			if($proses_update){
				$this->session->set_flashdata('pesan', 'sukses update');
			}
			else{
				$this->session->$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/konseling'),'refresh');
		}
	}
	public function deleteKonseling($id_konseling)
	{
		$this->load->model('konseling_model');
		$prosesDelete = $this->konseling_model->delete_konseling($id_konseling);

		if ($prosesDelete == TRUE) {
			$this->session->flashdata('pesan', 'Sukses Hapus Data');
		}else{
			$this->session->flashdata('pesan','Gagal Hapus Data');
		}
		redirect(base_url('index.php/konseling'),'refresh');
	}

}

/* End of file Konseling.php */
/* Location: ./application/controllers/Konseling.php */