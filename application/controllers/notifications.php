<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifications extends CI_Controller
{
    // Load Model
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('client/notifications');
    }
}
