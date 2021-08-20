<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
    }

    // Halaman Dashboard
    public function index() 
    {
        $data = array(  'title'             => 'Motowash',
                        'isi'               => 'client/index');
        $this->load->view('client/layout/wrapper', $data, FALSE);
    }
}
?>