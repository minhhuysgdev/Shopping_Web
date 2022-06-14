<?php 

class BillController extends Connect{
	private $billModel;
	private $customerModel;
	private $cartModel;
	function __construct(){
		$this->call_models('BillModel');
		$this->billModel=new BillModel;
		$this->call_models('CustomerModel');
		$this->customerModel=new CustomerModel;
		$this->call_models('CartModel');
		$this->cartModel=new CartModel;
	}
	// TODO: CHI TIẾT ĐƠN HÀNG CỦA KHÁCH HÀNG ( ÂN )

	function index(){
			$data['kh']=$this->customerModel->findByid($_SESSION['id_khachhang']);
			$data['hoadon']=$this->billModel->findByIdDate($_SESSION['id_khachhang']);
			if(!empty($data['kh']) && !empty($data['hoadon'])){
				
				foreach($data['hoadon'] as $value){
					
					if($value['id_khachhang'] == $_SESSION['id_khachhang']){
						$data['customerfromhoadon']=$data['kh'];
						
						$data['banghoadon']=$data['hoadon'];
						$this->call_views('layout/bill/bill',$data);
					}
					else{
						$data['customerfromhoadon']=$data['kh'];
						$data['thongbao']=" ban chua thanh toan ";
						$this->call_views('layout/bill/bill',$data);
					}
				}
			}
			else if(!empty($data['kh']) && empty($data['hoadon'])){
						$data['thongbao']=" Bạn chưa có đơn hàng nào ! ";
						$data['customerfromhoadon']=$data['kh'];
						$this->call_views('layout/bill/bill',$data);
			}
			else{
				header("location:".URL.'layout/index');
			}
	
	
}
		// TODO: THÊM THÔNG TIN SẢN PHẨM VÀ KHÁCH  VÀO HÓA ĐƠN  ( ÂN )

	function store(){
		if(!isset($_SESSION['name'])){
			unset($_SESSION['cart']);
			header("location:".URL.'layout/index');
		}
		else{
			$customer =$this->customerModel->findByid($_SESSION['id_khachhang']);
			
			$cartData = $this->cartModel->getCartByCustomerId($customer['id']);
			$total = 30000;
			$id_kh=$customer['id'];
			
			foreach ($cartData as  $value) {
				$total += $value["giasp"] * $value["soluong"];
			}
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$newdate = date("Y-m-d H:i:s");
		
			if(isset($_POST['placeoder'])){
				$newhoadon=[
					'ngayhoadon'=>$newdate,
					'id_khachhang'=>$customer['id'],
					'sodienthoai'=>$_POST['customer_phone'],
					'trigia'=>$total,
					'diachi'=>$_POST['diachi'],
					'note'=>$_POST['note']
				];
				$this->billModel->store($newhoadon);
				$sohoadon=$this->billModel->getBillByDate($newdate);
				
				foreach($cartData as $key=> $value){
					$newhoadondetail=[
						'sohoadon'=>$sohoadon['0']['sohoadon'],
						'id_sanpham'=>$value['id_sp'],
						'tensanpham'=>$value['tensp'],
						'anhsanpham'=>$value['anhsp'],
						'giasanpham'=>$value['giasp'],
						'soluongdat'=>$value['soluong']
					];
					$test=$this->billModel->storedetail('chitiethoadon',$newhoadondetail);
				}
				$this->cartModel->deleteAllfromIdCus($id_kh);
				unset($_SESSION['cart']);
				header("location:".URL.'layout/index');
		}
		
		}
	}

	// TODO: TẤT CẢ CÁC ĐƠN HÀNG PHẦN ADMIN  ( ÂN )

	function allbill($trang){
		

		if(isset($_SESSION['username'])){
			
				$data['hoadon']=$this->billModel->getallHD();
				$data['allhoadon'] = $this->billModel->getAll_bill($trang);
				$data['main'] = 'orders/bill';
				$this->call_views('admin/index', $data);
		}
	}
	
		// TODO: XÓA HÓA ĐƠN  ( ÂN )

	function deletehoadon($shd){
		
		$this->billModel->deleteDetailBillSHD($shd);
		$this->billModel->deleteBillSHD($shd);
		header("location:".URL.'bill/allbill/1');
	}

	
		// TODO: ADMIN CẬP NHẬP TÌNH TRẠNG ĐƠN HÀNG ( ÂN )

	function updatetinhtrang(){
		if(isset($_POST['tinhtrang'])){
			$tinhtrang = $_POST['datatinhtrang'];
			$shd= $_POST['sohoadontinhtrang'];
			$this->billModel->updateStatus($shd,$tinhtrang);
			
			header("location:".URL.'bill/billdetail/'.$shd);
		}
		else{
			echo "Không cập nhập được ";
		}
	}
		// TODO: ADMIN QUẢN LÝ  CHI TIẾT TỪNG HÓA ĐƠN CỦA KHÁCH HÀNG ( ÂN )

	function billdetail($sohoadon){
		if(isset($_SESSION['username'])){
		
			
					$shd=$sohoadon;
					if(isset($sohoadon)){

						$data['chitiethoadon']=$this->billModel->finddetailBySHD('khachhang','hoadon','chitiethoadon',$shd);
						$data['main'] = 'orders/bill_detail';
						$this->call_views('admin/index', $data);
					}
					else{
						$data['thongbao']="Bạn chưa có đơn hàng";
						$this->call_views('admin/index', $data);
					}
		

		}

		
		
	}
		// TODO: KHÁCH HÀNG XÓA HÓA ĐƠN -> ĐIỀU KIỆN CHECK Ở PHẦN LAYOUT/BILL ( ÂN )

		function deletehoadonFromkh($shd){
		
			if(isset($_SESSION['name'])){
				if(isset($_POST['data'])){
					$this->billModel->deleteDetailBillSHD($shd);
					$this->billModel->deleteBillSHD($shd);
					
				}
			}
			else{
				header("location:".URL.'logincustomer');
			}
		}

}
?>
