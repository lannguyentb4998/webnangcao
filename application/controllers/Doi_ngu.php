<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doi_ngu extends CI_Controller {

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
		$this->load->model('nhan_vien');
		$this->load->model('m_loai_danh_gia');

		$this->load->library('cart');
	}

	public function index()
	{
		$data['doi_ngu'] = $this->nhan_vien->lay_doi_ngu();

		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');

		$this->load->view('doi_ngu', $data);

		$this->load->view('footer');
	}

	public function add()
        {
            $insert_data = array(
            	'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'qty' => 1
            );
        $this->cart->insert($insert_data);
        redirect(base_url().'doi_ngu');
        }

    public function hien_thi_doi_ngu_chi_tiet()
    {
    	$id = $this->uri->segment(3);
    	$data['doi_ngu_chi_tiet'] = $this->nhan_vien->lay_doi_ngu_theo_ID($id);
    	$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();
		$data['loai_danh_gia'] = $this->m_loai_danh_gia->lay_danh_sach_loai_danh_gia();
		$query2 = $this->db->query("
			SELECT tbl_danh_gia.ho_ten as ho_ten, tbl_danh_gia.diem as diem, tbl_danh_gia.noi_dung as noi_dung, tbl_danh_gia.loai_danh_gia_id, tbl_loai_danh_gia.ten_loai_danh_gia as loai_danh_gia
			FROM tbl_danh_gia, tbl_loai_danh_gia
			WHERE tbl_danh_gia.loai_danh_gia_id = tbl_loai_danh_gia.id AND tbl_danh_gia.id_nv = ".$id."
		");

		$data['danh_gia'] = $query2->result();
		
		$this->load->view('doi_ngu_chi_tiet', $data);
		$this->load->view('footer');
    }

    public function thuc_hien_them_moi_danh_gia()
	{
		// Thêm mới tin tức thông qua qua MODEL
		$this->nhan_vien->them_moi_danh_gia();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."doi_ngu");
	}

	public function moi_nhat()
	{
		
		$query = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC
		");
		$data['doi_ngu'] = $query->result();
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');

		$this->load->view('doi_ngu', $data);

		$this->load->view('footer');
	}

	public function a_z()
	{
		
		$query = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY name ASC
		");
		$data['doi_ngu'] = $query->result();
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');

		$this->load->view('doi_ngu', $data);

		$this->load->view('footer');
	}

	public function z_a()
	{
		
		$query = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY name DESC
		");
		$data['doi_ngu'] = $query->result();
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');

		$this->load->view('doi_ngu', $data);

		$this->load->view('footer');
	}

	public function thap_cao()
	{
		
		$query = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY price ASC
		");
		$data['doi_ngu'] = $query->result();
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');

		$this->load->view('doi_ngu', $data);

		$this->load->view('footer');
	}

	public function cao_thap()
	{
		
		$query = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY price DESC
		");
		$data['doi_ngu'] = $query->result();
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');

		$this->load->view('doi_ngu', $data);

		$this->load->view('footer');
	}

	public function kinh_nghiem_cao_thap()
	{
		
		$query = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY so_nam_kinh_nghiem DESC
		");
		$data['doi_ngu'] = $query->result();
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');

		$this->load->view('doi_ngu', $data);

		$this->load->view('footer');
	}

	public function kinh_nghiem_thap_cao()
	{
		
		$query = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY so_nam_kinh_nghiem ASC
		");
		$data['doi_ngu'] = $query->result();
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$data['nhan_vien_moi'] = $query1->result();

		$this->load->view('menu');

		$this->load->view('doi_ngu', $data);

		$this->load->view('footer');
	}
}
