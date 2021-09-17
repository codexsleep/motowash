<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model("client/user_model", "user_model");
    }

    // Halaman Register
    public function index() 
    {
        $valid = $this->form_validation;

        $valid->set_rules('nama','Nama', 'required',
                        array('required' => '%s harus diisi'));
        
        $valid->set_rules('no_telpon','No Telpon', 'required',
                        array('required' => '%s harus diisi'));

        $valid->set_rules('password','Password', 'required|min_length[8]',
                        array('required' => '%s harus diisi',
                              'min_length' => 'Minimal panjang password 8 huruf'
                        ));

        $valid->set_rules('gender','Gender', 'required',
                        array('required' => '%s harus diisi'));

        if($valid->run()==false){   
            $data = array(  'title' =>  'Motowash | Register',
                        );          
            $this->load->view('client/register',$data,false);
        }else{
            $i = $this->input;

            $data = array(  'customer_name'   =>  $i->post('nama'),
                            'customer_telp'  =>  $i->post('no_telpon'),
                            'customer_pass'  =>  password_hash($i->post('password'), PASSWORD_BCRYPT),
                            'customer_gender' => $i->post('gender')
                        );
            $id = $this->user_model->tambah($data);

            //Buat session
            $this->session->set_userdata('customer_id', $id);
            $this->session->set_userdata(
                'customer_name',
                $i->post('nama'),
            );
            $this->session->set_userdata(
                'customer_telp',
                $i->post('no_telpon'),
            );

            $this->session->set_flashdata('sukses', 'Data telah ditambah');
            redirect(base_url('home'), 'refresh');
        }
    }
}
?>