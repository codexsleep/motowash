<?php
class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('admin/Dashboard_model','dashboard_model');
		$this->load->model('admin/Auth_model','auth_model');
        error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('admin/auth/login');
            redirect($url);
        };
	}

	function index(){
		$data['userdata'] = $this->auth_model->datauser($this->session->userdata('username'))->row_array();
    	$data['total_customer'] = $this->dashboard_model->datasummary("tbl_customers")->num_rows();
		$data['total_service_orders'] = $this->dashboard_model->datasummary("tbl_orders")->num_rows();
		$data['total_product_orders'] = $this->dashboard_model->datasummary("tbl_product_orders")->num_rows();
		$this->load->view('admin/dashboard',$data);
        $this->load->helper('text');
	}

	
}

