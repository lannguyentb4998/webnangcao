<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_khach_hang extends CI_Controller {

	
	public function index()
	{
		//kết nối đến CSDL
		$this->load->database();

		$this->load->helper('url');

		//kết nối đến models
		$this->load->model('khach_hang');
		
		$data['tieu_de'] = "Quản trị khách hàng";

		$this->load->view('admin/header', $data);

		//Lấy kết quả truy vấn dữ liệu
		$data['khach_hang'] = $this->khach_hang->lay_khach_hang();

		$this->load->view('admin/quan_tri_khach_hang', $data);
		
	}

	public function them_moi_khach_hang()
	{
		// Load thư viện URL
		$this->load->helper('url');
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/khach_hang_them');

	}

	public function thuc_hien_them_moi_khach_hang()
	{
		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến MODEL
		$this->load->model('khach_hang');

		// Thên mới tin tức thông qua qua MODEL
		$this->khach_hang->them_moi_khach_hang();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_khach_hang");
	}

	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua_khach_hang()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('khach_hang');

		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['khach_hang'] = $this->khach_hang->lay_khach_hang_theo_ID($id);
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/khach_hang_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_khach_hang()
	{
		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến MODEL
		$this->load->model('khach_hang');

		// Sửa tin tức thông qua MODEL
		$this->khach_hang->sua_khach_hang();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_khach_hang");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa_khach_hang()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('khach_hang');

		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->khach_hang->xoa_khach_hang($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_khach_hang");
	}

}
