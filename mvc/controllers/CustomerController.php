<?php 

class CustomerController extends Connect{
	private $customerModel;
	
	function __construct(){
		$this->call_models('CustomerModel');
		$this->customerModel=new CustomerModel();
	}

   // TODO: ĐỔI MẬT KHẨU KHÁCH HÀNG ( ÂN )
    function editpass(){
        if(isset($_POST['editpass'])){
            if($_POST['idcus']==$_SESSION['id_khachhang']){
                $data['customer']=$this->customerModel->findByid($_POST['idcus']);
                $datapass=$data['customer']['password'];
                if($datapass==$_POST['matkhaucu']){
                    if($_POST['matkhaumoi']==$_POST['xacnhanmatkhau']){
                        $cus=[
                            'password'=>$_POST['matkhaumoi']
                           
                        ];
                        $this->customerModel->update($_POST['idcus'],$cus);
                        $data['thongbao']="Bạn cập nhập thông tin thành công  ";
                      
                        
                    }else{
                        $data['thongbao']="Mật khẩu xác nhận chưa chính xác !";
                       
                    }
                    $data['customerfromhoadon']=$this->customerModel->findByid($_POST['idcus']);
                    $this->call_views('layout/bill/bill',$data);
                }
                else{
                    $data['thongbao']="Bạn nhập sai mật khẩu !";
                    $data['customerfromhoadon']=$this->customerModel->findByid($_POST['idcus']);
                     $this->call_views('layout/bill/bill',$data);
                }
            }
        }
    }
    // TODO: ĐỔI THÔNG TIN KHÁCH HÀNG ( ÂN )
	function edit(){
       
				if(isset($_POST['id'])){
                    $id=$_POST['id'];
                    $data['customer']=$this->customerModel->findByid($id);
                    $datapass=$data['customer']['password'];
					if($_POST['Pass_Kh']==$datapass){
                        $img = $_FILES['img']['name']; //tên hình ảnh
                  
					if($img!=null){
                        $tmp_name = $_FILES['img']['tmp_name'];  //đường dẫn
                        move_uploaded_file($tmp_name, './public/layout/img/cus/' . $img);
						$cus=[
							'image'=>$img,
						];
						$this->customerModel->update($id,$cus);
					}
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
					$date = date("Y-m-d H:i:s");
					$cus=[
						'email'=>$_POST['email_kh'],
						'sodienthoai'=>$_POST['sdt_kh'],
						'diachi'=>$_POST['diachi_kh'],
                        'ho'=>$_POST['ho_kh'],
						'ten'=>$_POST['ten_kh'],
						'ngay_capnhap'=>$date
					];
					$this->customerModel->update($id,$cus);
                    $data['thongbao']="Bạn cập nhập thông tin thành công  ";
                    $data['customerfromhoadon']=$this->customerModel->findByid($id);
                    
                    
				$this->call_views('layout/bill/bill',$data);
                    }
                    else{
                        $data['thongbao']="Bạn nhập sai mật khẩu !";
                        $data['customerfromhoadon']=$this->customerModel->findByid($id);
                        
                        
                    $this->call_views('layout/bill/bill',$data);
                    }
					
				}
		

            }
        
	
}
?>
