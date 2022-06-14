<?php
class ChartController extends Connect
{
	private $userModel;
	private $productModel;
	private $billModel;
	private $customerModel;
	private $commentModel;
	function __construct()
	{
		$this->call_models('UserModel');
		$this->userModel = new UserModel();
		$this->call_models('ProductModel');
		$this->productModel = new ProductModel();
		$this->call_models('BillModel');
		$this->billModel = new BillModel();
		$this->call_models('CustomerModel');
		$this->customerModel = new CustomerModel();
		$this->call_models('CommentModel');
		$this->commentModel = new CommentModel();
	}
	// TODO: THÔNG TIN THỐNG KÊ ADMIN ( ÂN )
	function index()
	{
		if (!isset($_SESSION['username'])) {
			Header("Location:" . URL . "login");
		} else if (isset($_SESSION['username'])) {
			$data['user'] = $this->userModel->findByUsername($_SESSION['username']);
			if ($data['user']['level'] == 1) {
				$thismonth = date("m");
				$data['main'] = 'chart/main';
				$data['countuser'] = $this->userModel->countAllUser();
				$data['countbill'] = $this->billModel->countBill();
				$data['countsales'] = $this->billModel->countSales();
				$data['phantramdanhgia'] = $this->commentModel->tinhphantramdanhgia();
				$data['comment'] = $this->commentModel->soluongcomment();
				$data['allcustomer'] = $this->customerModel->countcustomer();
				$data['sumbill'] = $this->billModel->sumbill();
				$data['countProduct'] = $this->productModel->countAllProduct();
				$data['getalluser'] = $this->userModel->getAll();
				$data['chart'] = $this->billModel->chartForBill($thismonth);
				$data['likes'] = $this->commentModel->soluotlike();
				$this->call_views('admin/index', $data);
			} else {
				$data['main'] = 'main/main';
				$this->call_views('admin/index', $data);
			}
		}
	}
}
