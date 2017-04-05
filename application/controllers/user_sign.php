
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Content-Type: text/html; charset=utf-8");
class User_sign extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view("index");
    }
    public function issue(){
        $this->load->view("ppb-issue");
    }
    public function added(){
        $this->load->view("value-added services");
    }
    public function sign_show(){
        $this->load->view("sign");
    }
    public function sign(){
        $user_name=$this->input->post('username');
        $user_tel=$this->input->post('usertel');
        $user_email=$this->input->post('email');
        $company_name=$this->input->post('company_name');
        $company_address=$this->input->post('company_address');
        $ali_name=$this->input->post('ali_name');
        $alipay_name=$this->input->post('alipay_name');
        $company_freld=$this->input->post('company_freld');
        date_default_timezone_set('PRC');
        $data=date("Y-m-d h:i:s",time());
        if(!$user_name||!$user_tel||!$user_email||!$company_name||!$ali_name||!$alipay_name||!$company_freld||!$company_address){
            // $user = array('err_msg'=>'信息不能为空');
            // $this->load->view('sign',$user);
            echo '<script> alert("填写信息不能为空");location.href="../user_sign/sign_show";</script>';
            // redirect("index.php/user_sign/sign_show");
        }
        else{
            $data=array(
                "user_name"=>$user_name,
                "user_tel"=>$user_tel,
                "user_email"=>$user_email,
                "time"=>$data,
                "company_name"=>$company_name,
                "company_address"=>$company_address,
                "ali_name"=>$ali_name,
                "alipay_name"=>$alipay_name,
                "company_freld"=>$company_freld
            );

        $this-> load ->model('sign_model');
        $result=$this->sign_model->inset_sign($data);
        if($result){
            echo '<script> alert("报名成功");location.href="../user_sign/pay";</script> ';
           //redirect("index.php/user_sign/pay");

        }
        else{
             echo '<script> alert("报名失败");location.href="../user_sign/sign_show";</script>';
             //redirect("index.php/user_sign/sign_show");
        }
    }
    }
    public function msg(){
        $this-> load ->model('sign_model');
        $query=$this->sign_model->get_name();
        $data = array(
            'users' => $query
        );
        $this->load->view('admin-table',$data);
    }
    public function deluser($id){
        $this-> load ->model('sign_model');
        $result=$this->sign_model->del($id);
        redirect('index.php/user_sign/msg');
    }
    public function pay(){
        $this->load ->view("pay");
    }
    //public function pay_fin(){
        //$data=array(
          //  "pay"=>"已支付"
        //);
       // $this-> load ->model('sign_model');
       // $result=$this->sign_model->pay($data);
       // if(result){
         //   redirect("index.php/user_sign/index");
       // }
    //}
    public function inset(){
        $name=$this->input->post('username');
        $tel=$this->input->post('usertel');
        $position=$this->input->post('position');
        $city=$this->input->post('city');
        $company=$this->input->post('company');
        date_default_timezone_set('PRC');
        $time=date("Y-m-d h:i:s",time());
        $data=array(
                "username"=>$name,
                "tel"=>$tel,
                "position"=>$position,
                "city"=>$city,
                "time"=>$time,
                "company"=>$company
            );
        $this-> load ->model('sign_model');
        $result=$this->sign_model->inset_sign($data);
        if($result){
            echo '<script> alert("报名成功");location.href="../user_sign/index";</script> ';
        }
    }
    // public function inset(){
    //     $name=$_POST['name'];
    //     $tel=$_POST['usertel'];
    //     $position=$_POST['position'];
    //     $city=$_POST['city'];
    //     date_default_timezone_set('PRC');
    //     $time=date("Y-m-d h:i:s",time());
    //     $data=array(
    //             "username"=>$name,
    //             "tel"=>$tel,
    //             "position"=>$position,
    //             "city"=>$city,
    //             "time"=>$time
    //         );
    //     $this-> load ->model('sign_model');
    //     $result=$this->sign_model->inset_sign($data);
    //     if($result){
    //         echo '1';
    //     }
    //     else{
    //         echo '0';
    //     }
    // }
}
