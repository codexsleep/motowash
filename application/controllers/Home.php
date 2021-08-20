<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
    }

    // Halaman Home
    public function index() 
    {
        $data = array(  'title'             => 'Motowash',
                        'isi'               => 'client/home');
        $this->load->view('client/layout/wrapper', $data, FALSE);
    }
}
?>