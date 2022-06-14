<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">
    <title style="font-weight: 700;">CARONO</title>



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
                    <li class="menu-item"><a class="active" href="<?php echo URL . 'layout/contact' ?>">LIÊN HỆ</a></li>
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


    <section class="recommend">

        <div class="cursor"></div>
        <div class="cursorFollow"></div>
        <div class="recommend-slider">
            <div class="container full">
                <div id="01" class="slide-item full">
                    <div class="img full">
                        <img src="<?php echo URL_LAYOUT ?>img/product/blog/nu3.jpg" alt="" />
                    </div>
                    <div class="content">
                        <p>
                            The Women <br />
                            Colection
                        </p>
                    </div>
                </div>
                <div id="02" class="slide-item full hide">
                    <div class="img full">
                        <img src="<?php echo URL_LAYOUT.'img/product/blog/nam.jpg' ?>" alt="" />
                    </div>
                    <div class="content">
                        <p>
                            The Man <br />
                            Colection
                        </p>
                    </div>
                </div>
            </div>
            <div class="next-pre">
                <div class="node pre">
                    <i class="fas fa-angle-left"></i>
                </div>
                <div class="content">
                    <span id="change">01</span>
                    <span>/02</span>
                </div>
                <div class="node next">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
        </div>
        <div class="recommend-banner" data-aos="zoom-in">
            <div class="container">
                <div class="banner-box">
                    <div class="bg">
                        <img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/fashion18.jpg" alt="">
                        <div class="tittle">
                            <p>Thời Trang Nam</p>
                            <a href="#">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="box-top box-right">
                        <div class="box-top2">
                            <div class="bg">
                                <img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/fashion21.jpg" alt="">
                                <div class="tittle">
                                    <p>Túi xách </p>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="box-top2">
                            <div class="bg">
                                <img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/fashion22.jpg" alt="">
                                <div class="tittle">
                                    <p>Nón</p>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-bottom box-right">
                        <div class="bg">
                            <img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/fashion5.jpg" alt="">
                            <div class="tittle">
                                <p>Thời Trang Nữ</p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trending">
        <div class="container">
            <div class="section-tittle flex">
                <div class="flex"><span></span></div>
                <div data-tilt class="content  flex">
                    <h2>TRENDING</h2>
                    <p>Top view in week</p>
                </div>
                <div class="flex"><span></span></div>
            </div>
            <?php
            require_once($data['main'] . '.php');
            ?>
        </div>
    </section>
    <section class="banner">
        <div class="banner-inner">

            <div data-tilt class="banner-box banner-colection po">

                <div class="banner-img">
                    <img src="<?php echo URL_LAYOUT ?>img/product/bg1.jpg" alt="">
                </div>
                <div class="content flex">
                    <a href="#" class="tittle">
                        <h2>LOOKBOOK 2021</h2>
                        <p>MAKE LOVE THIS LOOKK</p>
                    </a>
                </div>
            </div>

            <div data-tilt class="banner-box banner-season po">

                <div class="banner-img">
                    <img src="<?php echo URL_LAYOUT ?>img/product/bg2.jpg" alt="">
                </div>
                <div class="content flex">
                    <a href="#" class="tittle">
                        <p>SUMMER SALE</p>
                        <h1>UP TO 70%</h1>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="section-tittle flex">
                <div class="flex"><span></span></div>
                <div class="content  flex">
                    <h2>LATES FROM BLOG</h2>
                    <p>The freshest and most exciting news</p>
                </div>
                <div class="flex"><span></span></div>
            </div>
            <div class="blog-content">
                <div class="blog-col">
                    <div class="img">
                        <a href="#">
                            <img src="<?php echo URL_LAYOUT ?>img/product/blog1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-post">
                        <div class="post-info">
                            <a href="#">Spring – Summer Trending 2020</a>
                            <p class="date-time">By <b>admin</b> on <b>April 6 , 2020</b></p>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nostrum deserunt velit repellat unde.
                                Aut, libero corporis odit reiciendis hic quos placeat mollitia iusto rerum. Ut debitis cum aspernatur
                                consequatur.</p>
                        </div>
                    </div>
                </div>
                <div class="blog-col">
                    <div class="img">
                        <a href="#">
                            <img src="<?php echo URL_LAYOUT ?>img/product/blog2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-post">
                        <div class="post-info">
                            <a href="#">Style for couple in summer season</a>
                            <p class="date-time">By <b>admin</b> on <b>April 6 , 2020</b></p>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nostrum deserunt velit repellat unde.
                                Aut, libero corporis odit reiciendis hic quos placeat mollitia iusto rerum. Ut debitis cum aspernatur
                                consequatur.</p>
                        </div>
                    </div>
                </div>
                <div class="blog-col">
                    <div class="img">
                        <a href="#">
                            <img src="<?php echo URL_LAYOUT ?>img/product/blog3.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-post">
                        <div class="post-info">
                            <a href="#">The Easiest Way to Break Out on Top</a>
                            <p class="date-time">By <b>admin</b> on <b>April 6 , 2020</b></p>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nostrum deserunt velit repellat unde.
                                Aut, libero corporis odit reiciendis hic quos placeat mollitia iusto rerum. Ut debitis cum aspernatur
                                consequatur.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

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
                        <li><a href="<?php echo URL . 'admin' ?>">ADMIN</a></li>
                    </ul>
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
<script src="./main.js"></script>
<style>
    button.swal-button.swal-button--confirm:hover {
        color: #fff !important;
        background: #a59fa5 !important;
    }

    button.swal-button.swal-button--confirm {
        background: #878085 !important;
        border: none !important;
    }
</style>

</script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script>
    $('a.addCart').click(function(e) {
        e.preventDefault();
        var href = $(this).attr("href");
        var soluong = $(this).attr("data-id");
        var name = $('#name').val();
        if (name == 0) {
            swal("Bạn chưa đăng nhập ", "Hãy đăng nhập trước khi mua hàng", "warning");

        } else {
            if (soluong > 0) {
                $.ajax({
                    url: href,
                    type: 'GET',
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

    })


    $('a.logout').click(function(event) {
        event.preventDefault();
        var href = $(this).attr("href");
        $.ajax({
            url: href,
            type: "GET",
            data: {},
            success: function() {
                //  $("#login").load("http://localhost/PHP/DOAN-CARONO/ #login1");
                location.reload(true);
            }
        })
    })
</script>

</html>