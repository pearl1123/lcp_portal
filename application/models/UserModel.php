<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function registerUser($data){
        $this->db->insert("_user",$data);
        return $this->db->insert_id();
    }
}
?>