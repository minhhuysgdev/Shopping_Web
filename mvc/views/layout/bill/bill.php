<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">
    <title>THÔNG TIN CÁ NHÂN</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Upload Photo Like FB DP</title>
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/hoadon.css">
    <style>
        .ngayhd {

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

    <section id="bill" style="margin-top:10%">
        <div class="container bill-content">
            <div class="body side">
                <div class="side">
                    <div class="left-side">
                        <div class="title">

                            <?php
                            if (isset($data['banghoadon'])) {
                            ?>
                                <i style=" padding-bottom: 5px;" class="fas fa-file-invoice"></i>
                            <?php }
                            ?>
                            <h2>

                                <?php
                                if (isset($data['banghoadon'])) {
                                    $cut = explode(' ', $data['banghoadon'][0]['ngayhoadon']);
                                    echo "Hóa đơn ngày : ";
                                    print_r("<span class=" . 'ngayhd' . ">$cut[0]</span>");
                                }
                                ?>
                            </h2>
                        </div>
                        <?php
                        if (isset($data['banghoadon'])) {
                        ?>
                            <div class="table-overflow" style="overflow-x: auto;">
                                <table cellpadding="0" class="table-bill">
                                    <tr>
                                        <th>SHD</th>

                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Tổng số tiền </th>
                                        <th>Lưu ý với shop </th>
                                        <th>Trạng thái</th>
                                        <th>Hủy đơn</th>
                                    </tr>
                                    <?php
                                    foreach ($data['banghoadon'] as $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $value['sohoadon'] ?></td>
                                            <td><?php echo $data['customerfromhoadon']['ten'] ?></td>
                                            <td style=" color: #f74c4c;"><?php echo $value['sodienthoai'] ?></td>
                                            <td><?php echo $value['diachi'] ?></td>
                                            <td style=" color: #f74c4c;"><?php echo number_format($value['trigia'], 0, ',', '.') . 'đ'; ?></td>
                                            <td><?php echo $value['note'] ?></td>
                                            <td>
                                                <?php

                                                if ($value['status'] == 0) {
                                                ?>
                                                    <span style="color: #bf0000;" class="labl text-center"><i style="font-size: 20px;width: 100%;font-weight: 600;" class="fas fa-tasks"></i></span>
                                                <?php
                                                } else if ($value['status'] == 1) {
                                                ?>
                                                    <span style="color: #ad81a4;" class="labl text-center"><i style="font-size: 20px;width: 100%;font-weight: 600;" class="fas fa-edit"></i></span>
                                                <?php
                                                } else if ($value['status'] == 2) {
                                                ?>
                                                    <span style="color: #0f5e7c;" class="labl text-center"><i style="font-size: 20px;width: 100%;font-weight: 600;" class="fas fa-shipping-fast"></i></span>
                                                <?php
                                                } else if ($value['status'] == 3) {
                                                ?>
                                                    <span style="color: green;" class="labl text-center"><i style="font-size: 20px;width: 100%;font-weight: 600;" class="fas fa-check"></i></span>
                                                <?php
                                                }
                                                ?>
                                            </td>

                                            <td>

                                                <a class="deletebill" data-id="<?php echo $value['sohoadon'] ?>" href="<?php //echo URL . 'bill/deletehoadonFromkh/' . $value['sohoadon'] 
                                                                                                                        ?>">
                                                    <span style="color: orange;"><i class="fa fa-trash"></i></span>
                                                    <input type="hidden" class="status<?php echo $value['sohoadon'] ?>" value="<?php echo $value['status'] ?>">
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else if (isset($data['thongbao'])) {
                                    ?>
                                    <table cellpadding="0">
                                        <tr>
                                            <th>THÔNG BÁO !</th>
                                        </tr>
                                        <tr>
                                            <td style="color: red;"><?php echo $data['thongbao'] ?></td>

                                        </tr>

                                    <?php
                                }
                                    ?>
                                    </table>
                            </div>
                    </div>

                    <div class="right-side">
                        <div class="profile">
                            <h1 class="customer-name">
                                <?php echo $data['customerfromhoadon']['ho'] . ' ' . $data['customerfromhoadon']['ten'] ?>
                                <button class="icon-edit-info">
                                    <i class="fas fa-user-edit"></i>
                                </button>
                            </h1>
                            <div class="profile-pic-div">
                                <img src="<?php echo URL_LAYOUT . 'img/cus/' . $data['customerfromhoadon']['image'] ?>" id="photo">
                            </div>
                            <div class="email">
                                <p><i class="fa fa-envelope" aria-hidden="true" style="margin-right: 5px;"></i>Email: <?php echo $data['customerfromhoadon']['email'] ?></p>

                            </div>
                        </div>
                        <div class="pop-up dn">
                            <div class="body">
                                <header>
                                    <button class="bt-back bt-back-hide">
                                        <i class="fas fa-arrow-left"></i>
                                    </button>
                                    <h1>Cập nhật thông tin</h1>
                                    <button class="bt-close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </header>
                                <div class="info-form ">
                                    <div class="select flex">
                                        <button class="bt-edit">Cập nhật thông tin</button>
                                        <button class="bt-update">Thay đổi mật khẩu</button>
                                    </div>
                                    <form class="form-1 flex dn" action="<?php echo URL . 'customer/edit' ?>" method="post" enctype="multipart/form-data">
                                        <div>
                                            <input value="<?php echo $data['customerfromhoadon']['id'] ?>" type="hidden" name="id" id="id">
                                        </div>
                                        <div class="text-field">
                                            <label for="">Họ</label>
                                            <input value="<?php echo $data['customerfromhoadon']['ho'] ?>" type="text" name="ho_kh" id="ho_kh">
                                        </div>
                                        <div class="text-field">
                                            <label for="">Tên</label>
                                            <input value="<?php echo $data['customerfromhoadon']['ten'] ?>" type="text" name="ten_kh" id="ten_kh">
                                        </div>
                                        <div class="text-field">
                                            <label for="">Email</label>
                                            <input value="<?php echo $data['customerfromhoadon']['email'] ?>" type="text" name="email_kh" id="email_kh">
                                        </div>
                                        <div class="text-field">
                                            <label for="">Địa chỉ</label>
                                            <input value="<?php echo $data['customerfromhoadon']['diachi'] ?>" type="text" name="diachi_kh" id="diachi_kh">
                                        </div>
                                        <div class="text-field">
                                            <label for="">Số điện thoại</label>
                                            <input value="<?php echo $data['customerfromhoadon']['sodienthoai'] ?>" type="text" name="sdt_kh" id="sdt_kh">
                                        </div>
                                        <div class="text-field">
                                            <label for="">Ảnh đại diện</label>
                                            <input type="file" name="img" id="img_kh">
                                        </div>

                                        <div class="text-field">
                                            <label for="">Xác Nhận MK</label>
                                            <input type="password" name="Pass_Kh" id="Pass_Kh">
                                        </div>
                                        <div class="bt-submit flex">
                                            <input type="submit" value="Xác Nhận" name="editkh" id="editkh">
                                        </div>
                                    </form>
                                    <form class="form-2 flex dn" action="<?php echo URL . 'customer/editpass' ?>" method="post">
                                        <div>
                                            <input value="<?php echo $data['customerfromhoadon']['id'] ?>" type="hidden" name="idcus" id="idcus">
                                        </div>
                                        <div class="text-field">
                                            <label for="">Mật khẩu :</label>
                                            <input type="password" name="matkhaucu" id="matkhaucu">
                                        </div>
                                        <div class="text-field">
                                            <label for="">Mật khẩu mới :</label>
                                            <input type="password" name="matkhaumoi" id="matkhaumoi">
                                        </div>
                                        <div class="text-field">
                                            <label for="">Nhập lại mật khẩu :</label>
                                            <input type="password" name="xacnhanmatkhau" id="xacnhanmatkhau">
                                        </div>
                                        <div class="bt-submit flex">
                                            <input type="submit" value="Xác Nhận" name="editpass" id="editpass">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script src="<?php echo URL_LAYOUT ?>js/hoadon.js"></script>
    <script>
        // TODO: XÓA HÓA ĐƠN CỦA KHÁCH HÀNG ( ÂN )

        $(document).ready(function() {
            $('.deletebill').on('click', function(e) {
                e.preventDefault();
                // var href = $(this).attr("href");

                var data = 'run';
                var shd = $(this).attr("data-id");
                var status = $('.status' + shd + '').val();
                var href = "http://localhost/PHP/DOAN-CARONO/bill/deletehoadonFromkh/" + shd;

                if (status == 1) {
                    swal("Đơn hàng đang được xử lý ");
                } else if (status == 2) {
                    swal("Đơn hàng của bạn đang được giao");
                } else if (status == 3) {
                    swal("Đơn hàng của bạn đã giao ");
                } else {
                    $.ajax({
                        url: href,
                        type: 'POST',
                        data: {
                            data: data
                        },
                        success: function(res) {
                            swal("Bạn đã xóa thành công ", "Xem thêm sản phẩm mới của CARONO");
                            $(".bill-content").load("http://localhost/PHP/DOAN-CARONO/bill/index .bill-content");
                        }
                    })
                }
            })
            //todo js of y
            $(".icon-edit-info").click(function(e) {
                $(".pop-up").removeClass("dn");
            });
            $(".bt-close").click(function(e) {
                $(".pop-up").addClass("dn");
            });
            //
            $("button.bt-edit").click(function(e) {
                $(this).parent().addClass("dn");
                $("form.form-1").removeClass("dn");
                $(".bt-back").removeClass("bt-back-hide");
            });
            $("button.bt-update").click(function(e) {
                $(this).parent().addClass("dn");
                $("form.form-2").removeClass("dn");
                $(".bt-back").removeClass("bt-back-hide");
            });
            $("button.bt-back").click(function(e) {
                $(this).addClass("bt-back-hide");
                $(".form-1,form-2").addClass("dn");
                $(".select").removeClass("dn");
            });


        });
    </script>
</body>

</html>