<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_mat_khau extends CI_Controller {

	
	public function index()
	{

		$this->load->view('admin/quen_mk', $data);
	}
}
