<?php
class Barcode extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('admin/Dashboard_model','dashboard_model');
		$this->load->model('admin/Auth_model','auth_model');
		$this->load->model('admin/Barcode_model','barcode_model');
		$this->load->library('zend');
        $this->zend->load('zend/barcode');
        error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('admin/auth/login');
            redirect($url);
        };
	}

	function index($id){	
		$data['userdata'] = $this->auth_model->datauser($this->session->userdata('username'))->row_array();
		$data['productcode'] = $this->barcode_model->codedata($id)->row_array();
		$this->load->view('admin/barcode',$data);
        $this->load->helper('text');
	}

	function generate($code){
        $this->zend->load('Zend/Barcode');
        Zend_Barcode::render('code128', 'image', array('text' => $code), array());
	}
	
	function print(){
		for($i=1; $i<=$_GET['t']; $i++){
			$redirect = base_url().'admin/barcode/index/'.$_GET['code'];
			echo '<meta http-equiv = "refresh" content = "2; url = '.$redirect.'" />';
            echo '<style>@page { size: auto; margin: 3px;}</style>'; 
            echo "<img alt='".$_GET['code']."' src='generate/".$_GET['code']."'>";
            echo '<script>window.print();</script>';
        }
	}
}