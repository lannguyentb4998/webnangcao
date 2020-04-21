<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_phan_hoi extends CI_Controller {

	
	public function index()
	{
		//kết nối đến CSDL
		$this->load->database();

		$this->load->helper('url');

		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT *
			FROM tbl_phan_hoi
		");
		
		$data['tieu_de'] = "Quản trị phản hồi";

		$this->load->view('admin/header', $data);

		//Lấy kết quả truy vấn dữ liệu
		$data['phan_hoi'] = $query->result();

		$this->load->view('admin/quan_tri_phan_hoi', $data);
	}

	public function phan_hoi_tra_loi()
	{
		$this->load->helper('url');

		$this->load->view('admin/phan_hoi_tra_loi');
	}

	public function xem_phan_hoi()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		$this->load->model('phan_hoi');
		$id = $this->uri->segment(4);

		$data['phan_hoi'] = $this->phan_hoi->lay_phan_hoi_theo_ID($id);

		// Lấy ra ID của tin tức cần xóa
		

		$this->load->view('admin/phan_hoi_xem',$data);
	}

	public function xoa_phan_hoi()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('phan_hoi');

		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->phan_hoi->xoa_phan_hoi($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_phan_hoi");
	}

}
