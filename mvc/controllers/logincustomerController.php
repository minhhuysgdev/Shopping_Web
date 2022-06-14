<?php
class logincustomerController extends connect{
    private $customerModel;
    function __construct()
    {
        $this->call_models('CustomerModel');
        $this->customerModel=new CustomerModel;
    }
        // TODO: ĐĂNG NHẬP CHO KHÁCH HÀNG ( ÂN )

    function index(){
        if(isset($_POST['logincus'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $data['customer']=$this->customerModel->login($email,$password);
            if(empty($data['customer'])||($email=='') ||($password=='') ){
               $_SESSION['thongbao']='vui lòng nhập lại email and password ';
            }
            else{
                header("Location:".URL);
                $_SESSION['id_khachhang']=$data['customer']['id'];
                $_SESSION['name']=$data['customer']['ten'];
              
            }
           
        }
        if(!isset($_SESSION['name'])){
            $data=[];
            $this->call_views('layout/login/customerlogin',$data);
        }
       
        else{
            Header("Location:".URL);
        }
    }
        // TODO: ĐĂNG KÍ TÀI KHOẢNG CHO KHÁCH HÀNG  ( ÂN )

    function register(){
		if(isset($_POST['register'])){
			$newcustomer=[
                'email'=>$_POST['mail'],
				'password'=>$_POST['pass'],
				'sodienthoai'=>$_POST['phone'],
				'diachi'=>$_POST['adress'],
                'ten'=>$_POST['name'],
				'ho'=>$_POST['surname'],
				'ngay_themvao'=>$_POST['dateadd'],

			];
			$this->customerModel->store($newcustomer);
            header("Location:".URL.'logincustomer');

		}
        $data=[];
		$this->call_views('layout/login/customerregister',$data);

        
	}
        // TODO: KHÁCH HÀNG ĐĂNG XUẤT   ( ÂN )

    function logout(){
        if(isset($_SESSION['id_khachhang'])){
            unset($_SESSION['id_khachhang']);
        }
        if(isset($_SESSION['name'])){
            unset($_SESSION['name']);
        }
        if(isset($_SESSION['cart'])){
            unset($_SESSION['cart']);
        }
    
    }
   
}
?>
