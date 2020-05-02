<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dang_nhap extends CI_Controller {

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
		$this->load->model('nguoi_dung');
	}

	public function index()
	{

		$this->load->view('admin/dang_nhap');
	}

	public function kiem_tra_dang_nhap()
	{
		

		//lấy được thông tin đăng nhập người dùng
		$email = $_POST['txtEmail'];
		$mat_khau = $_POST['txtMatKhau'];

		// Kiểm tra xem thông tin đó có KHỚP với thông tin đã lưu trong CSDL hay không?
		if ($this->nguoi_dung->admin($email, $mat_khau)!=0) {
			// Tạo phiên làm việc (session); mục đích của việc tạo session giúp chúng ta xác minh 1 người có được phép truy cập vào các trang quản trị của chúng ta hay không - đảm bảo tính bảo an?
			$this->session->set_userdata('email', $email);

			// Chuyển người dùng vào trang quản trị
			redirect(base_url()."admin/trang_quan_tri");
		} 

		if ($this->nguoi_dung->user($email,$mat_khau)!=0){

			$this->session->set_userdata('email', $email);

			// Chuyển người dùng vào trang quản trị
			redirect(base_url()."gio_hang");
		}		
		else{ 
			echo "<script type='text/javascript'>
			window.alert('Đăng nhập không thành công');
			</script>";

			echo "<script type='text/javascript'>
			window.location.href= '".base_url()."admin/dang_nhap';
			</script>";

			//redirect(base_url()."admin/dang_nhap");
		}
	}

	public function dang_xuat()
	{
		// Thực hiện xóa toàn bộ dữ liệu phiên làm việc của người dùng
		session_destroy();

		// Chuyển người dùng ra trang đăng nhập
		redirect(base_url()."admin/dang_nhap");
	}

	public function quen_mk()
	{
		// Load thư viện URL
		$this->load->helper('url');
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/doi_mat_khau');
	}

	public function thuc_hien_doi_mat_khau()
	{
		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện URL
		$this->load->helper('url');

		// Thên mới tin tức thông qua qua MODEL
		$this->nguoi_dung->doi_mat_khau();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/dang_nhap");
	}
}
