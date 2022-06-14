<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">
    <link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">
    <title>LIÊN HỆ VỚI CARONO</title>




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
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/contact.css" />

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
                        <a class="active" href="<?php echo URL . "layout/index" ?>">TRANG CHỦ</a>
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
                    <li class="menu-item"><a class="active active1" href="#">LIÊN HỆ</a></li>
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
    <section class="contact">
        <div class="contact-tittle">
            <h1>Contact us</h1>
        </div>
        <div class="contact-info">
            <div class="contact-info-item">
                <div class="icon"> <i class="fas fa-home"></i></div>
                <p class="item-tittle">ADDRESS</p>
                <p class="content">Tx An Nhơn , Tỉnh Bình Định</p>
            </div>
            <div class="contact-info-item">
                <div class="icon"><i class="fas fa-phone"></i></div>
                <p class="item-tittle">PHONE</p>
                <p class="content">+84 37-232-2342</p>
            </div>
            <div class="contact-info-item">
                <div class="icon"><i class="fas fa-envelope"></i></div>
                <p class="item-tittle">EMAIL</p>
                <p class="content">caronobrand@gmail.com</p>
            </div>
        </div>
        <div class="contact-form">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d791.0424475271901!2d109.09014313138569!3d13.892221004064233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f3dfda886e1a9%3A0xf4a6089874baff1f!2zVHguIEFuIE5oxqFuLCBOaMahbiBLaMOhbmgsIEFuIE5oxqFuLCBCw6xuaCDEkOG7i25oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1625493258973!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <form action="">
                <div class="text-field">
                    <input type="text" placeholder="Họ và tên" id="tenCus">
                </div>
                <div class="text-field">
                    <input type="text" placeholder="Email" id="emailCus">
                </div>
                <div class="text-field">
                    <input type="text" placeholder="Subject" id="subject">
                </div>
                <div class="text-field">
                    <input type="text" placeholder="Message" id="note">
                </div>
                <div class="text-field">
                    <input type="submit" placeholder="SEND MESSAGE" id="nopcontact">
                </div>
            </form>

           
        </div>
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

<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
<script src="./main.js"></script>
<style>
    .swal-text {
        color: red;
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

    <script>
        $('#nopcontact').on('click', function(e) {
        alert('HỆ THỐNG ĐANG BẢO TRÌ , VUI LÒNG LIÊN HỆ SAU !');
          
        })
    </script>
</html>