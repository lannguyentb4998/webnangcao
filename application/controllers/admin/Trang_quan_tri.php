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

		$this->load->view('admin/header',$data);
		$this->load->view('admin/trang_quan_tri');
	}
}
