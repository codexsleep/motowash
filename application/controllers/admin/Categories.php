<?php
class Categories extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('admin/Dashboard_model','dashboard_model');
		$this->load->model('admin/Auth_model','auth_model');
		$this->load->model('admin/Categories_model','categories_model');
        error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('admin/auth/login');
            redirect($url);
        };
	}

	function index(){
		$data['userdata'] = $this->auth_model->datauser($this->session->userdata('username'))->row_array();
		$data['category'] = $this->categories_model->categorydata()->result_array();
		$this->load->view('admin/categories',$data);
        $this->load->helper('text');
	}

	function add(){
		if(isset($_POST['simpan'])){
			$category_name = $_POST['kategori'];
			$this->categories_model->addcategory($category_name);
			setcookie("sucmesg", "Kategori Berhasil di tambahkan", time() + (3), "/");
			redirect("admin/categories");
		}
		$data['category'] = $this->product_model->category()->result_array();
		$this->load->view('admin/add_product',$data);
        $this->load->helper('text');
	}

	function hapus($id){
		$this->categories_model->deletecategory($id);
		redirect("admin/categories");
	}

	
}

