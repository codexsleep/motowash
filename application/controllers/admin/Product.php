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
			$this->product_model->addproduct($product_code,$product_name,$product_stock,$product_price);
			setcookie("sucmesg", "Produk Berhasil di tambahkan", time() + (3), "/");
			redirect("admin/product/add");
		}
		$data['category'] = $this->product_model->category()->result_array();
		$this->load->view('admin/add_product',$data);
        $this->load->helper('text');
	}

	function edit($id){
		$data['productdata'] = $this->product_model->editdata($id)->row_array();	
		if(isset($_POST['simpan'])){
			$product_id = $_POST['productid'];
			$product_code = $_POST['code'];
			$product_name = $_POST['name'];
			$product_category = $_POST['kategori'];
			$product_stock = $_POST['stock'];
			$product_price = $_POST['harga'];
			$this->product_model->editproduct($product_id,$product_code,$product_name,$product_category,$product_stock,$product_price);
			setcookie("sucmesg", "Produk Berhasil di edit", time() + (3), "/");
			redirect("admin/product/edit/$product_id");
		}	
		$data['category'] = $this->product_model->category()->result_array();
		$this->load->view('admin/edit_product',$data);
        $this->load->helper('text');
	}

	function hapus($id){
		$this->product_model->deleteproduct($id);
		redirect("admin/product");
	}

	
}

