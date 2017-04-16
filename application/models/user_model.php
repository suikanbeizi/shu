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
    public function get_detail($id){
    	$sql="select * from book where book_id=".$id;
    	return $result=$this->db->query($sql)->result();
    }
    // h好评页面
    public function get_haoping(){
    	$sql="select * from book order by book_pingfen desc ";
    	 return $queryr=$this->db->query($sql)->result();
    }
    // 热销
    public function get_rexiao(){
    	$sql="select * from book order by book_csnum desc ";
    	 return $queryx=$this->db->query($sql)->result();
    }
    // 正在出售
     public function get_chushou(){
    	$sql="select * from book order by book_num desc ";
    	 return $queryc=$this->db->query($sql)->result();
    	// return $query=$this->db->get("book")->result();
    }
    // 分类
     public function get_fenlei($fenlei){
     	$sql="select * from book where book_fenlei='".$fenlei."' order by book_csnum";
    	 return $query=$this->db->query($sql)->result();
     }

     public function fenlei_paixu($paixun,$fenlei){
        if($paixun=='销量'){
            $sql="select * from book where book_fenlei='".$paixun."' order by book_csnum";
            return $query=$this->db->query($sql)->result();
        }
        else if($paixun=='好评'){
            $sql="select * from book where book_fenlei='".$paixun."' order by book_pengfen";
            return $query=$this->db->query($sql)->result();
        }
        else if($paixun=='最新'){
            $sql="select * from book where book_fenlei='".$paixun."' order by book_time";
            return $query=$this->db->query($sql)->result();
        }
        else if($paixun=='价格'){
            $sql="select * from book where book_fenlei='".$paixun."' order by book_price";
            return $query=$this->db->query($sql)->result();
        }
        else{
            return 'cuowu';
        }

     }
}