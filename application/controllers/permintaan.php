<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('permintaanModel');
		$this->load->model('barangModel');
		$this->load->model('ruanganModel');
	}
	public function index()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->permintaanModel->selectPermintaan();
		$this->load->view('permintaan-konfirmasi',$data);
	}
	public function fakultas()
	{
		$data['namaUser'] = $this->session->userdata('namaUser');
		$data['datane'] = $this->ruanganModel->selectRuangan();
		$this->load->view('fakultas/permintaan-ajukan',$data);
	}

}

/* End of file permintaan.php */
/* Location: ./application/controllers/permintaan.php */