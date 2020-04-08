<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->database();

		$this->load->helper('url');

		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT tieu_de, tac_gia, noi_dung_doc_thu, date(ngay_tao) as ngay_tao 
			FROM tbl_tin_tuc
			ORDER BY ngay_tao DESC limit 3

		");

		$query1 = $this->db->query("
			SELECT *
			FROM tbl_phan_hoi
			ORDER BY thoi_gian_phan_hoi DESC 

		");

		$query2 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query2->result();
		
		//Lấy kết quả truy vấn dữ liệu
		$data['tin_tuc'] = $query->result();
		$data['phan_hoi'] = $query1->result();

		$this->load->view('menu');
		$this->load->view('index.php', $data);
		$this->load->view('footer');
	}
}
