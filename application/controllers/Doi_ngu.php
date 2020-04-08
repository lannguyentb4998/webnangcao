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

		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');

		$this->load->view('doi_ngu', $data);

		$this->load->view('footer');
	}

}
