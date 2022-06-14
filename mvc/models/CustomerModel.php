<?php 
class CustomerModel extends BaseModel{
	const TABLE="khachhang";
	public function getAll($select=['*'],$orderBy=[]){
        return $this->all(self::TABLE,$select,$orderBy);
    }
	public function getkhachhangtheoten($idkh){
		return $this->getallkhfromten(self::TABLE,$idkh);
	}
	public function findByid($id){
		return $this->find(self::TABLE,$id);
	}
    public function findByEmail($email){
        return $this->findEmail(self::TABLE,$email);
    }
    public function findByName($name){
        return $this->findName(self::TABLE,$name);
    }
	
	public function login($username,$password){
	return $this->loginCustomer(self::TABLE,$username,$password);
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
	public function countcustomer(){
		$row= $this->countcus(self::TABLE);
		return $row;
		}

}
?>