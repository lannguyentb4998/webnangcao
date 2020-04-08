<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lien_he extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->database();
		
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');
		$this->load->view('lien_he',$data);
		$this->load->view('footer');
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
		echo "<script type='text/javascript'>
			window.alert('Cảm ơn bạn đã phản hồi. Chúng tôi sẽ liên lạc lại sớm cho bạn.');
			</script>";

			echo "<script type='text/javascript'>
			window.location.href= '".base_url()."lien_he';
			</script>";
	}
}
