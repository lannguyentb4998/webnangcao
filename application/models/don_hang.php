<?php
Class don_hang extends CI_Model {
	public function lay_don_hang($perpage, $offset)
	{
		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT tbl_khach_hang.email as email, tbl_don_hang.id as id, date(tbl_don_hang.ngay_tao) as ngay_tao, SUM(tbl_don_hang_chi_tiet.price) as tong_tien, tbl_don_hang.trang_thai
			FROM tbl_don_hang, tbl_khach_hang, tbl_don_hang_chi_tiet 
			WHERE tbl_don_hang.id_kh = tbl_khach_hang.id AND tbl_don_hang.id = tbl_don_hang_chi_tiet.ma_don 
			GROUP BY tbl_don_hang.id 
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->result();
	}

	public function lay_don_hang_da_thanh_toan()
	{
		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT tbl_khach_hang.email as email, tbl_don_hang.id as id, date(tbl_don_hang.ngay_tao) as ngay_tao, SUM(tbl_don_hang_chi_tiet.price) as tong_tien, tbl_don_hang.trang_thai
			FROM tbl_don_hang, tbl_khach_hang, tbl_don_hang_chi_tiet 
			WHERE tbl_don_hang.id_kh = tbl_khach_hang.id AND tbl_don_hang.id = tbl_don_hang_chi_tiet.ma_don AND tbl_don_hang.trang_thai='Đã thanh toán'
			GROUP BY tbl_don_hang.id 
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->result();
	}

	public function lay_don_hang_chua_thanh_toan()
	{
		//Viết câu lệnh truy vấn SQL
		$query = $this->db->query("
			SELECT tbl_khach_hang.email as email, tbl_don_hang.id as id, date(tbl_don_hang.ngay_tao) as ngay_tao, SUM(tbl_don_hang_chi_tiet.price) as tong_tien, tbl_don_hang.trang_thai
			FROM tbl_don_hang, tbl_khach_hang, tbl_don_hang_chi_tiet 
			WHERE tbl_don_hang.id_kh = tbl_khach_hang.id AND tbl_don_hang.id = tbl_don_hang_chi_tiet.ma_don AND tbl_don_hang.trang_thai='Chưa thanh toán'
			GROUP BY tbl_don_hang.id 
		");
		
		//Trả kết quả truy vấn dữ liệu
		return $query->result();
	}

	public function da_thanh_toan()
	{

		$query = $this->db->query("
		SELECT SUM(tbl_don_hang_chi_tiet.price) as tong_tien
		FROM tbl_don_hang, tbl_don_hang_chi_tiet 
		WHERE tbl_don_hang.id = tbl_don_hang_chi_tiet.ma_don AND tbl_don_hang.trang_thai='Đã thanh toán'
		");
		return $query->result();
	}

	public function chua_thanh_toan()
	{
		
		$query = $this->db->query("
		SELECT SUM(tbl_don_hang_chi_tiet.price) as tong_tien
		FROM tbl_don_hang, tbl_don_hang_chi_tiet 
		WHERE tbl_don_hang.id = tbl_don_hang_chi_tiet.ma_don AND tbl_don_hang.trang_thai='Chưa thanh toán'
		");
		return $query->result();
	}

	public function lay_don_hang_theo_ID($id)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
			$query = $this->db->query("
				SELECT tbl_khach_hang.email as email, tbl_don_hang.id as id, date(tbl_don_hang.ngay_tao) as ngay_tao, SUM(tbl_don_hang_chi_tiet.price) as tong_tien, tbl_don_hang.trang_thai, tbl_khach_hang.quan as quan, tbl_khach_hang.thanh_pho as thanh_pho, tbl_khach_hang.ten_kh as ten_kh, tbl_doi_ngu.name as ten_nv, tbl_don_hang_chi_tiet.price as don_gia, tbl_don_hang_chi_tiet.qty as so_luong, (tbl_don_hang_chi_tiet.qty * tbl_don_hang_chi_tiet.price) as thanh_tien
			FROM tbl_don_hang, tbl_khach_hang, tbl_don_hang_chi_tiet, tbl_doi_ngu
			WHERE tbl_don_hang.id_kh = tbl_khach_hang.id AND tbl_don_hang.id = tbl_don_hang_chi_tiet.ma_don AND tbl_don_hang_chi_tiet.id_nv = tbl_doi_ngu.id AND tbl_don_hang_chi_tiet.ma_don='".$id."'

			");

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }	


    public function sua_trang_thai()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
			$id = $_POST['txtID'];
			$trang_thai = $_POST['txtTrangThai'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'trang_thai' => $trang_thai
			);

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('id', $id);
			$this->db->update('tbl_don_hang', $data);
        }
	
	/* Gán tên bảng cần xử lý*/
	private $_name = 'tbl_don_hang';
	
	function __construct(){
        parent::__construct();
    } 
    
    public function i_fGetTotalBooks()
    {
    	return $this->db->select()->get($this->_name)->num_rows();
    }
  
}

;?>