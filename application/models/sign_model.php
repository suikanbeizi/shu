<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sign_model extends  CI_Model{

    public function inset_sign($data){
        return $query=$this->db->insert("sign",$data);
    }
    public function get_name(){
        return $query=$this->db->get("sign")->result();
    }
    public function pay($data){
        return $query=$this->db->insert("t_sign",$data);
    }
    public function del($id){
        $this->db->where('id',$id);
        $this->db->delete('sign');
    }
}