<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends  CI_Model{

    public function insert_user($data){
        return $query=$this->db->insert("user",$data);
    }
    public function check_reg($data){
        return $query=$this->db->get_where("user",$data)->row();
    }
    public function do_login($data){
        return $query=$this->db->get_where("user",$data)->row();
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
    	return $result=$this->db->query($sql)->row();
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
     public function get_fenlei_qx($fenlei){
        $sql="select * from book  order by book_csnum";
         return $xquery=$this->db->query($sql)->result();
     }
      public function get_fenlei_qp($fenlei){
        $sql="select * from book  order by book_pingfen";
         return $xquery=$this->db->query($sql)->result();
     }
      public function get_fenlei_qz($fenlei){
        $sql="select * from book  order by book_time";
         return $xquery=$this->db->query($sql)->result();
     }
      public function get_fenlei_qj($fenlei){
        $sql="select * from book  order by book_price";
         return $xquery=$this->db->query($sql)->result();
     }

     public function get_fenlei_x($fenlei){
     	$sql="select * from book where book_fenlei='".$fenlei."' order by book_csnum";
    	 return $xquery=$this->db->query($sql)->result();
     }
     public function get_fenlei_p($fenlei){
        $sql="select * from book where book_fenlei='".$fenlei."' order by book_pingfen";
         return $pquery=$this->db->query($sql)->result();
     }
     public function get_fenlei_z($fenlei){
        $sql="select * from book where book_fenlei='".$fenlei."' order by book_time";
         return $zquery=$this->db->query($sql)->result();
     }
     public function get_fenlei_j($fenlei){
        $sql="select * from book where book_fenlei='".$fenlei."' order by book_price";
         return $jquery=$this->db->query($sql)->result();
     }

     // public function fenlei_paixu($paixun,$fenlei){
     //    if($paixun=='销量'){
     //        $sql="select * from book where book_fenlei='".$fenlei."' order by book_csnum";
     //        return $query=$this->db->query($sql)->result();
     //    }
     //    if($paixun=='好评'){
     //        $sql="select * from book where book_fenlei='".$fenlei."' order by book_pingfen";
     //        return $query=$this->db->query($sql)->result();
     //    }
     //    if($paixun=='最新'){
     //        $sql="select * from book where book_fenlei='".$fenlei."' order by book_time";
     //        return $query=$this->db->query($sql)->result();
     //    }
     //    if($paixun=='价格'){
     //        $sql="select * from book where book_fenlei='".$fenlei."' order by book_price";
     //        return $query=$this->db->query($sql)->result();
     //    }
        

     // }
     // 获取个人信息
     public function get_person($session_id){
        $sql="select * from user where user_id='".$session_id."'";
        return $query=$this->db->query($sql)->row();
     }
     // 更新个人信息
     public function inset_person($data,$session_id){
        $this->db->where('user_id', $session_id);
        return $query=$this->db->update('user',$data);
     }
     // 获取个人收货地址
     public function get_myaddress($da) {
        return $query=$this->db->get_where("sh_address",$da)->result();
     }
     // 删除收货地址
     public function del_address($address_id){
        $this->db->where('address_id', $address_id);
        return $query=$this->db->delete('sh_address');
        
     }
     // 添加收货地址
     public function insert_address($data){
        return $query=$this->db->insert("sh_address",$data);
     }
     // 更新书籍数量
     public function updata_book_num($da,$book_id){
        $this->db->where('book_id', $book_id);
        return $query=$this->db->update('book',$da);
     }
     // 下单 
     public function insert_dingdan($data){
        return $query=$this->db->insert("dingdan",$data);
     }
     //展示订单
     public function get_dingdan($session_id){
        $sql="select book.book_name,book.book_img,dingdan.d_id,dingdan.d_time,dingdan.d_num,dingdan.d_price,concat(sh_address.sh_diqu,sh_address.sh_jiedao) as address from book INNER JOIN dingdan ON book.book_id=dingdan.d_book_id INNER JOIN sh_address on sh_address.address_id=dingdan.d_address_id where book_id in (select dingdan.d_book_id from dingdan where d_user_id=".$session_id.")";
        return $result=$this->db->query($sql)->result();
     }
     // 搜索书籍
     public function search($search){
        $sql="SELECT * from book WHERE book_name like '%".$search."%' ORDER BY book_csnum";
        return $result=$this->db->query($sql)->result();
     }
     // 加入购物车
     public function insert_car($data){
        return $result=$this->db->insert('car',$data);
     }
     // 展示购物车
     public function get_gouwuche($session_id){
        $sql="select book.book_id,book.book_name,book.book_img,car.car_id,car.book_num,car.price from book INNER JOIN car ON car.book_id=book.book_id WHERE book.book_id IN (SELECT car.book_id FROM car WHERE user_id=".$session_id.")";
        return $result=$this->db->query($sql)->result();
     }
     // 管理后台
     // 用户信息
     public function admin_get_user_count(){
        $sql="select count(*) as count from user where role=1 ";
        return $count=$this->db->query($sql)->row();
     }
     public function admin_get_users(){
        $sql="select *  from user where role=1 ";
        return $result=$this->db->query($sql)->result();
     }
     // 书籍信息
     public function admin_get_book_count(){
        $sql="select count(*) as count from book where book_num>0 ";
        return $count=$this->db->query($sql)->row();
     }
     public function admin_get_books(){
        $sql="select * from book ";
        return $xquery=$this->db->query($sql)->result();
     }
     //订单信息
     public function admin_get_dingdan_count(){
        $sql="select count(*) as count from dingdan";
        return $count=$this->db->query($sql)->row();
     }

     public function admin_get_dingdans(){
        $sql="select book.book_name,book.book_img,dingdan.d_id,dingdan.d_time,dingdan.d_num,dingdan.d_price from book INNER JOIN dingdan ON book.book_id=dingdan.d_book_id where book_id in (select dingdan.d_book_id from dingdan )";
        return $result=$this->db->query($sql)->result();
     }
     // 销售额
     public function admin_get_chushou_count(){
        $sql="select SUM(d_price) as count from dingdan";
        return $count=$this->db->query($sql)->row();
     }
     // 添加书籍
     public function admin_insert_book($data){
        return $result=$this->db->insert('book',$data);
     }
     //修改书籍
     public function admin_xiugai_book($data,$book_id){
        $this->db->where('book_id', $book_id);
        return $query=$this->db->update('book',$data);
     }
     //删除书籍
     public function admin_del_book($book_id){
        $this->db->where('book_id', $book_id);
        return $query=$this->db->delete('book');
     }
     // 获取需要修改的书籍
     public function admin_get_book($book_id){
        $sql="select *  from book where book_id=".$book_id;
        return $row=$this->db->query($sql)->row();
     }

}   