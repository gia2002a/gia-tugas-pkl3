<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {
	public function all_penjual()
	{
		return $this->db->get('tbl_penjual')->result_array();
	}

	public function all_barang($id_penjual)
	{
		return $this->db->get_where('tbl_barang	', 
			[
				'id_penjual' => $id_penjual
			]
		)->result_array();
	}
}