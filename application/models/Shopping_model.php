<?php
class Shopping_model extends CI_Model {

    function __construct()
        {
            parent::__construct();
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