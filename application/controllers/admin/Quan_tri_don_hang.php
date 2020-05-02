<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_don_hang extends CI_Controller {

	 public function __construct(){
		parent::__construct();
		ob_start();
		$this->load->helper(array('form', 'url'));
		$this->load->model('don_hang');
		$this->load->library('pagination');
	}


	public function index()
	{
		//kết nối đến CSDL
		$this->load->database();

		$this->load->helper('url');

		//kết nối đến models
		$this->load->model('don_hang');
		
		
		$data['tieu_de'] ="Quản trị đơn hàng";

		$this->load->view('admin/header',$data);

		//Lấy kết quả truy vấn dữ liệu

		$data['da_thanh_toan']= $this->don_hang->da_thanh_toan();

		$data['chua_thanh_toan']= $this->don_hang->chua_thanh_toan();

		$this->load->view('admin/quan_tri_don_hang', $data);
	}

	public function da_thanh_toan()
	{
		//kết nối đến CSDL
		$this->load->database();

		$this->load->helper('url');

		//kết nối đến models
		$this->load->model('don_hang');
		
		
		$data['tieu_de'] ="Quản trị đơn hàng";

		$this->load->view('admin/header',$data);

		//Lấy kết quả truy vấn dữ liệu
		$data['don_hang'] = $this->don_hang->lay_don_hang_da_thanh_toan();

		$data['da_thanh_toan']= $this->don_hang->da_thanh_toan();

		$data['chua_thanh_toan']= $this->don_hang->chua_thanh_toan();

		$this->load->view('admin/quan_tri_don_hang', $data);
	}

	public function chua_thanh_toan()
	{
		//kết nối đến CSDL
		$this->load->database();

		$this->load->helper('url');

		//kết nối đến models
		$this->load->model('don_hang');
		
		
		$data['tieu_de'] ="Quản trị đơn hàng";

		$this->load->view('admin/header',$data);

		//Lấy kết quả truy vấn dữ liệu
		$data['don_hang'] = $this->don_hang->lay_don_hang_chua_thanh_toan();

		$data['da_thanh_toan']= $this->don_hang->da_thanh_toan();

		$data['chua_thanh_toan']= $this->don_hang->chua_thanh_toan();

		$this->load->view('admin/quan_tri_don_hang', $data);
	}

	public function sua_trang_thai()
	{
		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('don_hang');

		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['don_hang'] = $this->don_hang->lay_don_hang_theo_ID($id);
	
		// Hiển thị dữ liệu ra view
		$this->load->view('admin/don_hang_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_trang_thai()
	{
		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến MODEL
		$this->load->model('don_hang');

		// Sửa tin tức thông qua MODEL
		$this->don_hang->sua_trang_thai();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_don_hang");
	}

	public function hien_thi_don_hang_chi_tiet()
    {
    	$this->load->model('don_hang');
    	$this->load->helper('url');
    	$this->load->database();
    	$id = $this->uri->segment(4);
    	$data['don_hang_chi_tiet'] = $this->don_hang->lay_don_hang_theo_ID($id);
    	//echo var_dump($data); exit();
    	$this->load->view('admin/quan_tri_don_hang_chi_tiet', $data);

    }

   
}
