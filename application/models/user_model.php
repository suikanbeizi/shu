<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends  CI_Model{

    public function insert_user($data){
        return $query=$this->db->insert("user",$data);
    }
    public function check_reg($data){
        return $query=$this->db->get_where("user",$data)->result();
    }
    public function do_login($data){
        return $query=$this->db->get_where("user",$data)->result();
    }
    public function get_rbook(){
    	$sql="select * from book order by book_pingfen desc limit 6";
    	 return $queryr=$this->db->query($sql)->result();
    	// return $query=$this->db->get("book")->result();
    }
    public function get_cbook(){
    	$sql="select * from book order by book_num desc limit 8";
    	 return $queryc=$this->db->query($sql)->result();
    	// return $query=$this->db->get("book")->result();
    }
    public function get_xbook(){
    	$sql="select * from book order by book_csnum desc limit 9";
    	 return $queryx=$this->db->query($sql)->result();
    	// return $query=$this->db->get("book")->result();
    }
    
}