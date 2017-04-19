<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Content-Type: text/html; charset=utf-8");
class Shu_user extends CI_Controller {
	public function __construct(){
        parent::__construct();
    }
    // 登录注册
    public function reg(){
    	$this->load->view('reg');
    }
    public function login(){
    	$this->load->view('login');
    }
    public function reg_msg(){
    	$user_name=$this->input->post('username');
    	$password=$this->input->post('password');
    	date_default_timezone_set('PRC');
        $time=date("Y-m-d h:i:s",time());
        $data=array(
        	'username'=>$user_name,
        	'password'=>$password,
        	'time'=>$time,
            'role'=>1
        );
        $this-> load ->model('user_model');
        $result=$this->user_model->insert_user($data);
        if($result){
    	redirect('index.php/shu_user/login');

	    }
    
	}
	public function check_reg(){
		$username=$_POST['username'];

		$data=array(
			'username'=>$username
		);
		$this-> load ->model('user_model');
        $result=$this->user_model->check_reg($data);
        
        if($result){
        	echo "1";
        }
        else{
        	echo "0";
        }
	}

	public function do_login(){
        $this->load->library('session');
		$user_name=$this->input->post('username');
    	$password=$this->input->post('password');
    	$data=array(
        	'username'=>$user_name,
        	'password'=>$password
        );
        $this-> load ->model('user_model');
        $result=$this->user_model->do_login($data);
        $da=array(
            'user_id'=> $result->user_id,
            'user_name'=>$result->username
            );
        $this->session->set_userdata($da);
        if($result->role==1){
        	echo "<script>alert('登录成功');location.href='../shu_user/index'</script>";
        }
        else{
        	echo "<script>alert('账号密码填写错误');location.href='../shu_user/login'</script>";
        }
	}
    // 退出
    public function zhuxiao(){
        $this->session->sess_destroy();
        echo "<script>alert('退出成功');location.href='../shu_user/index'</script>";
    }

	// 首页
	public function index(){
        $this->load->model('user_model');
        $queryr=$this->user_model->get_rbook();
        $queryc=$this->user_model->get_cbook();
        $queryx=$this->user_model->get_xbook();
        $data = array(
            'rbooks' => $queryr,
            'cbooks' => $queryc,
            'xbooks' => $queryx
        );
		$this->load->view('index',$data);
	}

    // 商品详情
    public function shu_detail($id){
        $this-> load ->model('user_model');
        $result=$this->user_model->get_detail($id);
        
        $data=array(
                'details'=> $result
            );
        // echo var_dump($data);
        $this->load->view('shu_detail',$data);
    }
    // 好评商品
    public function shu_haoping(){
        $this->load->model('user_model');
        $query=$this->user_model->get_haoping();
        $data=array(
                'haopings'=>$query
            );
        $this->load->view('shu_haoping',$data);
    }

    public function shu_rexiao(){
        $this->load->model('user_model');
        $query=$this->user_model->get_rexiao();
        $data=array(
                'rbooks'=>$query
            );
        $this->load->view('shu_rexiao',$data);
    }
    public function shu_chushou(){
        $this->load->model('user_model');
        $query=$this->user_model->get_chushou();
        $data=array(
                'cbooks'=>$query
            );
        $this->load->view('shu_chushou',$data);
    }

    // 分类页面
    public function shu_fenlei(){
        $fenlei=$_GET['fenlei'];
        $this->load->model('user_model');
        if($fenlei=='全部'){
            $xquery=$this->user_model->get_fenlei_qx($fenlei);
            $pquery=$this->user_model->get_fenlei_qp($fenlei);
            $zquery=$this->user_model->get_fenlei_qz($fenlei);
            $jquery=$this->user_model->get_fenlei_qj($fenlei);
            $data=array(
                    'xbooks'=>$xquery,
                    'pbooks'=>$pquery,
                    'zbooks'=>$zquery,
                    'jbooks'=>$jquery
                );
            $this->load->view('shu_fenlei',$data,$fenlei);
        }
        else{

            $xquery=$this->user_model->get_fenlei_x($fenlei);
            $pquery=$this->user_model->get_fenlei_p($fenlei);
            $zquery=$this->user_model->get_fenlei_z($fenlei);
            $jquery=$this->user_model->get_fenlei_j($fenlei);
            $data=array(
                    'xbooks'=>$xquery,
                    'pbooks'=>$pquery,
                    'zbooks'=>$zquery,
                    'jbooks'=>$jquery
                );
            $this->load->view('shu_fenlei',$data,$fenlei);
        }
    }

    // public function fenlei_paixu(){
    //     $paixun=$_POST['paixun'];
    //     $fenlei=$_POST['fenlei'];
    //     $this->load->model('user_model');
    //     $query=$this->user_model->fenlei_paixu($paixun,$fenlei);
    //     if($query){
    //         return $query;
    //     }
    //     else{
    //         echo "error";
    //     }
        
    // }
    // 个人信息
    public function person(){
        $session_id = $this->session->userdata('user_id');
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../shu_user/login'</script>";
        }
        else{
            $this->load->model('user_model');
            $query=$this->user_model->get_person($session_id);
            $data=array(
                'users'=> $query
                );
            $this->load->view('person',$data);
        }
        
    }
    // 完善个人信息
    public function inset_person(){
        $session_id = $this->session->userdata('user_id');
        $username=$this->input->post('username');
        $user_city=$this->input->post('city');
        $user_sex=$this->input->post('sex');
        $user_shenfen=$this->input->post('shenfen');
        $user_des=$this->input->post('jishao');
        $data=array(
            'username'=>$username,
            'user_city'=>$user_city,
            'user_sex'=>$user_sex,
            'user_shenfen'=>$user_shenfen,
            'user_des'=>$user_des
            );
        $this->load->model('user_model');
        $query=$this->user_model->inset_person($data,$session_id);
        if($query){
            echo "<script>alert('修改成功');location.href='../shu_user/person'</script>";
        }
    }
    // 地址
     public function myaddress(){
        $session_id = $this->session->userdata('user_id');
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../shu_user/login'</script>";
        }
        else{
            $this->load->model('user_model');
            $da=array(
                'user_id'=>$session_id
                );
            $query=$this->user_model->get_myaddress($da);
            $data=array(
                'addresses'=> $query
                );
            $this->load->view('myaddress',$data);
        }
        
    }
    // 删除地址
    public function deladdress($address_id){
        $this->load->model('user_model');
        $query=$this->user_model->del_address($address_id);
        if($query){
            echo "<script>alert('已经删除该地址');location.href='../myaddress'</script>";
        }
    }
    // 添加地址
    public function insert_address(){
        $session_id = $this->session->userdata('user_id');
        $sh_name=$this->input->post('sh_name');
        $sh_diqu=$this->input->post('sh_diqu');
        $sh_jiedao=$this->input->post('sh_jiedao');
        $sh_youbian=$this->input->post('sh_youbian');
        $sh_tel=$this->input->post('sh_tel');
        $data=array(
            'sh_name'=>$sh_name,
            'sh_diqu'=>$sh_diqu,
            'sh_jiedao'=>$sh_jiedao,
            'sh_youbian'=>$sh_youbian,
            'sh_tel'=>$sh_tel,
            'user_id'=>$session_id
            );
        $this->load->model('user_model');
        $query=$this->user_model->insert_address($data);
        if($query){
            echo "<script>alert('成功添加新地址');location.href='../shu_user/myaddress'</script>";
        }
    }
    // 购买商品
    public function goumai($book_id){
        $session_id = $this->session->userdata('user_id');
        $book_num=$_GET['book_num'];
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../login'</script>";
        }
        else{
            $this->load->model('user_model');
            $da=array(
                'user_id'=>$session_id
                );
            $query=$this->user_model->get_myaddress($da);
            $result=$this->user_model->get_detail($book_id);
            $data=array(
                'addresses'=> $query,
                'book'=> $result,
                'book_num'=>$book_num
                );
            // $da=array(
            //     'user_id'=>$session_id
            //     );
            // $query=$this->user_model->get_myaddress($da);
            // $data=array(
            //     'addresses'=> $query
            //     );
            $this->load->view('goumai',$data);
        }
    }
    // 提交订单
    public function tj_dingdan($book_id){
        $session_id = $this->session->userdata('user_id');
        $this->load->model('user_model');
        $result_row=$this->user_model->get_detail($book_id);
        $book_num=$_GET['book_num'];
        $sy_num=$result_row->book_num-$book_num;
        $price=$_GET['price'];
        $address_id=$_GET['address_id'];
        $da=array(
            'book_num'=>$sy_num
            );
        $result=$this->user_model->updata_book_num($da,$book_id);
        date_default_timezone_set('PRC');
        $time=date("Y-m-d h:i:s",time());
        $data=array(
            'd_user_id'=>$session_id,
            'd_book_id'=>$book_id,
            'd_address_id'=>$address_id,
            'd_time'=>$time,
            'd_num'=>$book_num,
            'd_price'=>$price
            );
        $query=$this->user_model->insert_dingdan($data);
        if($query){
            echo "<script>alert('购买成功');location.href='../index'</script>";
        }
        else{
             echo "<script>alert('购买失败');location.href='../index'</script>";        }

    }
    // 订单页面
    public function dingdan(){
        $session_id = $this->session->userdata('user_id');
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../shu_user/login'</script>";
        }
        else{
            $this->load->model('user_model');
            $result=$this->user_model->get_dingdan($session_id);
            $data=array(
                'dingdans'=>$result
                );
            
             $this->load->view('dingdan',$data);
            

        }
    }
    // 搜索
    public function search(){
        $search=$this->input->post('search');
        $this->load->model('user_model');
        $result=$this->user_model->search($search);
        $data=array(
            'results'=>$result
            );
        $this->load->view('search',$data);
    }
    // 加入购物车
    public function insert_car($book_id){
        $session_id = $this->session->userdata('user_id');
        $book_num=$_POST['book_num'];
        $price=$_POST['price'];
        $this->load->model('user_model');
        $data=array(
            'book_id'=>$book_id,
            'user_id'=>$session_id,
            'book_num'=>$book_num,
            'price'=>$price
            );
        $result=$this->user_model->insert_car($data);
        if($result){
            echo "1";
        }
    }
    // 展示购物车
    public function gouwuche(){
        $session_id = $this->session->userdata('user_id');
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../shu_user/login'</script>";
        }
        else{
            $this->load->model('user_model');
            $result=$this->user_model->get_gouwuche($session_id);
            $data=array(
                'gouwuches'=>$result
                );
            
             $this->load->view('gouwuche',$data);
          


        }
    }

    // 后台管理页面
    public function admin_login(){
        $this->load->view('admin_login');
    }
    public function admin_do_login(){
        $this->load->library('session');
        $user_name=$this->input->post('username');
        $password=$this->input->post('password');
        $data=array(
            'username'=>$user_name,
            'password'=>$password
        );
        $this-> load ->model('user_model');
        $result=$this->user_model->do_login($data);
        $da=array(
            'admin_user_id'=> $result->user_id,
            'admin_user_name'=>$result->username
            );
        $this->session->set_userdata($da);
        if($result->role==2){
            echo "<script>alert('登录成功');location.href='../shu_user/admin_index'</script>";
        }
        else{
            echo "<script>alert('账号密码填写错误');location.href='../shu_user/admin_login'</script>";
        }
    }
    // 后台首页
    public function admin_index(){
        $session_id = $this->session->userdata('admin_user_id');
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../shu_user/admin_login'</script>";
        }   
        else{
            $this-> load ->model('user_model');
            $count=$this->user_model->admin_get_user_count();
            $count1=$this->user_model->admin_get_book_count();
            $count2=$this->user_model->admin_get_dingdan_count();
            $count3=$this->user_model->admin_get_chushou_count();
            $data=array(
                'person_count'=>$count,
                'book_count'=>$count1,
                'dingdan_count'=>$count2,
                'chushou_count'=>$count3
                );
             $this->load->view('admin_index',$data);
        }
    }
    // 退出账号
    public function admin_zhuxiao(){
        $this->session->sess_destroy();
        echo "<script>alert('退出成功');location.href='../shu_user/admin_login'</script>";
    }
    // 用户信息展示
    public function admin_person(){
        $session_id = $this->session->userdata('admin_user_id');
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../shu_user/admin_login'</script>";
        }   
        else{
            $this-> load ->model('user_model');
            $result=$this->user_model->admin_get_users();
            $data=array(
                'users'=>$result
                );
            $this->load->view('admin_person',$data);
        }
    }
    // 订单信息
     public function admin_dingdan(){
        $session_id = $this->session->userdata('admin_user_id');
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../shu_user/admin_login'</script>";
        }   
        else{
            $this-> load ->model('user_model');
            $result=$this->user_model->admin_get_dingdans();
            $data=array(
                'dingdans'=>$result
                );
            $this->load->view('admin_dingdan',$data);
        }
    }
    // 书籍信息
    public function admin_book(){
        $session_id = $this->session->userdata('admin_user_id');
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../shu_user/admin_login'</script>";
        }   
        else{
            $this-> load ->model('user_model');
            $result=$this->user_model->admin_get_books();
            $data=array(
                'books'=>$result
                );
            $this->load->view('admin_book',$data);
        }
    }
    // 添加书籍
    public function admin_form(){
        $session_id = $this->session->userdata('admin_user_id');
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../shu_user/admin_login'</script>";
        }else{
            
                $this->load->view('admin_form');
            
        } 
    }
    public function admin_xiugai_form($book_id){
        $session_id = $this->session->userdata('admin_user_id');
        if(!$session_id){
            echo "<script>alert('请先登录');location.href='../shu_user/admin_login'</script>";
        }else{
            if($book_id){
                $this-> load ->model('user_model');
                $result=$this->user_model->admin_get_book($book_id);
                $data=array(
                    'books'=>$result
                    );
                $this->load->view('xg_admin_form',$data);
            }
            else{
                $this->load->view('admin_form');
            }
        } 
    }

    public function admin_insert_book(){
        $this-> load ->model('user_model');
        $book_name=$this->input->post('book_name');
        $book_anthor=$this->input->post('book_anthor');
        $book_chubanshe=$this->input->post('book_chubanshe');
        $book_time=$this->input->post('book_time');
        $book_price=$this->input->post('book_price');
        $book_zs=$this->input->post('book_zs');
        $book_num=$this->input->post('book_num');
        $config['upload_path'] = './assets/upload/';   //注意：此路劲是相对于CI框架中的根目录下的目录
        $config['allowed_types'] = 'gif|jpg|png';    //设置上传的图片格式
        $config['max_size'] = '5000';              //设置上传图片的文件最大值
        $config['max_width']  = '2000';            //设置图片的最大宽度
        $config['max_height']  = '2000';
        $this->load->library('upload', $config);   //加载CI中的图片上传类，并递交设置的各参数值
        if($this->upload->do_upload()){
             $arr = $this->upload->data();
             $book_img="assets/upload/".$arr['orig_name'];
         } 
        $book_fenlei=$_POST['book_fenlei'];
        $book_des=$_POST['book_des'];
        $data=array(
            'book_name'=>$book_name,
            'book_anthor'=>$book_anthor,
            'book_chubanshe'=>$book_chubanshe,
            'book_time'=>$book_time,
            'book_price'=>$book_price,
            'book_zs'=>$book_zs,
            'book_num'=>$book_num,
            'book_img'=>$book_img,
            'book_fenlei'=>$book_fenlei,
            'book_des'=>$book_des,
            'book_pingfen'=>6
            );
        $result=$this->user_model->admin_insert_book($data);
        if($result){
            echo "<script>alert('添加成功');location.href='../shu_user/admin_form'</script>";
        }
        else{
            echo "2";
        }
    }
    // 修改书籍
    public function admin_xiugai_book($book_id){
        $this-> load ->model('user_model');
        $book_name=$this->input->post('book_name');
        $book_anthor=$this->input->post('book_anthor');
        $book_chubanshe=$this->input->post('book_chubanshe');
        $book_time=$this->input->post('book_time');
        $book_price=$this->input->post('book_price');
        $book_zs=$this->input->post('book_zs');
        $book_num=$this->input->post('book_num');
        $config['upload_path'] = './assets/upload/';   //注意：此路劲是相对于CI框架中的根目录下的目录
        $config['allowed_types'] = 'gif|jpg|png';    //设置上传的图片格式
        $config['max_size'] = '5000';              //设置上传图片的文件最大值
        $config['max_width']  = '2000';            //设置图片的最大宽度
        $config['max_height']  = '2000';
        $this->load->library('upload', $config);   //加载CI中的图片上传类，并递交设置的各参数值
        if($this->upload->do_upload()){
             $arr = $this->upload->data();
             $book_img="assets/upload/".$arr['orig_name'];
         }   
        $book_fenlei=$_POST['book_fenlei'];
        $book_des=$_POST['book_des'];
        $data=array(
            'book_name'=>$book_name,
            'book_anthor'=>$book_anthor,
            'book_chubanshe'=>$book_chubanshe,
            'book_time'=>$book_time,
            'book_price'=>$book_price,
            'book_zs'=>$book_zs,
            'book_num'=>$book_num,
            'book_fenlei'=>$book_fenlei,
            'book_des'=>$book_des
            );
        $result=$this->user_model->admin_xiugai_book($data,$book_id);
        if($result){
            echo "<script>alert('修改成功');location.href='../admin_book'</script>";
        }
        else{
            echo "2";
        }
    }
    //删除书籍
    public function del_book($book_id){
        $this-> load ->model('user_model');
        $result=$this->user_model->admin_del_book($book_id);
        if ($result) {
            echo "<script>alert('删除成功');location.href='../admin_book'</script>";
        }
    }
    // 上传图片
     public function do_upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 100;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }
    // 测试
    public function text(){
        $this->load->view('text');
    }
    public function addSubmit(){
        $config['upload_path'] = './assets/upload/';   //注意：此路劲是相对于CI框架中的根目录下的目录
       $config['allowed_types'] = 'gif|jpg|png';    //设置上传的图片格式
       $config['max_size'] = '5000';              //设置上传图片的文件最大值
       $config['max_width']  = '2000';            //设置图片的最大宽度
       $config['max_height']  = '2000';
       $this->load->library('upload', $config);   //加载CI中的图片上传类，并递交设置的各参数值
       if ($this->upload->do_upload())
      {   
            $arr = $this->upload->data();     //此函数是返回图片上传成功后的信息
            $data['book_img']="assets/upload/".$arr['orig_name'];
            if($this->db->insert("book",$data)){
                  echo "1";
            }else{
                  echo "2";
            }
       }
    }

}