<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller{

    // Load Model
    public function __construct()
    {
        parent::__construct();
    }
    
    //Logout
    public function index()
    {
        // Ambil fungsi logout dari simple login
        $this->simple_login->logout();
    }
}