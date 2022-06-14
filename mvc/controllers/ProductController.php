
<?php

	class ProductController extends Connect
	{
		private $productModel;
		function __construct()
		{
			$this->call_models('ProductModel');
			$this->productModel = new ProductModel();
		}
		    // TODO: HIỂN THỊ SẢN PHẨM PHẦN ADMIN   ( ÂN )

		function index($trang)
		{
			$data['productmen'] = $this->productModel->getAll();
			$data['productwomen'] = $this->productModel->getAll();
			$data['product'] = $this->productModel->getAll();
			$data['producttrang'] = $this->productModel->getAll_product($trang);
			$data['trang']=$trang;
			
			$data['main'] = 'product/main';
			$this->call_views('admin/index', $data);
		}
		function top3Mentren(){
			$data['top3productmen']=$this->productModel->top3Men();
			$data['main'] = 'product/main';
			$this->call_views('layout/index', $data);
		}
		    // TODO: THÊM SẢN PHẨM  ( ÂN )

		function store()
		{
			if (isset($_POST['addProduct'])) {
				$img1 = $_FILES['img1']['name']; //tên hình ảnh
				$img2 = $_FILES['img2']['name']; //tên hình ảnh
				
				if ($img1 != null || $img2!=null)  {
					  	$tmp_name1 = $_FILES['img1']['tmp_name'];  //đường dẫn
                		move_uploaded_file($tmp_name1, './public/layout/img/product/' . $img1);
						$tmp_name2 = $_FILES['img2']['tmp_name'];  //đường dẫn
                		move_uploaded_file($tmp_name2, './public/layout/img/product/' . $img2);
						$product = [
						'tensanpham' => $_POST['tensanpham'],
						'image1' => $img1,
						'image2' => $img2,
						'gia' => $_POST['gia'],
						'soluong' => $_POST['soluong'],
						'xuatxu' => $_POST['xuatxu'],
						'cate_ID' => $_POST['cate_ID'],
						'mieutasanpham' => $_POST['mieutasanpham'],
						'thongtinsanpham' => $_POST['thongtinsanpham'],
						'cannang' => $_POST['cannang']
					];
					$this->productModel->store($product);
					$data['product'] = $this->productModel->getAll();
					$data['producttrang'] = $this->productModel->getAll_product(1);
					$data['trang']=1;
					$data['main'] = 'product/main';
					$this->call_views('admin/index', $data);
				}
			}
			$data['main'] = 'product/add';
			$this->call_views('admin/index', $data);
		}
		    // TODO: SỬA SẢN PHẨM  ( ÂN )

		function edit($id,$trang)
		{
			if (isset($_POST['editProduct'])) {
				$img1 = $_FILES['img1']['name']; //tên hình ảnh
				$img2 = $_FILES['img2']['name']; //tên hình ảnh
				if ($img1 != null && $img2 != null) {
					$tmp_name1 = $_FILES['img1']['tmp_name'];  //đường dẫn
					move_uploaded_file($tmp_name1, './public/layout/img/product/' . $img1);
					$tmp_name2 = $_FILES['img2']['tmp_name'];  //đường dẫn
					move_uploaded_file($tmp_name2, './public/layout/img/product/' . $img2);
					$product = [
						'image1' =>$img1,
						'image2' =>$img2
					];
					$this->productModel->update($id, $product);
				}
				else if($img1 != null && $img2 == null){
					$tmp_name1 = $_FILES['img1']['tmp_name'];  //đường dẫn
					move_uploaded_file($tmp_name1, './public/layout/img/product/' . $img1);
					$product = [
						'image1' =>$img1
					];
					$this->productModel->update($id, $product);
				}
				else if($img2 != null && $img1 == null){
				
					$tmp_name2 = $_FILES['img2']['tmp_name'];  //đường dẫn
					move_uploaded_file($tmp_name2, './public/layout/img/product/' . $img2);
					$product = [
						'image2' =>$img2
					];
					
					$this->productModel->update($id, $product);
				}
				$product = [
					'tensanpham' => $_POST['tensanpham'],
					'cate_ID' => $_POST['cate_ID'],
					'thuonghieu' => $_POST['thuonghieu'],	
					'gia' => $_POST['gia'],
					'soluong' => $_POST['soluong'],
					'xuatxu' => $_POST['xuatxu'],
				
					'mieutasanpham' => $_POST['mieutasanpham'],
					'thongtinsanpham' => $_POST['thongtinsanpham'],
					'cannang' => $_POST['cannang']
				];
				$this->productModel->update($id, $product);
				$data['product'] = $this->productModel->getAll();
				$data['producttrang'] = $this->productModel->getAll_product($trang);
				$data['trang']=$trang;
				$data['main'] = 'product/main';
				$this->call_views('admin/index', $data);
			}
			$data['product'] = $this->productModel->findByid($id);
			$data['producttrang'] = $this->productModel->getAll_product($trang);
				$data['trang']=$trang;
			$data['main'] = 'product/edit';
			$this->call_views('admin/index', $data);
		}
		    // TODO: XÓA SẢN PHẨM   ( ÂN )

		function delete($id,$trang)
		{
			$this->productModel->destroy($id);
			$data['product'] = $this->productModel->getAll();
			$data['producttrang'] = $this->productModel->getAll_product($trang);
			$data['trang']=$trang;
			$data['main'] = 'product/main';
			$this->call_views('admin/index', $data);
		}
	}
	?>

