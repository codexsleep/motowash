<?php
class Customer_model extends CI_Model{

    public function customersdata()
    {
        $result = $this->db->query("SELECT * FROM tbl_customers");
        return $result;
    }
    public function serviceeditdata($id)
    {
        $result = $this->db->query("SELECT * FROM tbl_services where service_id='$id'");
        return $result;
    }
    public function addservice($service_name,$service_icon,$service_description,$service_status){
        $result = $this->db->query("INSERT INTO tbl_services (service_name,service_icon,service_description,service_status) VALUES('$service_name','$service_icon','$service_description','$service_status')");
        return $result;
    }
    public function editservice($service_id,$service_name,$service_icon,$service_description,$service_status){
        $result = $this->db->query("UPDATE tbl_services SET service_name='$service_name',service_icon='$service_icon',service_description='$service_description',service_status='$service_status' where service_id='$service_id'");
        return $result;
    }
    public function deleteservice($id)
    {
        $result = $this->db->query("DELETE FROM tbl_services where service_id='$id'");
        return $result;
    }
}