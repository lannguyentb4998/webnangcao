<?php
Class m_tin_tuc extends CI_Model {
	public function lay_tin_tuc()
	{
		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT *
			FROM tbl_tin_tuc
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->result();
	}

 	// Mục đích Lấy tin tức theo ID
		public function lay_tin_tuc_theo_ID($id)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
			$query = $this->db->query("
				SELECT * 
				FROM tbl_tin_tuc
				WHERE id='".$id."'"
			);

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }	

	public function them_moi_tin_tuc()
	{
		if(isset($_POST['txtTieuDe']) && isset($_POST['txtTacGia'])&& isset($_POST['txtNoiDungDocThu'])&& isset($_POST['txtNoiDung'])&& isset($_POST['txtNgayTao'])&& isset($_POST['txtAnhMinhHoa1'])&& isset($_POST['txtAnhMinhHoa2'])){
		// Dữ liệu thu được từ FORM nhập dữ liệu
			$tieu_de = $_POST['txtTieuDe'];
			$tac_gia = $_POST['txtTacGia'];
			$noi_dung_doc_thu = $_POST['txtNoiDungDocThu'];
			$noi_dung = $_POST['txtNoiDung'];
			$ngay_tao = $_POST['txtNgayTao'];
			$anh_minh_hoa_1 = $_POST['txtAnhMinhHoa1'];
			$anh_minh_hoa_2 = $_POST['txtAnhMinhHoa2'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'tieu_de' => $tieu_de,
				'tac_gia' => $tac_gia,
				'noi_dung_doc_thu' => $noi_dung_doc_thu,
				'noi_dung' => $noi_dung,
				'ngay_tao' => $ngay_tao,
				'anh_minh_hoa_1' => $anh_minh_hoa_1,
				'anh_minh_hoa_2' => $anh_minh_hoa_2
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_tin_tuc', $data);}
	}

	public function sua_tin_tuc()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
			$id = $_POST['txtID'];
			$tieu_de = $_POST['txtTieuDe'];
			$tac_gia = $_POST['txtTacGia'];
			$noi_dung_doc_thu = $_POST['txtNoiDungDocThu'];
			$noi_dung = $_POST['txtNoiDung'];
			$ngay_tao = $_POST['txtNgayTao'];
			$anh_minh_hoa_1 = $_POST['txtAnhMinhHoa1'];
			$anh_minh_hoa_2 = $_POST['txtAnhMinhHoa2'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'tieu_de' => $tieu_de,
				'tac_gia' => $tac_gia,
				'noi_dung_doc_thu' => $noi_dung_doc_thu,
				'noi_dung' => $noi_dung,
				'ngay_tao' => $ngay_tao,
				'anh_minh_hoa_1' => $anh_minh_hoa_1,
				'anh_minh_hoa_2' => $anh_minh_hoa_2
			);

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('id', $id);
			$this->db->update('tbl_tin_tuc', $data);
        }

		public function xoa_tin_tuc($id)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('id', $id);
			$this->db->delete('tbl_tin_tuc');
        }

        public function bai_viet_gan_day()
        {
        	$query = $this->db->query("
			SELECT anh_minh_hoa_1,tieu_de, tac_gia, noi_dung_doc_thu, date(ngay_tao) as ngay_tao 
			FROM tbl_tin_tuc
			ORDER BY ngay_tao DESC limit 3

		");
        	return $query->result();
        }

}

;?>