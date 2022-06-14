<?php
class loginController extends connect{
    private $userModel;
    function __construct()
    {
        $this->call_models('UserModel');
        $this->userModel=new UserModel;
    }
    
    // TODO: LOGIN CHO USER  ( ÂN )
    function index(){
        if(isset($_POST['login'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $data['user']=$this->userModel->login($username,$password);
            if(empty($data['user'])){
               $_SESSION['thongbao']='vui lòng nhập lại ';
            }
            else{
                header("Location:".URL."admin");
                 $_SESSION['username']=$_POST['username'];
                 $_SESSION['image']=$data['user']['image'];	
                exit;
            }
        }
        else if(!isset($_SESSION['username'])){
            $data=[];
            $this->call_views('layout/login/login',$data);
        }
    
       
    }
    function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['image']);
        header("Location:".URL);
    }
}
?>