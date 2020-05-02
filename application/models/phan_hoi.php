<?php
Class phan_hoi extends CI_Model {
	public function lay_phan_hoi()
	{
		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT *
			FROM tbl_phan_hoi
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->result();
	}
	public function lay_phan_hoi_theo_ID($id)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
			$query = $this->db->query("
				SELECT *
				FROM tbl_phan_hoi
				WHERE id='".$id."'

			");

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }	

	public function xoa_phan_hoi($id)
	{
		// Thực hiện việc xóa dữ liệu
			$this->db->where('id', $id);
			$this->db->delete('tbl_phan_hoi');
	}

	public function them_moi_phan_hoi()
	{
		if(isset($_POST['txtHoTen']) && isset($_POST['txtEmail'])&& isset($_POST['txtNoiDung'])&& isset($_POST['txtTieuDe'])){
		// Dữ liệu thu được từ FORM nhập dữ liệu
			$ho_ten = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$noi_dung = $_POST['txtNoiDung'];
			$tieu_de = $_POST['txtTieuDe'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ho_ten' => $ho_ten,
				'tai_khoan' => $email,
				'noi_dung_phan_hoi' => $noi_dung,
				'tieu_de' => $tieu_de
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_phan_hoi', $data);}
	}

	public function them_moi_binh_luan()
	{
		if(isset($_POST['txtHoTen']) && isset($_POST['txtEmail'])&& isset($_POST['txtNoiDung'])&& isset($_POST['txtID'])){
		// Dữ liệu thu được từ FORM nhập dữ liệu
			$ho_ten = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$noi_dung = $_POST['txtNoiDung'];
			$id = $_POST['txtID'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ho_ten' => $ho_ten,
				'tai_khoan' => $email,
				'noi_dung' => $noi_dung,
				'id_tin_tuc' => $id
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_binh_luan', $data);}
	}
}

;?>