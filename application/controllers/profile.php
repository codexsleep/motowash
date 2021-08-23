<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model("client/user_model", "user_model");
        $this->load->model("client/pesan_model", "pesan_model");
    }

    // Halaman Dashboard
    public function index() 
    {
        $user = $this->user_model->detail();
        $notif_jumlah = $this->pesan_model->notifications_jumlah();

        $data = array(  'title' => 'Motowash | Profile',
                        'user'  => $user,
                        'notif_jumlah'  => $notif_jumlah
                    );
        $this->load->view('client/profile', $data, false);
    }

    public function edit()
    {
        $user = $this->user_model->detail();

        $valid = $this->form_validation;

        $valid->set_rules('nama','Nama', 'required',
                    array('required'    =>  "%s Harus Diisi"));
        
        $valid->set_rules('gender','Gender', 'required',
                    array('required'    =>  "%s Harus Diisi"));

        if($valid->run()==false){   
            $data = array(  'title' =>  'Motowash | Edit data',
                            'user'    =>  $user,
                        );          
            $this->load->view('client/edit-data',$data,false);
        }else{
            $i = $this->input;

            $data = array(  'customer_id'       =>  $this->session->userdata('customer_id'),
                            'customer_name'          =>  $i->post('nama'),
                            'customer_gender'         =>  $i->post('gender'),
                            'customer_address' =>  $i->post('alamat')
                        );
            $this->user_model->edit($data);
            $this->session->set_flashdata('sukses', 'Data telah diedit');
            redirect(base_url('profile'));
        }

    }

    public function changepassword()
    {
        $user = $this->user_model->detail();

        $valid = $this->form_validation;

        $valid->set_rules('pw_lama','Password lama', 'required',
                        array('required' => '%s harus diisi'));

        $valid->set_rules('pw_baru','Password baru', 'required|min_length[8]',
                        array('required' => '%s harus diisi',
                              'min_length' => 'Minimal panjang password 8 huruf'
                        ));

        if($valid->run()==false){   
            $data = array(  'title' =>  'Motowash | Tukar Password',
                            'user'    =>  $user,
                        );          
            $this->load->view('client/change-password',$data,false);
        }else{
            $i = $this->input;
            
            $verify = password_verify($i->post('pw_lama'), $user->customer_pass);

            if(!$verify) {
                $this->session->set_flashdata('warning', 'Password lama tidak cocok!');
                redirect(base_url('profile/changepassword'));
            }

            $data = array(  'customer_id'       =>  $this->session->userdata('customer_id'),
                            'customer_pass'          =>  password_hash($i->post('pw_baru'), PASSWORD_BCRYPT)
                        );
            $this->user_model->edit($data);
            $this->session->set_flashdata('sukses', 'Password telah diubah');
            redirect(base_url('profile'));
        }

    }
}
?>