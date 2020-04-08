<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dang_ky extends CI_Controller {

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
		$this->load->model('dang_ky_moi');
	}

	public function index()
	{
		$this->load->helper('url');
		
		$this->load->view('admin/dang_ky');
	}

	public function thuc_hien_dang_ky()
	{
		// Thên mới tin tức thông qua qua MODEL
		$this->dang_ky_moi->them_moi_tai_khoan();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/xac_nhan_dang_ky");
	}
	
}
