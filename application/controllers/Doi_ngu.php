<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doi_ngu extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện session
		$this->load->library('session');

		// Kết nối đến MODEL
		$this->load->model('nhan_vien');
	}

	public function index()
	{
		$data['doi_ngu'] = $this->nhan_vien->lay_doi_ngu();

		$this->load->view('doi_ngu', $data);
	}

}
