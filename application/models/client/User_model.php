<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    //Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Tambah
    public function tambah($data)
    {
        $this->db->insert('tbl_customers', $data);
        return $this->db->insert_id();
    }
}
?>
