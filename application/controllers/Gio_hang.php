<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gio_hang extends CI_Controller {

	
	public function index()
	{
		$this->load->database();

		$this->load->helper('url');
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();
		$this->load->view('menu');
		$this->load->view('gio_hang.php', $data);
		$this->load->view('footer');
	}
}
