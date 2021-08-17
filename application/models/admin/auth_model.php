<?php
class auth_model extends CI_Model{

    function login($username,$password){
    	$result = mysqli_query($this->db,"SELECT * FROM tbl_users WHERE user_username='$username' AND user_password=sha1('$password') LIMIT 1");
        return $result;
    }

}