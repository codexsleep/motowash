<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model("client/user_model", "user_model");
    }

    // Halaman Dashboard
    public function index() 
    {
        $user = $this->user_model->detail();

        $data = array(  'title' => 'Motowash | Profile',
                        'user'  => $user);
        $this->load->view('client/profile', $data, false);
    }
}
?>