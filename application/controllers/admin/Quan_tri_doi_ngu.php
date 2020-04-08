<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_doi_ngu extends CI_Controller {

	
	public function index()
	{
		//kết nối đến CSDL
		$this->load->database();

		$this->load->helper('url');

		//kết nối đến models
		$this->load->model('nhan_vien');
		
		$data['tieu_de']="Quản trị đội ngũ";

		$this->load->view('admin/header', $data);

		//Lấy kết quả truy vấn dữ liệu
		$data['doi_ngu'] = $this->nhan_vien->lay_doi_ngu();

		$this->load->view('admin/quan_tri_doi_ngu', $data);
	}

	public function them_moi_doi_ngu()
	{
		// Load thư viện URL
		$this->load->helper('url');
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/doi_ngu_them');

	}

	public function thuc_hien_them_moi_doi_ngu()
	{
		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến MODEL
		$this->load->model('nhan_vien');

		// Thên mới tin tức thông qua qua MODEL
		$this->nhan_vien->them_moi_doi_ngu();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_doi_ngu");
	}
// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua_doi_ngu()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('nhan_vien');

		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['doi_ngu'] = $this->nhan_vien->lay_doi_ngu_theo_ID($id);
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/doi_ngu_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_doi_ngu()
	{
		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến MODEL
		$this->load->model('nhan_vien');

		// Sửa tin tức thông qua MODEL
		$this->nhan_vien->sua_doi_ngu();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_doi_ngu");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa_doi_ngu()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('nhan_vien');

		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->nhan_vien->xoa_doi_ngu($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_doi_ngu");
	}

}
