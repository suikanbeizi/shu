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
        	'time'=>$time
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
        if($result){
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
        $da=array(
            'book_num'=>$sy_num
            );
        $result=$this->user_model->updata_book_num($da,$book_id);
        if($result){
            echo "1";
        }
        else{
            echo "2";
        }

    }
}