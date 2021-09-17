<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifications extends CI_Controller
{
    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model("client/pesan_model", "pesan_model");
    }

    public function index() 
    {
        $pesanan = $this->pesan_model->listing();

        $data = array(  'title'             => 'Motowash | Notifications',
                        'pesanan'           => $pesanan);
        $this->load->view('client/notifications', $data, FALSE);
    }
}
