<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_don_hang extends CI_Controller {

	
	public function index()
	{
		//kết nối đến CSDL
		$this->load->database();

		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT *
			FROM tbl_don_hang
		");
		
		//Lấy kết quả truy vấn dữ liệu
		$data['don_hang'] = $query->result();

		$this->load->view('admin/quan_tri_don_hang', $data);
	}
}
