<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">
    <title>ĐỒ NỮ</title>




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
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>/css/showproduct.css" />

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
                        <a class="active " href="<?php echo URL . "layout/index" ?>">TRANG CHỦ</a>
                    </li>
                    <li class="menu-item">
                        <a class="active active1" href="<?php echo URL . 'layout/women' ?>">ĐỒ NỮ </a>
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

    <section class="show-product">
        <div class="sidebar">
            <div class="sidebar-item category">
                <div class="tittle">
                    <h1>Categories</h1>
                </div>
                <div class="form">
                    <div class="text-field">
                        <span><img src="<?php echo URL_LAYOUT . 'img/product/hats/iconhat.png' ?>" alt=""></span>

                        <a href="<?php echo URL . 'layout/hats' ?>">Mũ</a>
                    </div>
                    <div class="text-field">
                        <span><img src="<?php echo URL_LAYOUT . 'img/product/bags/iconbag2.png' ?>" alt=""></span>

                        <a href="<?php echo URL . 'layout/bags' ?>">Balo</a>
                    </div>
                </div>
            </div>
            <div class="sidebar-item range-slider">
                <div class="tittle">
                    <h1>Prices</h1>
                </div>
                <form class="po" method="post" action="<?php echo URL . 'layout/men' ?>">
                    <?php
                    if (isset($data['minmax'])) {
                        $min = $data['minmax'][0]['mingia'];
                        $max = $data['minmax'][0]['maxgia'];

                    ?>
                        <input step="11" type="range" name="price-min" id="price-min" value="<?php echo $min ?>" min="<?php echo $min ?>" max="<?php echo $max ?>" />
                        <input step="11" type="range" name="price-max" id="price-max" value="<?php echo $max ?>" min="<?php echo $min ?>" max="<?php echo $max ?>" />
                    <?php } else {
                    ?>
                        <input step="11" type="range" name="price-min" id="price-min" value="11" min="11" max="133" />
                        <input step="11" type="range" name="price-max" id="price-max" value="133" min="11" max="133" />
                    <?php
                    }
                    ?>
                    <div class="slider">
                        <div class="track"></div>
                        <div class="range"></div>
                        <div class="thumb left"></div>
                        <div class="thumb right"></div>
                    </div>
                    <div class="result">
                        <span id="re-min"></span>
                        <span id="re-max"></span>
                    </div>
                    <div class="brand">
                        <div class="br-tittle flex">
                            <h1>Brand</h1>
                        </div>
                        <div>
                            <?php
                            if (isset($data['thuonghieu'])) {
                                foreach ($data['thuonghieu'] as $value) {
                            ?>
                                    <div class="text-field">
                                        <input class="selector thuonghieu" onclick="functionfill()" type="checkbox" value="<?php echo $value['thuonghieu'] ?>" name="check1" id="check1">
                                        <p>
                                            <?php echo $value['thuonghieu'] ?>
                                        </p>
                                    </div>
                            <?php }
                            }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sidebar-item feature-product">
                <div class="tittle">
                    <h1>Feature Products</h1>
                </div>
                <div class="slider">
                    <div class="button-next-pre flex">
                        <button class="bt-slider bt-pre"><i class="fas fa-caret-left"></i></button>
                        <button class="bt-slider bt-next"><i class="fas fa-caret-right"></i></button>
                    </div>
                    <div class="slider-content">
                        <div class="slide">
                            <?php if (isset($data['advertise'])) {

                                for ($i = 0; $i < 3; $i++) {
                            ?>
                                    <a href="#" class="sl-item">
                                        <div class="item-img">
                                            <img src="<?php echo URL_LAYOUT . 'img/product/' . $data['advertise'][$i]['image1'] ?>" alt="">
                                        </div>
                                        <div class="item-info">
                                            <div class="info-name">
                                                <p><?php echo $data['advertise'][$i]['tensanpham'] ?></p>
                                            </div>
                                            <div class="info-price">
                                                <p>950.000 đ</p>
                                                <p><?php $formattedTong = number_format($data['advertise'][$i]['gia'], 0, ',', '.');
                                                    echo $formattedTong . 'đ'; ?></p>
                                            </div>
                                        </div>
                                    </a>
                            <?php
                                }
                            }
                            ?>

                        </div>
                        <div class="slide hide">
                            <?php if (isset($data['advertise'])) {

                                for ($i = 3; $i < 6; $i++) {
                            ?>
                                    <a href="#" class="sl-item">
                                        <div class="item-img">
                                            <img src="<?php echo URL_LAYOUT . 'img/product/' . $data['advertise'][$i]['image1'] ?>" alt="">
                                        </div>
                                        <div class="item-info">
                                            <div class="info-name">
                                                <p><?php echo $data['advertise'][$i]['tensanpham'] ?></p>
                                            </div>
                                            <div class="info-price">
                                                <p>950.000 đ</p>
                                                <p><?php $formattedTong = number_format($data['advertise'][$i]['gia'], 0, ',', '.');
                                                    echo $formattedTong . 'đ'; ?></p>
                                            </div>
                                        </div>
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="slide hide">
                            <?php if (isset($data['advertise'])) {

                                for ($i = 6; $i < 9; $i++) {
                            ?>
                                    <a href="#" class="sl-item">
                                        <div class="item-img">
                                            <img src="<?php echo URL_LAYOUT . 'img/product/' . $data['advertise'][$i]['image1'] ?>" alt="">
                                        </div>
                                        <div class="item-info">
                                            <div class="info-name">
                                                <p><?php echo $data['advertise'][$i]['tensanpham'] ?></p>
                                            </div>
                                            <div class="info-price">
                                                <p>950.000 đ</p>
                                                <p><?php $formattedTong = number_format($data['advertise'][$i]['gia'], 0, ',', '.');
                                                    echo $formattedTong . 'đ'; ?></p>
                                            </div>
                                        </div>
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="products">
            </div>
        </div>
    </section>

    <section>

        <button class="bt-top dn"><i class="fas fa-arrow-up"></i></button>

    </section>

    <footer class="footer" data-aos="zoom-in">
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
                        <li><a href="<?php echo URL . 'admin' ?>">ADMIN</a></li>                    </ul>
                </div>
            </div>
            <div class="newsletter flex-di">
                <div class="tittle">
                    <p>WEEBKLY NEWSLETTER</p>
                </div>
                <table>
                    <tr class="box flex">
                        <td><a href="#">caronobrand@gmail.com</a></td>
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

<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<script>
    filter_data();
    //    ====== add cart ======
    //====================================
    // js filter data   
    //====================================

    function filter_data(remin, remax) {
        var action = 'get_data';
        var min_price = remin;
        var max_price = remax;
        if (min_price == null) {
            min_price = 10000;
        } else {
            min_price = remin;
        }
        if (max_price == null) {
            max_price = 900000;
        } else {
            max_price = remax;
        }
        var brand = get_filter('thuonghieu');

        $.ajax({
            url: "http://localhost/PHP/DOAN-CARONO/layout/productwomen",
            method: "POST",
            data: {
                action: action,
                max_price: max_price,
                min_price: min_price,
                brand: brand
            },
            success: function(data) {
                $('.products').html(data);
            }
        })
    }

    function get_filter(class_name) {
        var filter = [];
        $('.' + class_name + ':checked').each(function() {
            filter.push($(this).val());
        });
        return filter;
    }
    // $('.selector').click(function(){
    //     filter_data();
    // })
    function functionfill() {
        filter_data();
    }

    function myFunction(thisid) {
        var id = thisid;
        var href = "http://localhost/PHP/DOAN-CARONO/cart/store/" + id;
        var soluong = document.querySelector(".addCart" + id).getAttribute("data-id")
        var name = document.querySelector("#valuename").value;

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

    //====================================
    //todo js of range-slider
    //====================================
    var inputLeft = document.getElementById("price-min");
    var inputRight = document.getElementById("price-max");
    var thumLeft = document.querySelector(".slider>.left");
    var thumRight = document.querySelector(".slider>.right");
    var range = document.querySelector(".slider>.range");
    var remin = 0;
    var remax = 0;

    function setLeftValue() {
        let _this = inputLeft;
        let min = _this.min; //lay gia tri min cua input
        let max = _this.max; //lay gia tri max cua input
        _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value));
        let percent = ((_this.value - min) / (max - min)) * 100;
        remin = document.getElementById("re-min").innerHTML = _this.value;

        thumLeft.style.left = percent + "%";
        range.style.left = percent + "%";
        filter_data(remin, remax);
    }
    setLeftValue();
    inputLeft.addEventListener("input", setLeftValue);

    function setRightValue() {
        let _this = inputRight;
        let min = _this.min; //lay gia tri min cua input
        let max = _this.max; //lay gia tri max cua input
        _this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value));
        let percent = ((_this.value - min) / (max - min)) * 100;
        remax = document.getElementById("re-max").innerHTML = _this.value;
        thumRight.style.right = 100 - percent + "%";
        range.style.right = 100 - percent + "%";
        filter_data(remin, remax);
    }
    setRightValue();
    inputRight.addEventListener("input", setRightValue);
</script>

</html>