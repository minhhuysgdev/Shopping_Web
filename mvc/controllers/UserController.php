<?php 

class UserController extends Connect{
	private $userModel;
	
	function __construct(){
		$this->call_models('UserModel');
		$this->userModel=new UserModel();
	}
	    // TODO: HIỂN THỊ USER  ( ÂN )

	function index($trang){
		if(isset($_SESSION['username'])){
			$data['userlogin']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['userlogin']['level']==1){
				$data['user']=$this->userModel->getAll();
				$data['alluser']=$this->userModel->getAll_user($trang);
				$data['trang']=$trang;
				$data['main']='user/main';
				$this->call_views('admin/index',$data);
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		}
	
	}
	    // TODO: THÊM USER  ( ÂN )

	function store(){
		if(isset($_SESSION['username'])){
			$data['userlogin']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['userlogin']['level']==1){
					
				if(isset($_POST['addUser'])){
					$img = $_FILES['img']['name']; //tên hình ảnh
					if($img!=null){
						$tmp_name = $_FILES['img']['tmp_name'];  //đường dẫn
                		move_uploaded_file($tmp_name, './public/layout/img/user/' . $img);
					
						$user=[
							'username'=>$_POST['username'],
							'password'=>$_POST['password'],
							'level'=>$_POST['level'],
							'image'=>$img
						];
						$this->userModel->store($user);
						$data['user']=$this->userModel->getAll();
						$data['alluser']=$this->userModel->getAll_user(1);
						$data['trang']=1;
						$data['main']='user/main';
						$this->call_views('admin/index',$data);
					}
				}
				$data['main']='user/add';
				$this->call_views('admin/index',$data);
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		}

	}
	    // TODO: SỬA USER  ( ÂN )

	function edit($id,$trang){
		if(isset($_SESSION['username'])){
			$data['userlogin']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['userlogin']['level']==1){
				if(isset($_POST['editUser'])){
					$img = $_FILES['img']['name']; //tên hình ảnh
					if($img!=null){
						$tmp_name = $_FILES['img']['tmp_name'];  //đường dẫn
                		move_uploaded_file($tmp_name, './public/layout/img/user/' . $img);
						$user=[
							'image'=>$img,
						];
						$this->userModel->update($id,$user);
					}
					$user=[
						'username'=>$_POST['username'],
						'password'=>$_POST['password'],
						'level'=>$_POST['level']
					];
					$this->userModel->update($id,$user);
					$data['alluser']=$this->userModel->getAll_user($trang);
					$data['trang']=$trang;
					$data['user']=$this->userModel->getAll();
					$data['quyen']=$data['userlogin']['level'];
					$data['main']='user/main';
					$this->call_views('admin/index',$data);	
				}
				$data['user']=$this->userModel->findByid($id);
				
				$data['main']='user/edit';
				$this->call_views('admin/index',$data);
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		}

		
	}
	    // TODO: XÓA USER  ( ÂN )

	function delete($id,$trang){


		if(isset($_SESSION['username'])){
			$data['user']=$this->userModel->findByUsername($_SESSION['username']);
			if(	$data['user']['level']==1){
				$this->userModel->destroy($id);
				$data['user']=$this->userModel->getAll();
				$data['alluser']=$this->userModel->getAll_user($trang);
				$data['trang']=$trang;
				$data['main']='user/main';
				$this->call_views('admin/index',$data);
			}
			else {
				$data['main']='main/main';
				$this->call_views('admin/index',$data);
			}

		} 

	
	}
}
?>
