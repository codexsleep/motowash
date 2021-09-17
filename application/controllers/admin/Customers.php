<?php
class Customers extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('admin/Dashboard_model','dashboard_model');
		$this->load->model('admin/Auth_model','auth_model');
		$this->load->model('admin/Customer_model','customer_model');
        error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('admin/auth/login');
            redirect($url);
        };
	}

	function index(){
		$data['userdata'] = $this->auth_model->datauser($this->session->userdata('username'))->row_array();
		$data['customers'] = $this->customer_model->customersdata()->result_array();
		$this->load->view('admin/customers',$data);
        $this->load->helper('text');
	}
}
	