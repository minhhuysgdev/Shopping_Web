<?php
class CommentModel extends BaseModel
{

    const TABLE = 'binhluansanpham';
   const TABLE2='chitietbinhluan';
    public function getAll()
    {
        return $this->all(self::TABLE);
    }
    public function addProductComment($data = [])
    {
        $this->create(self::TABLE, $data);
    }
    public function getkhfromchitietcoment($idbinhluan,$idkh){
      return   $this->getkhfromdetail(self::TABLE2,$idbinhluan,$idkh);
    }

    public function storecommentkike($data=[]){
        $this->create(self::TABLE2, $data);
    }
    public function getbinhluansanpham($id){
        return $this->getallcomment(self::TABLE,$id);
    }
    public function updatebinhluansanpham($id,$like){
        $this->updatebinhluan(self::TABLE,$id,$like);
    }
    public function deletechitietbinhluan($id){
        $this->delete(self::TABLE2,$id);
    }
   public function soluotlike(){
       return $this->countlike(self::TABLE2);
   }
   public function tinhphantramdanhgia(){
       return $this->phantramdanhgia(self::TABLE);
   }
   public function soluongcomment(){
       return $this->comment(self::TABLE);
      
   }
}
