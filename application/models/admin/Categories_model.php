<?php
class Categories_model extends CI_Model
{
    public function categorydata()
    {
        $result = $this->db->query("SELECT * FROM tbl_categories");
        return $result;
    }

    public function addcategory($category_name)
    {
        $result = $this->db->query("INSERT INTO tbl_categories (category_name) VALUES('$category_name')");
        return $result;
    }

    public function deletecategory($id)
    {
        $result = $this->db->query("DELETE FROM tbl_categories WHERE category_id='$id'");
        return $result;
    }
}