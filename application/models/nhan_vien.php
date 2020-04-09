<?php
Class nhan_vien extends CI_Model {
	public function lay_doi_ngu()
	{
		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT  id,name, (YEAR(CURDATE()) - YEAR(ngay_sinh)) - (RIGHT(CURDATE(), 5) < RIGHT(ngay_sinh, 5)) as tuoi, price, gioi_thieu, so_nam_kinh_nghiem, anh_minh_hoa
			FROM tbl_doi_ngu
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->result();
	}

	// Mục đích Lấy tin tức theo ID
	public function lay_doi_ngu_theo_ID($id)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
			$query = $this->db->query("
				SELECT * 
				FROM tbl_doi_ngu
				WHERE id='".$id."'"
			);

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }	

	public function them_moi_doi_ngu()
	{
		if(isset($_POST['txtHoTen']) && isset($_POST['txtEmail'])&& isset($_POST['txtSDT'])&& isset($_POST['txtNgaySinh'])&& isset($_POST['txtAnhMinhHoa'])&& isset($_POST['txtQuan']) && isset($_POST['txtThanhPho'])&& isset($_POST['txtGioiThieu'])&& isset($_POST['txtCMT'])&& isset($_POST['txtSoNamKinhNghiem'])&& isset($_POST['txtGia'])&& isset($_POST['txtDiaChi'])&& isset($_POST['txtMatTruoc'])&& isset($_POST['txtMatSau'])){
		// Dữ liệu thu được từ FORM nhập dữ liệu
			$ho_ten = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$SDT = $_POST['txtSDT'];
			$ngaysinh = $_POST['txtNgaySinh'];
			$gioithieu = $_POST['txtGioiThieu'];
			$anh_minh_hoa = $_POST['txtAnhMinhHoa'];
			$quan = $_POST['txtQuan'];
			$thanhpho = $_POST['txtThanhPho'];
			$cmt = $_POST['txtCMT'];
			$sonamkinhnghiem = $_POST['txtSoNamKinhNghiem'];
			$gia = $_POST['txtGia'];
			$diachi = $_POST['txtDiaChi'];
			$mattruoc = $_POST['txtMatTruoc'];
			$matsau = $_POST['txtMatSau'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ten_nv' => $ho_ten,
				'email' => $email,
				'SDT' => $SDT,
				'ngay_sinh' => $ngaysinh,
				'gioi_thieu' => $gioithieu,
				'anh_minh_hoa' => $anh_minh_hoa,
				'quan' => $quan,
				'thanh_pho' => $thanhpho,
				'so_CMT' => $cmt,
				'so_nam_kinh_nghiem' => $sonamkinhnghiem,
				'don_gia' => $gia,
				'dia_chi' => $diachi,
				'anh_CMT_mat_truoc' => $mattruoc,
				'anh_CMT_mat_sau' => $matsau

			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_doi_ngu', $data);
		}		
	}


	public function sua_doi_ngu()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
        	$id = $_POST['txtID'];
			$ho_ten = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$SDT = $_POST['txtSDT'];
			$ngaysinh = $_POST['txtNgaySinh'];
			$gioithieu = $_POST['txtGioiThieu'];
			$anh_minh_hoa = $_POST['txtAnhMinhHoa'];
			$quan = $_POST['txtQuan'];
			$thanhpho = $_POST['txtThanhPho'];
			$cmt = $_POST['txtCMT'];
			$sonamkinhnghiem = $_POST['txtSoNamKinhNghiem'];
			$gia = $_POST['txtGia'];
			$diachi = $_POST['txtDiaChi'];
			$mattruoc = $_POST['txtMatTruoc'];
			$matsau = $_POST['txtMatSau'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ten_nv' => $ho_ten,
				'email' => $email,
				'SDT' => $SDT,
				'ngay_sinh' => $ngaysinh,
				'gioi_thieu' => $gioithieu,
				'anh_minh_hoa' => $anh_minh_hoa,
				'quan' => $quan,
				'thanh_pho' => $thanhpho,
				'so_CMT' => $cmt,
				'so_nam_kinh_nghiem' => $sonamkinhnghiem,
				'don_gia' => $gia,
				'dia_chi' => $diachi,
				'anh_CMT_mat_truoc' => $mattruoc,
				'anh_CMT_mat_sau' => $matsau
			);

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('id', $id);
			$this->db->update('tbl_doi_ngu', $data);
        }

	public function xoa_doi_ngu($id)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('id', $id);
			$this->db->delete('tbl_doi_ngu');
        }

    public function nhan_vien_moi()
	{
		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->result();
	}

}

;?>