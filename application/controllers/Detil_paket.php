<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detil_paket extends CI_Controller {

	public function index()
	{
		$postData = $this->input->post();
		$paket=$postData['paket'];
		$this->session->set_userdata('paket', 'paket');
//		$this->load->view('admin/detil_paket');
		redirect(base_url('detil_paket/data/'.$paket));

	}

	public function data($test)
	{
		$this->load->view('admin/detil_paket',$test);
	}

	public function minggu($test)
	{
		$this->load->view('admin/mingguan',$test);
	}

	public function bulan($test)
	{
		$this->load->view('admin/bulanan',$test);
	}

	public function pengawasan($test)
	{
		$this->load->view('admin/pengawasan',$test);
	}

	public function caturwulan($test)
	{
		$this->load->view('admin/caturwulan',$test);
	}
}
