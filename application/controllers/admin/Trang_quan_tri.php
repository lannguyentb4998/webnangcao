<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trang_quan_tri extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện session
		$this->load->library('session');

		if ($this->session->userdata('email')=="") {
			redirect(base_url()."admin/dang_nhap");
		}
	}

	public function index()
	{
		$data['tieu_de'] ="Trang quản trị";
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 4
		");
		$data['nhan_vien_moi'] = $query1->result();

		$query= $this->db->query("
			SELECT  id,ten_kh, (YEAR(CURDATE()) - YEAR(ngaysinh)) - (RIGHT(CURDATE(), 5) < RIGHT(ngaysinh, 5)) as tuoi, email, quan, anh_minh_hoa, date(ngay_tao) as ngay_tao
			FROM tbl_khach_hang
			ORDER BY ngay_tao DESC limit 4");
		$data['khach_hang_moi']=$query->result();

		$this->load->view('admin/header',$data);
		$this->load->view('admin/trang_quan_tri');
	}
}
