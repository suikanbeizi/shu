<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Content-Type: text/html; charset=utf-8");
class Shu_user extends CI_Controller {
	public function __construct(){
        parent::__construct();
    }
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
    	// redirect('index.php/shu_user/login');
    	echo "success";
	    }
	    else{
	    	echo "error";
	    }
	    }
    

}