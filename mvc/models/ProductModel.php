<?php
class ProductModel extends BaseModel
{
	const TABLE = "sanpham";
	public function getAll($select = ['*'], $orderBy = [])
	{
		$products = $this->all(self::TABLE, $select, $orderBy);
		return $products;
	}
	public function getsplq($cate_id){
		$products = $this->getallsanpham(self::TABLE,$cate_id);
		return $products;
	}
	public function gettrending(){
		$products = $this->trending(self::TABLE);
		return $products;
	}
	public function getAll_product($trang){
		$products=$this->allproduct(self::TABLE,$trang);
		return $products;
	}
	public function getallfromcate($cate,$min=[],$max=[],$brand=[]){
		$products=$this->gettheocate(self::TABLE,$cate,$min,$max,$brand);
		return $products;
	}
	public function getspFrombrand($cate){
		$products = $this->allbrand(self::TABLE,$cate);
		return $products;
	}
	public function top3Men($select = ['sanpham.tensanpham'], $orderBy = ['sanpham.id'], $where = ['sanpham.cate_ID=1'])
	{

		$products = $this->top3(self::TABLE, $select, $orderBy, $where);

		return $products;
	}
	public function sales($cate){
		return $this->sale(self::TABLE,$cate);
	}
	public function findByid($id)
	{
		return $this->find(self::TABLE, $id);
	}
	public function store($data = [])
	{
		$this->create(self::TABLE, $data);
	}
	public function update($id, $data)
	{
		$this->updateNew(self::TABLE, $id, $data);
	}
	public function updateSoluong($id,$sl){
		$this->updateSl(self::TABLE,$id,$sl);
	}
	public function destroy($id)
	{
		$this->delete(self::TABLE, $id);
	}
public function getslsanpham($tensp){
	return $this->getslsp(self::TABLE,$tensp);
}
	
	public function countAllProduct(){
		return $this->countsanpham(self::TABLE);
	}
	public function minmaxgia($cate_id){
return $this->minmax(self::TABLE,$cate_id);
	}
	public function searchByName($name_search)
	{
		return $this->search(self::TABLE,$name_search);
	}
}
