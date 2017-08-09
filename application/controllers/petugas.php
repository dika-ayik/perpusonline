<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('petugas/index');
	}

}

/* End of file petugas.php */
/* Location: ./application/controllers/petugas.php */