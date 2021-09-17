<?php
class auth_model extends CI_Model{

    function authlogin($username,$password){
        $query=$this->db->query("SELECT * FROM tbl_users WHERE user_username='$username' AND user_password=SHA1('$password') LIMIT 1");
        return $query;
    }

    function datauser($username){
        $query= $this->db->query("SELECT * FROM tbl_users WHERE user_username='$username' LIMIT 1");
        return $query;
    }

}