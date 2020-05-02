<?php 
	class m_loai_danh_gia extends CI_Model {
		// Mục đích lấy tin tức theo loại tin
		public function lay_danh_sach_loai_danh_gia()
        {
			// Viết câu lệnh truy vấn SQL lấy ra được danh sách các loại tin tức
			$query = $this->db->query("
				SELECT * 
				FROM tbl_loai_danh_gia
			");

			// Trả kết quả truy vấn dữ liệu
            return $query->result();
        }
	}
;?>