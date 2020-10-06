<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class kata extends CI_Controller
{
	
	public function Index()
	{
		$data['data'] = $this->app_model->all_penjual();

		$this->load->view('V_home', $data);
	}

	public function detail_penjual($id)
	{
		$data['data'] = $this->app_model->all_barang($id);

		$this->load->view('V_detail', $data);
	}
}