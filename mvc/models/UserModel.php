<?php 
class UserModel extends BaseModel{
	const TABLE="user";
	public function getAll($select=['*'],$orderBy=[]){
	$users=$this->all(self::TABLE,$select,$orderBy);
	return $users;
	}
	public function findByid($id){
		return $this->find(self::TABLE,$id);
	}
	public function findByUsername($username){
		return $this->findEmail(self::TABLE,$username);
	}
	public function getAll_user($trang){
		$users=$this->alluser(self::TABLE,$trang);
		
		return $users;
	}
	public function login($username,$password){
	return $this->loginUser(self::TABLE,$username,$password);
	}
	public function store($data=[]){
	$this->create(self::TABLE,$data);
	}
	public function update($id,$data){
		$this->updateNew(self::TABLE,$id,$data);
	}
	public function destroy($id){
	$this->delete(self::TABLE,$id);
	}
	public function countAllUser(){
	$row= $this->count(self::TABLE);
	
	return $row;
	}
	

}
?>