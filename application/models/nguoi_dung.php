<?php
Class nguoi_dung extends CI_Model {
	public function admin($email, $mat_khau)
	{
		
		$query = $this->db->query("
			SELECT *
			FROM tbl_nguoi_dung
			WHERE email='".$email."' AND mat_khau='".$mat_khau."' AND quyen = 'admin'
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->num_rows();
	}

	public function user($email, $mat_khau)
	{
		
		$query = $this->db->query("
			SELECT *
			FROM tbl_nguoi_dung
			WHERE email='".$email."' AND mat_khau='".$mat_khau."' AND quyen = 'user'
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->num_rows();
	}

 }

;?>