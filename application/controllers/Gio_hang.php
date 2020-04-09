<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gio_hang extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            $this->load->library('cart');
            $this->load->model('shopping_model');
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->database();
        }


	public function index()
	{
		$this->load->database();
		 $this->load->library('pagination');
		$this->load->helper('url');
		$query1 = $this->db->query("
			SELECT *
			FROM tbl_doi_ngu
			ORDER BY ngay_tao DESC limit 3
		");

		$this->db->select('*');                  
        $this->db->from('tbl_doi_ngu');
        $this->db->order_by('id desc');          
        $offset=$this->uri->segment(2);    
        $limit= 6;        
        $this->db->limit($limit, $offset);
        $query_poster = $this->db->get(); 

		$data['nhan_vien_moi'] = $query1->result();
		$this->load->view('menu');
		$this->load->view('gio_hang', $data);
		$this->load->view('footer');
	}


    function update_cart()
        {
            $cart_info = $_POST['cart'] ;
            foreach( $cart_info as $id => $cart)
                {
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
                    $data = array(
                    'rowid' => $rowid,
                    'price' => $price,
                    'amount' => $amount,
                    'qty' => $qty
                    );       
                    $this->cart->update($data);
                }
           redirect(base_url().'gio_hang');
        } 

    function remove($rowid)
        {
            if ($rowid==="all")
                {
                    $this->cart->destroy();
                }
            else
                {
                    $data = array(
                        'rowid' => $rowid,
                        'qty' => 0
                    );
                $this->cart->update($data);
                }
            redirect(base_url().'gio_hang');
        }


    function save_order()
        {
            $khach_hang = array(
                'ten_kh'          => $this->input->post('ten_kh'),
                'email'         => $this->input->post('email'),
                'SDT'         => $this->input->post('SDT'),
                'quan'       => $this->input->post('quan')
            );
            $cust_id = $this->shopping_model->insert_thanhtoan($khach_hang);
            
            $order = array(
                'ngay_tao' => date('Y-m-d'),
                'id_kh' => $cust_id
            );
            
            $ord_id = $this->shopping_model->insert_order($order);
            
            if ($cart = $this->cart->contents()):
                foreach ($cart as $item):
                    $order_detail = array(
                    'ma_don' => $ord_id,
                    'id' => $item['id'],
                    'qty' => $item['qty'],
                    'price' => $item['price']
                );  
                $cust_id = $this->shopping_model->insert_order_detail($order_detail);
                endforeach;
            endif;
            echo "<script type='text/javascript'>
			window.alert('Bạn đã đặt hàng. Chúng tôi sẽ liên lạc lại sớm cho bạn.');
			</script>";

			echo "<script type='text/javascript'>
			window.location.href= '".base_url()."welcome';
			</script>";
        }       



}
