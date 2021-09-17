<?php
class Product_model extends CI_Model
{
    public function dataproduct()
    {
        $result = $this->db->query("SELECT * FROM tbl_products");
        return $result;
    }
    public function category()
    {
        $result = $this->db->query("SELECT * FROM tbl_categories");
        return $result;
    }
    public function editdata($id)
    {
        $result = $this->db->query("SELECT * FROM tbl_products WHERE product_id='$id'");
        return $result;
    }
    public function categoryedit($categoryid)
    {
        $result = $this->db->query("SELECT * FROM tbl_categories WHERE category_id='$categoryid'");
        return $result;
    }
    public function deleteproduct($id)
    {
        $result = $this->db->query("DELETE FROM tbl_products WHERE product_id='$id'");
        return $result;
    }
    
    public function addproduct($product_code,$product_name,$product_stock,$product_price)
    {
        $result = $this->db->query("INSERT INTO tbl_products (product_code, product_name, product_stock, product_price) VALUES ('$product_code','$product_name','$product_stock','$product_price')");
        return $result;
    }
    public function editproduct($product_id,$product_code,$product_name,$product_category,$product_stock,$product_price){
        $result = $this->db->query("UPDATE tbl_products SET product_code='$product_code', product_name='$product_name', product_category='$product_category', product_stock='$product_stock', product_price='$product_price' where product_id='$product_id'");
        return $result;
    }


} 