<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model("client/service_model", "service_model");
    }

    // Halaman Home
    public function index() 
    {
        $service = $this->service_model->listing();

        $data = array(  'title'     => 'Motowash | Home',
                        'service'   =>  $service,
                        'isi'       => 'client/home');
        $this->load->view('client/layout/wrapper', $data, FALSE);
    }
}
?>