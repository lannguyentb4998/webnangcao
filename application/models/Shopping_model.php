<?php
class Shopping_model extends CI_Model {

    function __construct()
        {
            parent::__construct();
            $this->load->library('cart');
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->database();
        }  

        function kiem_tra_du_lieu($email)
        {
        
        $query = $this->db->query("
            SELECT *
            FROM tbl_khach_hang
            WHERE email='".$email."'
        ");
        
        //Trả kết quả truy vấn dữ liệu
        return $query->num_rows();
        }   
        
    function insert_thanhtoan($data)
        {
                $this->db->insert('tbl_khach_hang', $data);
                $id = $this->db->insert_id();
                return (isset($id)) ? $id : FALSE;
        }
    
    function insert_order($data)
        {
            $this->db->insert('tbl_don_hang', $data);
            $id = $this->db->insert_id();
            return (isset($id)) ? $id : FALSE;
        }
    
    function insert_order_detail($data)
        {
            $this->db->insert('tbl_don_hang_chi_tiet', $data);
        }                                                           
} 
?>  