<?php
class Product extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('admin/Dashboard_model','dashboard_model');
		$this->load->model('admin/Auth_model','auth_model');
		$this->load->model('admin/Product_model','product_model');
        error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('admin/auth/login');
            redirect($url);
        };
	}

	function index(){
		$data['userdata'] = $this->auth_model->datauser($this->session->userdata('username'))->row_array();
		$data['product'] = $this->product_model->dataproduct()->result_array();
		$this->load->view('admin/products',$data);
        $this->load->helper('text');
	}

	function add(){
		if(isset($_POST['simpan'])){
			$product_code = $_POST['code'];
			$product_name = $_POST['name'];
			$product_stock = $_POST['stock'];
			$product_price = $_POST['harga'];
			$product_image = $this->_uploadImage();
		}
		$data['category'] = $this->product_model->category()->result_array();
		$this->load->view('admin/add_product',$data);
        $this->load->helper('text');
	}

	function hapus($id){
		$this->product_model->deleteproduct($id);
		redirect("admin/product");
	}

	
}

