<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thanh_toan extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->database();
		
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');
		$this->load->view('thanh_toan',$data);
		$this->load->view('footer');
	}

	
}
