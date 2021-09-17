<?php
class Service extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('admin/Dashboard_model','dashboard_model');
		$this->load->model('admin/Auth_model','auth_model');
		$this->load->model('admin/Service_model','service_model');
        error_reporting(0);
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('admin/auth/login');
            redirect($url);
        };
	}

	function index(){
		$data['userdata'] = $this->auth_model->datauser($this->session->userdata('username'))->row_array();
		$data['services'] = $this->service_model->servicedata()->result_array();
		$this->load->view('admin/services',$data);
        $this->load->helper('text');
	}
	
	function add(){
		$data['userdata'] = $this->auth_model->datauser($this->session->userdata('username'))->row_array();
		if(isset($_POST['simpan'])){
			$service_name = $_POST['name'];
			$service_icon = $_POST['icon'];
			$service_description = $_POST['deskripsi'];
			$service_status = $_POST['status'];
			$this->service_model->addservice($service_name,$service_icon,$service_description,$service_status);
			redirect("admin/add");
		}
		$this->load->view('admin/add_service',$data);
        $this->load->helper('text');
	}
	function edit($id){
		$data['userdata'] = $this->auth_model->datauser($this->session->userdata('username'))->row_array();
		$data['services'] = $this->service_model->serviceeditdata($id)->row_array();
		if(isset($_POST['simpan'])){
			$service_id = $_POST['id'];
			$service_name = $_POST['name'];
			$service_icon = $_POST['icon'];
			$service_description = $_POST['deskripsi'];
			$service_status = $_POST['status'];
			$this->service_model->editservice($service_id,$service_name,$service_icon,$service_description,$service_status);
			redirect("admin/service/edit/$service_id");
		}
		$this->load->view('admin/edit_service',$data);
        $this->load->helper('text');
	}

	function hapus($id){
		$this->service_model->deleteservice($id);
		redirect("admin/service");
	}

	
}

