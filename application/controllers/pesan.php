<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
    }

    // Halaman Pesan
    public function index() 
    {
        $data = array(  'title'             => 'Motowash');
        $this->load->view('client/pesan', $data, FALSE);
    }
}
?>