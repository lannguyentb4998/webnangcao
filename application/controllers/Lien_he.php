<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lien_he extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');
		
		$this->load->view('lien_he.php');
	}

	public function thuc_hien_them_moi_phan_hoi()
	{
		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến MODEL
		$this->load->model('phan_hoi');

		// Thên mới tin tức thông qua qua MODEL
		$this->phan_hoi->them_moi_phan_hoi();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."lien_he");
	}
}
