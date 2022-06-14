<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">
    <title>GIỎ HÀNG</title>

    <!-- Font Awesome, Style -->
    <!-- <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> -->
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/smoothproducts.css">


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo URL_LAYOUT ?>/fontawesome-free-5.15.3-web/js/all.js"></script>
    <script src="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.js"></script>
    <script src="<?php echo URL_LAYOUT ?>js/shoppingJS.js"></script>



    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingHeader.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingFooter.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingMain.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet" />



    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>csstemplate/style.css" type="text/css">

    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/shoppingHeader.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <style type="text/css">
        .navigation>.logo>a>p {
            font-size: 35px;
            font-weight: 900;
            letter-spacing: 10px;
            font-family: "Charmonman", cursive;
            color: #000;
        }

        input[type=number]::-webkit-inner-spin-span {
            background-color: red;
            color: red;
        }

        button.swal-button.swal-button--confirm.swal-button--danger {
            background: #000;
        }

        button.swal-button.swal-button--confirm {
            background: #000;
        }

        .swal-button:not([disabled]):hover {
            background-color: orange;
        }

        .quantity {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .meo {
            display: inline-block;
        }

        .pro-qty {
            height: 0px;
        }

        .notice {
            color: red;
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
                                    <li><a href="<?php echo URL . 'layout/bags' ?>">Túi</a></li>
                                        <li><a href="<?php echo URL . 'layout/hats' ?>">Mũ</a></li>
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
                                    <li><a href="<?php echo URL . 'layout/bags' ?>">Túi</a></li>
                                        <li><a href="<?php echo URL . 'layout/hats' ?>">Mũ</a></li>
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
                    <li class="menu-item"><a class="active" href="<?php echo URL . 'layout/contact' ?>">LIÊN HỆ</a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="<?php echo URL.'layout'?>">
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

    <section class="shopping_cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="shopping_cart_table">

                        <table>
                            <thead>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Xóa</th>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($data['cart'])) {
                                    foreach ($data['cart'] as $key => $value) {
                                ?>
                                        <tr id="<?php echo 'product' . $value['id']; ?>">
                                            <td class="product_cart_item">
                                                <div class="product_cart_item_pic">
                                                    <img src="<?php echo URL_LAYOUT . 'img/product/' . $value['image1'] ?>">
                                                </div>
                                                <div class="product_cart_item_text">

                                                    <div class="size">
                                                        <span>SP : </span><?php echo $value['tensanpham'] ?>
                                                    </div>
                                                    <div class="size">
                                                        <span>SL : </span><?php echo $value['soluong'] ?>
                                                    </div>
                                                    <div class="size">
                                                        <span>Size : </span><?php echo $value['cannang'] . ' g' ?>
                                                    </div>
                                                    <div class="color">
                                                        <span>Color : </span>Black
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="product_cart_quantity">


                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <span class="dec qtybtn">-</span>
                                                        <div class="meo" id="<?php echo 'qtyPro' . $value['id']; ?>" data-id="<?php echo $value['id']; ?>">
                                                            <input type="text" value="<?php echo $value['count'] ?>" id="<?php echo 'input' . $value['id']; ?>">
                                                        </div>
                                                        <span class="inc qtybtn">+</span>
                                                    </div>
                                                </div>


                                            </td>
                                            <td class="cart_price">
                                                <div class="cart_price_span">
                                                    <span id="<?php echo "total" . $value['id']; ?>"> <?php
                                                                                                        $gia = $value['count'] * $value['gia'];
                                                                                                        $formattedGia = number_format($gia, 0, ',', '.') . 'đ';
                                                                                                        echo $formattedGia;
                                                                                                        ?></span>
                                            </td>


                    </div>

                    <td class="cart_close">
                        <a href="<?php echo URL . 'cart/delete/' . $value['id'] ?>" class="removeCart" data-id="<?php echo $value['id']; ?>">
                            <span type="span" class="btn close-btn">
                                <i class="fas fa-times"></i> </span>
                        </a>
                    </td>
                    </tr>
            <?php
                                    }
                                }
            ?>
            </tbody>

            </table>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6 cart-btn">
                        <div class="continue-btn">
                            <a href="<?php echo URL . 'layout/index' ?>">Tiếp tục mua hàng</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="cart_total mt-5">
                    <h6>Hóa Đơn</h6>
                    <ul>
                        <li>Tổng tiền :
                            <span id="total_Cart">
                                <?php
                                $formattedTong = 0;
                                if (isset($data['cart'])) {
                                    $tong = 0;
                                    $formattedTong = 0;
                                    foreach ($data['cart'] as $value) {
                                        $tong += $value['count'] * $value['gia'];
                                        $formattedTong = number_format($tong, 0, ',', '.');
                                    }
                                    echo $formattedTong . 'đ';
                                } else if (!isset($data['cart'])) {

                                    echo $formattedTong . 'đ';
                                }

                                ?>
                            </span>
                        </li>
                    </ul>
                    <a href="<?php echo URL . 'cart/checkout' ?>" class="primary-btn">Thanh toán</a>

                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <?php if (empty($data['cart'])) {

            echo "<h4 class=" . 'notice' . " style=" . 'text-align:center' . ">CHƯA CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG </h4>";
        } ?>
    </section>
   
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="<?php echo URL_LAYOUT ?>js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script>
    $('a.removeCart').click(function(event) {
        event.preventDefault();
        var href = $(this).attr("href");
        var id = $(this).attr("data-id");
        var name = "#product" + id;
      
        $.ajax({
            url: href,
            type: 'GET',
            data: {},

            success: function(res) {
                swal("Xóa thành công", " carono cảm ơn !", "success");
                $(".num_cart").load("http://localhost/PHP/DOAN-CARONO/ .num_cart");
                $("#total_Cart").load("http://localhost/PHP/DOAN-CARONO/cart/index #total_Cart");
                $(name).load("http://localhost/PHP/DOAN-CARONO/cart/index "+name);

            }
        });
    });

    $("span.qtybtn").click(function() {
        var id = $(this).siblings(".meo").attr("data-id");
        var control = $(this).attr("class");
        var inputName = '#input' + id;
        var value = $(inputName).val();
        var proQtyName = '#qtyPro' + id;
        var totalName = "#total" + id;
        var totalCart = "#total_Cart";
        var href = "http://localhost/PHP/DOAN-CARONO/cart/update/" + id;
        if (control.split(" ")[0] == "dec") {
            value--;
            var tru = value;
            $.ajax({
                url: href,
                type: "POST",
                data: {
                    tru: tru
                },
                success: function(res) {
                    $(proQtyName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + inputName);
                    $(totalName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalName);
                    $(totalCart).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalCart);
                }
            })

        } else if (control.split(" ")[0] == "inc") {
            value++;
            var cong = value;
            $.ajax({
                url: href,
                type: "POST",
                data: {
                    cong: cong
                },
                success: function(res) {
                    $(proQtyName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + inputName);
                    $(totalName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalName);
                    $(totalCart).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalCart);
                }
            })
        }


    })
</script>

</html>