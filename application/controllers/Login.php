<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    // Load Model
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        
        $valid = $this->form_validation;
        
        $valid->set_rules('no_telpon','No Telpon', 'required',
                        array('required' => '%s harus diisi'));

        $valid->set_rules('password','Password', 'required|min_length[8]',
                        array('required' => '%s harus diisi',
                              'min_length' => 'Minimal panjang password 8 huruf'
                        ));

        if($valid->run()==false){   
            $data = array(  'title' =>  'Motowash | Login',
                        );          
            $this->load->view('client/login',$data,false);
        }else{
            $no_telpon = $this->input->post('no_telpon');
            $password = $this->input->post('password');
            //Proses ke simple login
            $this->simple_login->login($no_telpon,$password);
        }
    }
    
    //Fungsi logout
    public function logout()
    {
        // Ambil fungsi logout dari simple login
        $this->simple_login->logout();
    }
}