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
        var_dump($result);
        if($result){
        	echo "1";
        }
        else{
        	echo "0";
        }
	}

	public function do_login(){
		$user_name=$this->input->post('username');
    	$password=$this->input->post('password');
    	$data=array(
        	'username'=>$user_name,
        	'password'=>$password
        );
        $this-> load ->model('user_model');
        $result=$this->user_model->do_login($data);
        if($result){
        	echo "111";
        }
        else{
        	echo "<script>alert('账号密码填写错误');location.href='../shu_user/login'</script>";
        }
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
        $this->load->view('shu_detail');
    }
}