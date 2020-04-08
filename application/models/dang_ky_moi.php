<?php
Class dang_ky_moi extends CI_Model {

	public function them_moi_tai_khoan()
	{
		if(isset($_POST['txtHoTen']) && isset($_POST['txtEmail'])&& isset($_POST['txtSDT'])&& isset($_POST['txtGioiTinh'])&& isset($_POST['txtNgaySinh'])&& isset($_POST['txtThanhPho'])&& isset($_POST['txtQuan'])){
		// Dữ liệu thu được từ FORM nhập dữ liệu
			$ho_ten = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$SDT = $_POST['txtSDT'];
			$ngaysinh = $_POST['txtNgaySinh'];
			$gioitinh = $_POST['txtGioiTinh'];
			$quan = $_POST['txtQuan'];
			$thanhpho = $_POST['txtThanhPho'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ten_kh' => $ho_ten,
				'email' => $email,
				'SDT' => $SDT,
				'ngaysinh' => $ngaysinh,
				'gioi_tinh' => $gioitinh,
				'quan' => $quan,
				'thanh_pho' => $thanhpho
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_khach_hang', $data);}
	}
}

;?>