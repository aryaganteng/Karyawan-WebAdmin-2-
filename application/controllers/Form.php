<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index($id)
	{
		$data['konseling'] = $this->db->get_where('konseling', ['id_konseling' => $id])->result_array();
		$this->load->model('gambar_model');
		$this->load->view('v_form', $data);
	}

	public function post()
	
	{
	$this->load->model('gambar_model');	
	if($this->gambar_model->post()){
		$update = [
			'id_status' => 2
		];
		$this->db->where('id_konseling',$this->input->post('id_konseling'))->update('konseling', $update);
	};

		
		
		redirect('Dashboard_user/index','refresh');
	}
	


}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */