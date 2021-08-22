<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan_model extends CI_Model
{
    //Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_orders');
        $this->db->where('id_product', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_orders',  $data);
    }
}
?>
