<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CARONO</title>

    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingHeader.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingFooter.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingMain.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/search.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/style.css" />

    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingHeader.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingFooter.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingMain.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.css" />
    <style>
        .result-product h3 {
            text-align: center;
            color: red;
            font-size: 25px;
            font-weight: 400;
        }

        .header_cart button {
            position: absolute;
            top: 50%;
            right: 1%;
            transform: translateY(-50%);
            text-decoration: none;
            font-size: 18px;
            color: #000;
            border: 50%;
            width: 40px;
            height: 40px;
            background: #fff;
            border: none;
        }

        .result span {
            color: #e29f01;
        }
    </style>
</head>

<body>
    <header>
        <div class="navigation">
            <div class="toggle-menu flex">
                <button class="bt-toggle">
                    <div class="icon1"><i class="fas fa-bars"></i></div>
                    <div class="icon2 dn"><i class="fas fa-times"></i></div>
                </button>
            </div>
            <div class="menu">
                <ul class="main-menu">
                    <li class="menu-item">
                        <a class="active active1" href="<?php echo URL . "layout/index" ?>">TRANG CHỦ</a>
                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo URL . 'layout/women' ?>">ĐỒ NỮ </a>
                        <button id="0" class="bt-dropdown"><i class="fas fa-chevron-down"></i></button>
                        <div class="sub">
                            <ul class="sub-menu">
                                <li class="sub-item">
                                    <a href="#">SẢN PHẨM</a>
                                    <ul class="child-menu">
                                        <li><a href="<?php echo URL . 'layout/bags' ?>">Mũ</a></li>
                                        <li><a href="<?php echo URL . 'layout/hats' ?>">Túi</a></li>
                                    </ul>
                                </li>
                                <li class="sub-item">
                                    <a href="#">NỔI BẬT</a>
                                    <ul class="child-menu">
                                        <li><a href="#">Top Hats</a></li>
                                        <li><a href="#">Tote Bags</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="slider">
                                <div class="slider-img sub1-img">
                                    <div class="slide" id="0">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/women/sliderwoment1.jpg" />
                                    </div>
                                    <div class="slide hide" id="1">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/women/sliderwoment2tt.jpg" />
                                    </div>
                                    <div class="slide hide" id="2">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/women/sliderwoment3tt.jpg" />
                                    </div>
                                    <div class="next" style="display: none"></div>
                                </div>
                                <div class="slider-node sub1-node">
                                    <ul>
                                        <li class="node" id="0"></li>
                                        <li class="node" id="1"></li>
                                        <li class="node" id="2"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo URL . 'layout/men' ?>">ĐỒ NAM </a>
                        <button id="1" class="bt-dropdown"><i class="fas fa-chevron-down"></i></button>
                        <div class="sub">
                            <ul class="sub-menu">
                                <li class="sub-item">
                                    <a href="#">SẢN PHẨM</a>
                                    <ul class="child-menu">
                                        <li><a href="<?php echo URL . 'layout/bags' ?>">Mũ</a></li>
                                        <li><a href="<?php echo URL . 'layout/hats' ?>">Túi</a></li>
                                    </ul>
                                </li>
                                <li class="sub-item">
                                    <a href="#">NỔI BẬT</a>
                                    <ul class="child-menu">
                                        <li><a href="#">Top Hats</a></li>
                                        <li><a href="#">Top Bags</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="slider">
                                <div class="slider-img sub2-img">
                                    <div class="slide" id="0">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/men/sliderment2.jpg" />
                                    </div>
                                    <div class="slide hide" id="1">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/men/sliderment1.jpg" />
                                    </div>
                                    <div class="slide hide" id="2">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/men/sliderment3.jpg" />
                                    </div>
                                    <div class="next" style="display: none"></div>
                                </div>
                                <div class="slider-node sub2-node">
                                    <ul>
                                        <li class="node" id="0"></li>
                                        <li class="node" id="1"></li>
                                        <li class="node" id="2"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item"><a class="active" href="<?php echo URL . 'layout/news' ?>">BLOG</a></li>
                    <li class="menu-item"><a class="active" href="#">LIÊN HỆ</a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="#">
                    <p>CARONO</p>
                </a>
            </div>
            <div class="cart header_cart">
                <div class="icon search">
                    <a href="#" class="search-link"> <i class="fas fa-search"></i> </a>
                    <div class="search-content">
                        <div class="container" id="searchMain">
                            <form class="search-form" action="<?php echo URL ?>layout/search" method="POST" enctype="multipart/form-data">
                                <div class="po">
                                    <input class="search-input" name="name_search" type="text" placeholder="Tìm sản phẩm">
                                    <button name="search" class="btn_search" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>


                                </div>
                            </form>
                            <div class="close">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icon num_cart">
                    <a href="<?php echo URL . 'cart/index' ?>"><i class="fab fa-opencart"></i>
                        <span class="amount">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            } else {
                                echo "0";
                            }
                            ?>
                        </span>
                    </a>
                </div>
                <div class="icon user flex" id="login">
                    <a id="login1" href="<?php echo URL . 'logincustomer' ?>">
                        <i class="far fa-user"></i>
                        <div class="user-name">
                            <?php
                            if (isset($_SESSION['name'])) {
                                echo $_SESSION['name'];
                            } else {
                                echo "login";
                            }
                            ?>
                        </div>
                    </a>
                    <div class="login-popup dn">
                        <div class="content full flex">
                            <a class="updow" href="<?php echo URL . 'bill/index' ?>">Detail: <i class="fas fa-calendar-week"></i></a>
                            <div class="icon-logout">
                                <a class="logout updow" href="<?php echo URL . 'logincustomer/logout' ?>">Logout: <i class="fas fa-sign-out-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <section class="result">
        <div class="container">

            <div class="inform flex">
                <?php

                if (!empty($data['sanpham'])) {
                    $count = 0;
                    foreach ($data['sanpham'] as $key => $value) {
                        $count++;
                    }
                ?>
                    <h1><span><?php echo "$count" ?></span> kết quả tìm kiếm tương tự</h1>
                <?php

                }
                ?>
            </div>
            <div class="result-product">
                <?php

                if (!empty($data['sanpham'])) {
                    foreach ($data['sanpham'] as $key => $value) {

                ?>
                        <div class="product flex">
                            <div class="img">
                                <a href="#"> <img src="<?php echo URL_LAYOUT . 'img/product/' . $value['image1'] ?>" alt=""></a>
                            </div>
                            <div class="product-info flex">
                                <div class="info-inner">
                                    <a class="pr-name" href="#"><?php echo $value['tensanpham'] ?></a>
                                    <p class="pr-cost"><?php echo number_format($value['gia'] , 0, ',', '.').' đ';?></p>
                                    <p class="pr-description">
                                        <?php echo $value['mieutasanpham'] ?>
                                    </p>
                                </div>
                                <div class="info-btn">
                                    <a class="bt-view flex bt" href="<?php echo URL . 'layout/detail/' .$value["id"]; ?>">
                                        <span class="flex">Detail</span>
                                    </a>
                                    <a class="bt-add flex bt addCart<?php echo $value['id'] ?>" onclick="myFunction(<?php echo $value['id'] ?>)" data-id="<?php echo $value['soluong'] ?>" >
                                        <span class="flex">Quick shop</span>
                                        <input id="name" type="hidden" value="
                                        <?php
                                                if (isset($_SESSION['name'])) {
                                                    echo $_SESSION['name'];
                                                } else {
                                                    echo 0;
                                                }
                                            ?>">
                                    </a>
                                </div>
                               
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<h3>Sản phẩm hiện không có tại store </h3>";
                }
                ?>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="brand">
                <div class="flex">
                    <span></span>
                </div>
                <div class="brand-name flex">
                    <p>CARONO</p>
                    <p>fashion</p>
                </div>
                <div class="flex">
                    <span></span>
                </div>
            </div>
            <div class="content">
                <div class="menu pd-top">
                    <ul class="flex-di">
                        <li><a href="#">SHOPPING</a></li>
                        <li><a href="#">MAN</a></li>
                        <li><a href="#">WOMEN</a></li>
                        <li><a href="#">VOUCHER</a></li>
                    </ul>
                </div>
                <div class="social">
                    <div class="icon pd-top">
                        <div class="icon-item facebook">
                            <a class="flex" href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="icon-item instagram">
                            <a class="flex" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="icon-item tiktok">
                            <a class="flex" href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                    <div class="line flex">
                        <span></span>
                    </div>
                </div>
                <div class="menu pd-top">
                    <ul class="flex-di">
                        <li><a href="#">PRIVACY POLICY</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">ADDRESS</a></li>
                    </ul>
                </div>
            </div>
            <div class="newsletter flex-di">
                <div class="tittle">
                    <p>WEEBKLY NEWSLETTER</p>
                </div>
                <table>
                    <tr class="box flex">
                        <td><a href="#">carono@gmail.com</a></td>
                    </tr>
                    <tr class="box flex">
                        <td><a href="#">SUBSCRIBE</a></td>
                    </tr>
                </table>
            </div>
            <div class="end flex">
                <p>© 2021 create by NICE TEAM</p>
            </div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo URL_LAYOUT ?>/fontawesome-free-5.15.3-web/js/all.js"></script>
<script src="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.js"></script>
<script src="<?php echo URL_LAYOUT ?>js/shoppingJS.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    function myFunction(thisid) {
        var id = thisid;
        var href = "http://localhost/PHP/DOAN-CARONO/cart/store/" + id;
        var soluong = document.querySelector(".addCart" + id).getAttribute("data-id")
        var name = document.querySelector("#name").value;
        alert(id);
        alert(href);

        alert(soluong);
        alert(name);


        if (name == 0) {
            swal("Bạn chưa đăng nhập ", "Hãy đăng nhập trước khi mua hàng", "warning");

        } else {
            if (soluong > 0) {
                $.ajax({
                    url: href,
                    type: 'POST',
                    data: {},
                    success: function(res) {
                        swal("Đã thêm vào giỏ ", " Chúc quí khách mua hàng vui vẻ  ", "success");
                        $(".num_cart").load("http://localhost/PHP/DOAN-CARONO/ .num_cart");
                    }
                });
            } else {
                swal("Sản phẩm tạm hết hàng", "Hãy chọn nhứng sản phẩm tương tự ", "warning");
            }
        }
    }
</script>
</html>