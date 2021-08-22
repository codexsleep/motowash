<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model("client/service_model", "service_model");
        $this->load->model("client/pesan_model", "pesan_model");
    }

    public function tambah($id=null)
    {
        if (!isset($id)) redirect(base_url('home'), 'refresh');

        $service = $this->service_model->detail($id);

        if(!isset($service->service_id))  redirect(base_url('home'), 'refresh');

        $valid = $this->form_validation;

        $valid->set_rules('alamat','Alamat', 'required',
                        array('required' => '%s harus diisi'));
        
        $valid->set_rules('jumlah_pesanan','Jumlah Pesanan', 'required',
                        array('required' => '%s harus diisi'));

        if($valid->run()==false){   
            $data = array(  'title' =>  'Motowash | Pesan',
                            'service'   =>  $service
                        );          
            $this->load->view('client/pesan',$data,false);
        }else{
            $i = $this->input;

            $data = array(  'order_item'   =>  $id,
                            'customer_id'   => $this->session->userdata('customer_id'),
                            'order_address'  =>  $i->post('alamat'),
                            'order_number' => $i->post('jumlah_pesanan'),
                            'order_status'  =>  "Waiting"
                        );

            $this->pesan_model->tambah($data);
            $this->session->set_flashdata('sukses', 'Data telah ditambah');
            redirect(base_url('home'), 'refresh');
        }
    }
}
?>