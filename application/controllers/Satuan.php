<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

	public function index()
	{
		$data['paket'] = $this->satuan_models->get_satuan()->result();
		$this->load->view('admin/satuan',$data);
	}
}
