<?php
class Dashboard extends CI_Controller{

	function index(){
		$this->load->view('admin/index');
        $this->load->helper('text');
	}

	
}

