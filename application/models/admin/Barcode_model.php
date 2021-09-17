<?php
class Barcode_model extends CI_Model
{
    public function codedata($id)
    {
        $result = $this->db->query("SELECT product_code as code FROM tbl_products WHERE product_code='$id'");
        return $result;
    }
}