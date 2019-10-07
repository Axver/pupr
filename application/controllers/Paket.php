<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function index()
	{

		$data['paket'] = $this->paket_models->get_paket()->result();
		$this->load->view('admin/paket',$data);
	}
}
