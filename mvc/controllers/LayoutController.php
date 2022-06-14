<?php
class LayoutController extends Connect
{
    private $productModel;
    private $customerModel;
  
    private $commentModel;

    function __construct()
    {
        $this->call_models('ProductModel');
        $this->productModel = new ProductModel;
        $this->call_models('CustomerModel');
        $this->customerModel = new CustomerModel;
        $this->call_models('CommentModel');
        $this->commentModel = new CommentModel;
    }
    // TODO: SẢN PHẢM TRENDING ( ÂN )
    function index()
    {
        $data['main'] = 'home/producttrending';
        $data['product'] = $this->productModel->gettrending();

        $this->call_views('layout/index', $data);
    }
// TODO: SẢN PHẨM NAM  ( ÂN )
    function productmen()
    {
       
        if (isset($_POST['action'])) {
            $output = '';
            $valuename = 0;
           
            if (isset($_SESSION['name'])) {
                $valuename = 1;
            }
            if ((!empty($_POST['min_price']) && !empty($_POST['max_price']))) {
                
                if(empty($_POST['brand'])){
                    $data['productMens'] = $this->productModel->getallfromcate(1,$_POST['min_price'], $_POST['max_price']);
                   
                }
                else if(!empty($_POST['brand'])){
                    $brand=implode("','",$_POST['brand']);
                 
                    $data['productMens'] = $this->productModel->getallfromcate(1,$_POST['min_price'], $_POST['max_price'],$brand);
    
                }
            } 
            
            else {
                $data['productMens'] = $this->productModel->getallfromcate(1);
            }
           
            if (isset($data['productMens'])) {
                foreach ($data['productMens'] as $key => $value) {
                    $output .= '
                    <div class="col">
                    <div class="product-img">
                        <div class="img img1"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/' . $value["image1"] . ' " alt=""></div>
                        <div class="img img2"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/' . $value["image2"] . ' " alt=""></div>
                        <a href="#" class="wishlist"><i class="fas fa-heart"></i></a>
                        <div class="hover-button">
                            <a class="bt-view flex bt"  href="http://localhost/PHP/DOAN-CARONO/layout/detail/' . $value["id"] . '">
                                <span class="flex view">Chi tiết </span>
                                <span class="bt-icon flex"> <i class="far fa-eye"></i></span>
                            </a>
                            <div data-id="' . $value['soluong'] . '" id="' . $value['id'] . '" onclick="myFunction(' . $value['id'] . ')" class="bt-add flex bt addCart' . $value["id"] . '" >
                                <span class="flex">Mua hàng</span>
                                <span class="bt-icon flex"> <i class="fas fa-shopping-cart"></i></span>
                                <input id="valuename" type="hidden" value="' . $valuename . '">
                            </div>
                            
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="pr-name">
                            <a href="#">' . $value["tensanpham"] . '</a>
                        </div>
                        <div class="pr-price">
                            <p class="cost">350.000 đ </p>
                            <p class="pr-sale">' . number_format(  $value["gia"]  , 0, ',', '.'). ' đ</p>
                        </div>
                    </div>
                </div>            
                ';
                }
            } else {
                $output = "<h3>khong co san pham nao</h3>";
            }
            echo $output;
        } else {
            header("location:" . URL . 'layout/women');
        }
    }
    // TODO: SẢN PHẨM NỮ  ( ÂN )
    function productwomen()
    {
        if (isset($_POST['action'])) {
            $output = '';
            $valuename = 0;
           
            if (isset($_SESSION['name'])) {
                $valuename = 1;
            }
            if ((!empty($_POST['min_price']) && !empty($_POST['max_price']))) {
                
                if(empty($_POST['brand'])){
                    $data['productWomens'] = $this->productModel->getallfromcate(2,$_POST['min_price'], $_POST['max_price']);
                }
                else if(!empty($_POST['brand'])){
                    $brand=implode("','",$_POST['brand']);
                 
                    $data['productWomens'] = $this->productModel->getallfromcate(2,$_POST['min_price'], $_POST['max_price'],$brand);
    
                }
            } 
            
            else {
                $data['productWomens'] = $this->productModel->getallfromcate(2);
            }
           
            if (isset($data['productWomens'])) {
                foreach ($data['productWomens'] as $key => $value) {
                    $output .= '
                    <div class="col">
                    <div class="product-img">
                        <div class="img img1"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/' . $value["image1"] . ' " alt=""></div>
                        <div class="img img2"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/' . $value["image2"] . ' " alt=""></div>
                        <a href="#" class="wishlist"><i class="fas fa-heart"></i></a>
                        <div class="hover-button">
                            <a class="bt-view flex bt"  href="http://localhost/PHP/DOAN-CARONO/layout/detail/' . $value["id"] . '">
                                <span class="flex view">Chi tiết </span>
                                <span class="bt-icon flex"> <i class="far fa-eye"></i></span>
                            </a>
                            <div data-id="' . $value['soluong'] . '" id="' . $value['id'] . '" onclick="myFunction(' . $value['id'] . ')" class="bt-add flex bt addCart' . $value["id"] . '" >
                                <span class="flex">Mua hàng</span>
                                <span class="bt-icon flex"> <i class="fas fa-shopping-cart"></i></span>
                                <input id="valuename" type="hidden" value="' . $valuename . '">
                            </div>
                            
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="pr-name">
                            <a href="#">' . $value["tensanpham"] . '</a>
                        </div>
                        <div class="pr-price">
                            <p class="cost">350.000 đ </p>
                            <p class="pr-sale">' . number_format(  $value["gia"]  , 0, ',', '.'). ' đ</p>
                        </div>
                    </div>
                </div>            
                ';
                }
            } else {
                $output = "<h3>khong co san pham nao</h3>";
            }
            echo $output;
        } else {
            header("location:" . URL . 'layout/women');
        }
    }
// TODO: SẢN PHẨM TÚI ( ÂN )
    function productbags()
    {
        if (isset($_POST['action'])) {
            $output = '';
            $valuename = 0;
            if (isset($_SESSION['name'])) {
                $valuename = 1;
            }
            if ((!empty($_POST['min_price']) && !empty($_POST['max_price']))) {
                
                if(empty($_POST['brand'])){
                    $data['productBags'] = $this->productModel->getallfromcate(3,$_POST['min_price'], $_POST['max_price']);
                }
                else if(!empty($_POST['brand'])){
                    $brand=implode("','",$_POST['brand']);
                 
                    $data['productBags'] = $this->productModel->getallfromcate(3,$_POST['min_price'], $_POST['max_price'],$brand);
    
                }
            } 
            
            else {
                $data['productBags'] = $this->productModel->getallfromcate(3);
            }
           
            if (isset($data['productBags'])) {
                foreach ($data['productBags'] as $key => $value) {
                    $output .= '
                    <div class="col">
                    <div class="product-img">
                        <div class="img img1"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/' . $value["image1"] . ' " alt=""></div>
                        <div class="img img2"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/' . $value["image2"] . ' " alt=""></div>
                        <a href="#" class="wishlist"><i class="fas fa-heart"></i></a>
                        <div class="hover-button">
                            <a class="bt-view flex bt"  href="http://localhost/PHP/DOAN-CARONO/layout/detail/' . $value["id"] . '">
                                <span class="flex view">Chi tiết </span>
                                <span class="bt-icon flex"> <i class="far fa-eye"></i></span>
                            </a>
                            <div data-id="' . $value['soluong'] . '" id="' . $value['id'] . '" onclick="myFunction(' . $value['id'] . ')" class="bt-add flex bt addCart' . $value["id"] . '" >
                                <span class="flex">Mua hàng</span>
                                <span class="bt-icon flex"> <i class="fas fa-shopping-cart"></i></span>
                                <input id="valuename" type="hidden" value="' . $valuename . '">
                            </div>
                            
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="pr-name">
                            <a href="#">' . $value["tensanpham"] . '</a>
                        </div>
                        <div class="pr-price">
                            <p class="cost">350.000 đ </p>
                            <p class="pr-sale">' . number_format(  $value["gia"]  , 0, ',', '.'). ' đ</p>
                        </div>
                    </div>
                </div>            
                ';
                }
            } else {
                $output = "<h3>khong co san pham nao</h3>";
            }
            echo $output;
        } else {
            header("location:" . URL . 'layout/women');
        }
    }
    // TODO: SẢN PHẨM NÓN ( ÂN )
    function producthats()
    {
        if (isset($_POST['action'])) {
            $output = '';
            $valuename = 0;
            
            if (isset($_SESSION['name'])) {
                $valuename = 1;
            }
            if ((!empty($_POST['min_price']) && !empty($_POST['max_price']))) {
                
                if(empty($_POST['brand'])){
                    $data['productHats'] = $this->productModel->getallfromcate(4,$_POST['min_price'], $_POST['max_price']);
                }
                else if(!empty($_POST['brand'])){
                    $brand=implode("','",$_POST['brand']);
                 
                    $data['productHats'] = $this->productModel->getallfromcate(4,$_POST['min_price'], $_POST['max_price'],$brand);
    
                }
            } 
            
            else {
                $data['productHats'] = $this->productModel->getallfromcate(4);
            }
           
            if (isset($data['productHats'])) {
                foreach ($data['productHats'] as $key => $value) {
                    $output .= '
                    <div class="col">
                    <div class="product-img">
                        <div class="img img1"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/' . $value["image1"] . ' " alt=""></div>
                        <div class="img img2"><img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/' . $value["image2"] . ' " alt=""></div>
                        <a href="#" class="wishlist"><i class="fas fa-heart"></i></a>
                        <div class="hover-button">
                            <a class="bt-view flex bt"  href="http://localhost/PHP/DOAN-CARONO/layout/detail/' . $value["id"] . '">
                                <span class="flex view">Chi tiết </span>
                                <span class="bt-icon flex"> <i class="far fa-eye"></i></span>
                            </a>
                            <div data-id="' . $value['soluong'] . '" id="' . $value['id'] . '" onclick="myFunction(' . $value['id'] . ')" class="bt-add flex bt addCart' . $value["id"] . '" >
                                <span class="flex">Mua hàng</span>
                                <span class="bt-icon flex"> <i class="fas fa-shopping-cart"></i></span>
                                <input id="valuename" type="hidden" value="' . $valuename . '">
                            </div>
                            
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="pr-name">
                            <a href="#">' . $value["tensanpham"] . '</a>
                        </div>
                        <div class="pr-price">
                            <p class="cost">350.000 đ </p>
                            <p class="pr-sale">' . number_format(  $value["gia"]  , 0, ',', '.'). ' đ</p>
                        </div>
                    </div>
                </div>            
                ';
                }
            } else {
                $output = "<h3>khong co san pham nao</h3>";
            }
            echo $output;
        } else {
            header("location:" . URL . 'layout/women');
        }
    }
// TODO: START ==> ĐỔ THÔNG TIN CHO MEN.WOMEN/HATS/BAGS ( ÂN )
    function men()
    {
        $data['thuonghieu'] = $this->productModel->getspFrombrand(1);
        $data['minmax']=$this->productModel->minmaxgia(1);
        $data['advertise']=$this->productModel->sales(2);
        $this->call_views('layout/showproduct/productmen', $data);
    }
    function women()
    {
        $data['thuonghieu'] = $this->productModel->getspFrombrand(2);
        $data['minmax']=$this->productModel->minmaxgia(2);
        $data['advertise']=$this->productModel->sales(1);
        $this->call_views('layout/showproduct/productWomen', $data);
    }
    function hats()
    {
        $data['thuonghieu'] = $this->productModel->getspFrombrand(4);
        $data['minmax']=$this->productModel->minmaxgia(4);
        $data['advertise']=$this->productModel->sales(3);
        $this->call_views('layout/showproduct/hats', $data);
    }
    function bags()
    {
        $data['thuonghieu'] = $this->productModel->getspFrombrand(3);
        $data['minmax']=$this->productModel->minmaxgia(3);
        $data['advertise']=$this->productModel->sales(4);
        $this->call_views('layout/showproduct/bags', $data);
    }
// TODO: END ==> ĐỔ THÔNG TIN CHO MEN.WOMEN/HATS/BAGS ( ÂN )


// TODO: TÌM KIẾM SẢN PHẨM  ( ÂN )

    function search()
    {
        if (isset($_POST['search'])) {
            $data['sanpham'] = $this->productModel->searchByName($_POST['name_search']);
            $this->call_views('layout/search/search',  $data);
        } else {
            $data = [];
            $this->call_views('layout/search/search',  $data);
        }
    }
    // TODO: CHI TIẾT SẢN PHẨM   ( ÂN )

    function detail($id)
    {
        $data['productDetail']= $this->productModel->findByid($id);
       
        $data['sanphamlienquan'] = $this->productModel->getsplq($data['productDetail']['cate_ID']);
      
        if (isset($_SESSION['name'])) {
            //$data['khachhang'] = $this->customerModel->findByName($_SESSION['name']);
            $data['khachhang'] = $this->customerModel->findByid($_SESSION['id_khachhang']);

        }
        $data['binhluankh'] = $this->commentModel->getAll();
        $data['thongbao'] = "<h3>Hãy là người bình luận đầu tiên </h3>";
        $this->call_views('layout/detail', $data);
    }
    function contact(){
        $data = [];
        $this->call_views('layout/contact/contact', $data);
    }
    function news()
    {
        $data = [];
        $this->call_views('layout/news/main', $data);
    }
    
}
