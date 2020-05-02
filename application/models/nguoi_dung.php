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

	public function doi_mat_khau()
	{
		if(isset($_POST['txtMatKhauMoi']) && isset($_POST['txtNhapLaiMatKhau']) && isset($_POST['txtEmail'])){
		// Dữ liệu thu được từ FORM nhập dữ liệu
			$mat_khau_moi = $_POST['txtMatKhauMoi'];
			$nhap_lai_mat_khau = $_POST['txtNhapLaiMatKhau'];
			$email = $_POST['txtEmail'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'mat_khau' => $mat_khau_moi
			);

			$this->db->where('email', $email);
			$this->db->update('tbl_nguoi_dung', $data);
	}
}
 }
;?>