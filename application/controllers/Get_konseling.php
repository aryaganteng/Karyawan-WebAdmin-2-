<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_konseling extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->model('get_konseling_model','gt_kon');
}

	public function index()
	{
		$dt_konseling=$this->gt_kon->get_konseling();
		echo json_encode($dt_konseling);
	}
	public function cari($nama_konseling='')
	{
		$dt_konseling=$this->gt_kon->cari_get_konseling($nama_konseling);
		echo json_encode($dt_konseling);		
	}
	public function detail($id_konseling)
	{
		$dt_konseling=$this->gt_kon->get_detail($id_konseling);
		echo json_encode($dt_konseling);
	}

}

/* End of file Get_konseling.php */
/* Location: ./application/controllers/Get_konseling.php */