<?php
Class khach_hang extends CI_Model {
	public function lay_khach_hang()
	{
		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT  id,ten_kh, (YEAR(CURDATE()) - YEAR(ngaysinh)) - (RIGHT(CURDATE(), 5) < RIGHT(ngaysinh, 5)) as tuoi, email, SDT, anh_minh_hoa, date(ngay_tao) as ngay_tao
			FROM tbl_khach_hang
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->result();
	}

	// Mục đích Lấy tin tức theo ID
		public function lay_khach_hang_theo_ID($id)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
			$query = $this->db->query("
				SELECT * 
				FROM tbl_khach_hang
				WHERE id='".$id."'"
			);

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }	

	public function them_moi_khach_hang()
	{
		if(isset($_POST['txtHoTen']) && isset($_POST['txtEmail'])&& isset($_POST['txtSDT'])&& isset($_POST['txtNgaySinh'])&& isset($_POST['txtGioiTinh'])&& isset($_POST['txtAnhMinhHoa'])&& isset($_POST['txtQuan']) && isset($_POST['txtThanhPho']))
		{
		// Dữ liệu thu được từ FORM nhập dữ liệu
			$ho_ten = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$SDT = $_POST['txtSDT'];
			$ngaysinh = $_POST['txtNgaySinh'];
			$gioitinh = $_POST['txtGioiTinh'];
			$anh_minh_hoa = $_POST['txtAnhMinhHoa'];
			$quan = $_POST['txtQuan'];
			$thanhpho = $_POST['txtThanhPho'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ten_kh' => $ho_ten,
				'email' => $email,
				'SDT' => $SDT,
				'ngaysinh' => $ngaysinh,
				'gioi_tinh' => $gioitinh,
				'anh_minh_hoa' => $anh_minh_hoa,
				'quan' => $quan,
				'thanh_pho' => $thanhpho
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_khach_hang', $data);
		}		

	}

	public function sua_khach_hang()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
        	$id = $_POST['txtID'];
			$ho_ten = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$SDT = $_POST['txtSDT'];
			$ngaysinh = $_POST['txtNgaySinh'];
			$gioitinh = $_POST['txtGioiTinh'];
			$anh_minh_hoa = $_POST['txtAnhMinhHoa'];
			$quan = $_POST['txtQuan'];
			$thanhpho = $_POST['txtThanhPho'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ten_kh' => $ho_ten,
				'email' => $email,
				'SDT' => $SDT,
				'ngaysinh' => $ngaysinh,
				'gioi_tinh' => $gioitinh,
				'anh_minh_hoa' => $anh_minh_hoa,
				'quan' => $quan,
				'thanh_pho' => $thanhpho
			);

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('id', $id);
			$this->db->update('tbl_khach_hang', $data);
        }

	public function xoa_khach_hang($id)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('id', $id);
			$this->db->delete('tbl_khach_hang');
        }

}

;?>