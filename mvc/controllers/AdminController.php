<?php
class AdminController extends Connect
{
	private $userModel;

	function __construct()
	{
		$this->call_models('UserModel');
		$this->userModel = new UserModel();
		$this->call_models('ProductModel');
		$this->ProductModel = new ProductModel();
	}

		// TODO: ĐIỀU HƯỚNG VÀO TRANG CHỦ ADMIN ( ÂN )

		
	function index()
	{
		if (!isset($_SESSION['username'])) {
			Header("Location:" . URL . "login");
		} else {
			$data['user'] = $this->userModel->findByUsername($_SESSION['username']);
			if ($data['user']['level'] == 1) {
				$data['main'] = 'main/wellcome';
				$this->call_views('admin/index', $data);
			} else {
				$data['main'] = 'main/wellcome';
				$this->call_views('admin/index', $data);
			}
		}
		
	}
		// TODO: THÊM ADMIN ( ÂN )

	function store()
	{
		if (isset($_SESSION['username'])) {
			$data['user'] = $this->userModel->findByUsername($_SESSION['username']);
			if ($data['user']['level'] == 1) {
				$data['main'] = 'user/add';
				$this->call_views('admin/index', $data);
			} else {
				$data['main'] = 'main/main';
				$this->call_views('admin/index', $data);
			}
		}
	}
		// TODO: SỬA ADMIN ( ÂN )

	function edit()
	{
		if (isset($_SESSION['username'])) {
			$data['user'] = $this->userModel->findByUsername($_SESSION['username']);
			if ($data['user']['level'] == 1) {
				$data['main'] = 'user/edit';
				$this->call_views('admin/index', $data);
			} else {
				$data['main'] = 'main/main';
				$this->call_views('admin/index', $data);
			}
		}
	}
}
