<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model("client/pesan_model", "pesan_model");
    }

    // Halaman Pesanan
    public function index() 
    {
        $pesanan = $this->pesan_model->listing();

        $data = array(  'title'             => 'Motowash | Pesanan',
                        'pesanan'           => $pesanan,
                        'isi'               => 'client/pesanan');
        $this->load->view('client/layout/wrapper', $data, FALSE);
    }
}
?>