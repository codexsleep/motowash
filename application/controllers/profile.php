<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
    }

    // Halaman Dashboard
    public function index() 
    {
        $this->load->view('client/profile');
    }
}
?>