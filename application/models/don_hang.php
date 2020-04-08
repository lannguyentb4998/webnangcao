<?php
Class don_hang extends CI_Model {
	public function get_don_hang()
	{
		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT *
			FROM tbl_don_hang
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->result();
	}

	public function them_moi_don_hang()
	{

	}

	public function sua_don_hang()
	{

	}

	public function xoa_don_hang()
	{

	}
}

;?>