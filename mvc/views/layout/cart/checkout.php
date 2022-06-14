<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">
    <title>THANH TOÁN</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/bootstrap.min.css" type="text/css">
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
    <style type="text/css">
        body,
        html {
            font-family: "Poppins", sans-serif;
        }

        .navigation>.logo>a>p {
            font-size: 35px;
            font-weight: 900;
            letter-spacing: 10px;
            font-family: "Charmonman", cursive;
        }

        .disable {}

        .cl {
            background: #dfe2e4;
            cursor: not-allowed;
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
                <a href="<?php echo URL . 'layout' ?>">
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
    <section class="checkout spad">
        <div class="container">
            <div class="checkoutform">
                <form action="<?php echo URL . 'bill/store' ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">

                            <div class="section_header">
                                <h2 class="section_title layout-flex_item">Chi Tiết Hóa Đơn Khách Hàng :</h2>
                                <a href="login.html" class="login_form">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span><?php echo  $_SESSION['name'] ?></span>
                                </a>
                            </div>

                            <div class="row detail_bill">

                                <div class="col-lg-6 details_bill">
                                    <div class="checkout_input">
                                        <p>Số ĐT <span>*</span></p>
                                        <input type="text" value="<?php echo $data['customer']['sodienthoai'] ?>" name="customer_phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 details_bill">
                                    <div class="checkout_input">
                                        <p>Email <span>*</span></p>
                                        <input id="emailCus" type="text" value="<?php echo $data['customer']['email'] ?>" name="mail">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout_input">
                                        <p>Họ </p>
                                        <input id="hocus" type="text" value="<?php echo $data['customer']['ho'] ?>" name="ho">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout_input">
                                        <p>Tên <span>*</span></p>
                                        <input id="tenCus" type="text" value="<?php echo $data['customer']['ten'] ?>" name="ten">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout_input">
                                        <p>Địa chỉ giao hàng: <span>*</span></p>
                                        <input id="diachi" type="text" value="<?php echo $data['customer']['diachi'] ?>" name="diachi">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout_input">
                                        <p>ID khach hang <span>*</span></p>
                                        <input class="cl" readonly class="disable" type="text" value="<?php echo $data['customer']['id'] ?>" name="id_khachhang">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout_input">
                                        <p>Take node ! <span>*</span></p>
                                        <input id="note" type="text" placeholder="take node" name="note">
                                    </div>
                                </div>
                                <div class="continue-btn">
                                    <a href="<?php echo URL . 'layout/index' ?>">Tiếp tục mua hàng</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">

                            <div class="checkout_order">
                                <h4 class="order_title">ĐƠN HÀNG CỦA BẠN</h4>
                                <?php
                                foreach ($data['cart'] as $key => $value) {
                                ?>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="product_cart_item">
                                                    <div class="product_cart_item_pic">
                                                        <img src="<?php echo URL_LAYOUT . 'img/product/' . $value['image1'] ?>">
                                                    </div>
                                                    <div class="product_cart_item_text">
                                                        <h6><?php echo $value['tensanpham'] . "( " . $value['count'] .  ")" ?></h6>
                                                    </div>
                                                </td>
                                                <td class="product_price">
                                                    <span>
                                                        <?php

                                                        $gia = $value['gia'];
                                                        $formattedGia = number_format($gia, 0, ',', '.') . 'đ';
                                                        echo $formattedGia;
                                                        ?>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                <?php

                                }


                                ?>

                                <!-- <input style="display:none ;" type="text" value="<?php print_r($chitietsp) ?>" name="chitietsanpham"> -->
                                <div class="cart_discount">

                                    <div class="discount_code">
                                        <input type="text" placeholder="Discount code" id="discount" name="">
                                        <button id="apply_code" type="button">Apply</button>
                                    </div>
                                </div>
                                <ul class="checkout_total_bill">

                                    <li>Shipping
                                        <span>30.000 đ</span>
                                    </li>
                                    <li>Tổng tiền
                                        <span>
                                            <?php
                                            $tong = 30000;
                                            foreach ($data['cart'] as $key => $value) {
                                                $tong += $value['count'] * $value['gia'];
                                                $formattedNum = number_format($tong, 0, ',', '.') . 'đ';
                                            }
                                            echo $formattedNum;

                                            ?>

                                        </span>
                                    </li>
                                </ul>
                                <input type="hidden" value="
                                <?php
                                $tong = 30000;
                                foreach ($data['cart'] as $key => $value) {
                                    $tong += $value['count'] * $value['gia'];
                                    $formattedNum = number_format($tong, 0, ',', '.') . 'đ';
                                }
                                echo $formattedNum;

                                ?>
                                
                                
                                " id="tongtien">
                                <div class="pay">
                                    <a href="<?php echo URL . 'bill/index' ?>">
                                        <button class="placeoder" type="submit" name="placeoder">Hoàn tất thanh toán</button>
                                    </a>





                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script src="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.js"></script>
    <script src="<?php echo URL_LAYOUT ?>js/shoppingJS.js"></script>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        $('button.placeoder').on('click', function(e) {
            alert('Kiểm tra thông tin đặt hàng qua mail');
            var mail = $('#emailCus').val();
            var ten = $('#tenCus').val();
            var diachi = $('#diachi').val();
            var note = $('#note').val();
            var tien = $('#tongtien').val();
            var comment = `THÔNG TIN ĐẶT HÀNG :<br/> Tên khách hàng: ${ten} <br/> Email: ${mail} <br/> Địa chỉ: ${diachi} <br/> Lưu ý: ${note} <br/> Tổng Tiền : ${tien} <br/>`;


            Email.send({
                SecureToken: "b5a688c7-2474-4f2d-9db1-ec3cd665bcf5",
                To: mail,
                From: "caronobrand@gmail.com",
                Subject: "ĐƠN HÀNG ĐÃ ĐƯỢC XÁC NHẬN",
                Body: comment
            }).then(
                message => alert('thanh cong')
            );
        })
    </script>



</html>



</body>


</html>