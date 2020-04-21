<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tin_tuc extends CI_Controller {

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
		$this->load->model('m_tin_tuc');
	}

	public function index()
	{
		$data['tin_tuc'] = $this->m_tin_tuc->lay_tin_tuc();

		$query = $this->db->query("
			SELECT anh_minh_hoa_1,tieu_de, tac_gia, noi_dung_doc_thu, date(ngay_tao) as ngay_tao 
			FROM tbl_tin_tuc
			ORDER BY ngay_tao DESC limit 3

		");

		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['bai_viet_gan_day'] = $query->result();
		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');
		$this->load->view('tin_tuc',$data);
		$this->load->view('footer');
	}

	public function hien_thi_tin_tuc_chi_tiet()
    {
    	$id = $this->uri->segment(3);
    	$data['tin_tuc_chi_tiet'] = $this->m_tin_tuc->lay_tin_tuc_theo_ID($id);
    	$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');
		$this->load->view('tin_tuc_chi_tiet', $data);
		$this->load->view('footer');
    }
}
