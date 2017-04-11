<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends  CI_Model{

    public function insert_user($data){
        return $query=$this->db->insert("user",$data);
    }
    
}