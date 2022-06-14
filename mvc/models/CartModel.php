<?php
class CartModel extends BaseModel
{

    const TABLE = 'cart';
    // public function getCart()
    // {
    //     return $this->all(self::TABLE);
    // }

    // public function deleteCart($id)
    // {
    //     $this->delete(self::TABLE, $id);
    // }

    // public function deleteAll($user_id)
    // {
    //     $qr = "delete from cart where cart.user_id = $user_id";
    //     $this->execute($qr);
    // }

    // public function addToCart($data = [])
    // {
    //     $this->create(self::TABLE, $data);
    // }

    // public function editCart($id, $data = [])
    // {
    //     $this->updatee(self::TABLE, $id, $data);
    // }

    // public function getCartById($id)
    // {
    //     $columnsNameId = "cart_id";
    //     return $this->getItemById(self::TABLE, $columnsNameId, $id);
    // }

    // public function editCartByProductId($user_id, $product_id, $new_quantity)
    // {
    //     $qr = "update cart set quatity = '$new_quantity' where user_id = '$user_id' and product_id = '$product_id'";
    //     $this->execute($qr);
    // }

   
    public function checkIfDuplicate($id_kh,$is_sp){
return $this->checkDup(self::TABLE,$id_kh,$is_sp);
    }
    public function storecart($data=[]){
        $this->create(self::TABLE,$data);
        }
        public function updateQuantity($table,$is_kh, $is_sp, $soluongmoi, $tonggiamoi){
            $sql="UPDATE ${table} SET soluong=${soluongmoi}, tonggia=${tonggiamoi} where id_kh=${is_kh} and id_sp=${is_sp}";
            $this->excute($sql);
        }
        public function updatnewquantity($is_kh, $is_sp, $soluongmoi, $tonggiamoi){
            $this->updateQuantity(self::TABLE,$is_kh, $is_sp, $soluongmoi, $tonggiamoi);
        }
        public function editCartByProductId($id_kh, $id_sp, $soluongmoi){
            $this->editCartIdProduct(self::TABLE,$id_kh,$id_sp,$soluongmoi);
        }
        public function deleteCartItem($id_kh,$id_sp){
$this->deleteItem(self::TABLE,$id_kh,$id_sp);
        }
        public function getCartByCustomerId($id_kh){
        return $this->getCartById(self::TABLE,$id_kh);
        }
        public function deleteAllfromIdCus($id_kh){
            $this->deleteAll(self::TABLE,$id_kh);
        }
        public function findtensanpham($id){
            return $this->findtsp(self::TABLE,$id);
        }
    // public function deleteItem($user_id, $product_id)
    // {
    //     $qr = "DELETE from cart WHERE user_id = '$user_id' and product_id = '$product_id'";

    //     // echo $qr;
    //     // die();
    //     $this->execute($qr);
    // }

    // public function getCartByUserId($user_id)
    // {
    //     $qr = "Select * from cart c where c.user_id = '$user_id'";

    //     $query = $this->execute($qr);
    //     $data = [];
    //     while ($row = mysqli_fetch_assoc($query)) {
    //         array_push($data, $row);
    //     }

    //     return $data;
    // }

    // public function updateQuantity($user_id, $product_id, $new_quantity, $total)
    // {
    //     $qr = "update cart c set c.quatity = $new_quantity, c.total = $total where c.user_id = '$user_id' and c.product_id = '$product_id'";

    //     $this->execute($qr);
    // }

    // public function sumQuantity($user_id)
    // {
    //     $qr = "select sum(quatity) from cart c where c.user_id = '$user_id'";

    //     $query = $this->execute($qr);
    //     $data = [];
    //     while ($row = mysqli_fetch_assoc($query)) {
    //         array_push($data, $row);
    //     }

    //     return $data;
    // }
}
