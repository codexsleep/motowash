<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model("client/service_model", "service_model");
        $this->load->model("client/setting_model", "setting_model");
        $this->load->model("client/pesan_model", "pesan_model");
    }

    // Halaman Home
    public function index() 
    {
        $service = $this->service_model->listing();
        $setting = $this->setting_model->listing();
        $notif_jumlah = $this->pesan_model->notifications_jumlah();

        $data = array(  'title'     => 'Motowash | Home',
                        'service'   =>  $service,
                        'setting'   =>  $setting,
                        'notif_jumlah'  =>  $notif_jumlah,
                        'isi'       => 'client/home');
        $this->load->view('client/layout/wrapper', $data, FALSE);
    }
}
?>