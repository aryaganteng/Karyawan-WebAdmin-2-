<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gambar_model extends CI_Model {

	public function post()
{
    
    $config['upload_path'] = './assets1/img/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']  = '100000';
    $config['max_width']  = '102400';
    $config['max_height']  = '76800';
    $config['overwrite'] = true;
    
    $this->load->library('upload', $config);
    
    if ( ! $this->upload->do_upload('gambar')){
        return false;
    }
    else{
		$data_form=array(
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'id_konseling' => $this->input->post('id_konseling'),
            'keluhan' => $this->input->post('keluhan'),
			'gambar' => $this->upload->data('file_name'),
		);
		$sql_masuk=$this->db->insert('form', $data_form);
		return $sql_masuk;
    }
 
}

}

/* End of file gambar_model.php */
/* Location: ./application/models/gambar_model.php */