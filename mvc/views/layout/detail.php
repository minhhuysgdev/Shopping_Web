<!DOCTYPE html>
<html>

<head>
	<link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">
	<title>CHI TIẾT SẢN PHẨM</title>

	<!-- Font Awesome, Style -->
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/smoothproducts.css">



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




	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo URL_LAYOUT ?>/fontawesome-free-5.15.3-web/js/all.js"></script>
	<script src="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.js"></script>
	<script src="<?php echo URL_LAYOUT ?>js/shoppingJS.js"></script>



	<link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingHeader.css" />
	<link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingFooter.css" />
	<link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingMain.css" />
	<link rel="stylesheet" href="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.css" />



	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<style type="text/css">
		.navigation>.logo>a>p {
			font-size: 35px;
			font-weight: 900;
			letter-spacing: 10px;
			font-family: "Charmonman", cursive;
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

		textarea {
			resize: none;
		}

		.sp-wrap.sp-non-touch {
			max-width: 350px;
		}

		.sp-large {
			width: 100%;
		}

		.like>button {
			font-size: 18px;
			color: blue;
			border: none;
			outline: none;
			background: transparent;
		}

		.like>button>svg {
			cursor: pointer;
		}

		.cl-red {
			color: red !important;
		}

		.comment-detail {
			justify-content: center;
			padding-bottom: 30px;
		}

		.comment-left {
			width: 90%;
			padding-bottom: 0 !important;
		}

		.comment-right {
			width: 10%;
		}

		.comment-left,
		.comment-right {
			height: 100%;
		}

		.fa-star {
			color: orange;
		}

		@media only screen and (max-width: 480px) {
			.navigation {
				height: 120px !important;
			}

			.navigation .toggle-menu button {
				width: 35px !important;
				height: 35px !important;
				font-size: 35px !important;
			}

			.navigation>.logo>a>p {
				font-size: 35px !important;
				margin-top: 35px;
			}

			.navigation>.cart>.icon>a {
				font-size: 35px !important;
			}

			.sp-lightbox {
				height: 220%;
			}



			#sp-prev,
			#sp-next {
				position: absolute;
				top: 50%;
				margin-top: -25px;
				z-index: 501;
				color: #fff;
				padding: 14px;
				text-decoration: none;
				background: #111;
				border-radius: 50px;
				border: 2px solid #fff;
				width: 80px;
				height: 80px;
				box-sizing: border-box;
				transition: .2s;
			}

			#sp-prev {
				left: 50px;
			}

			#sp-next {
				right: 50px;
			}

			.news {
				overflow: hidden;
			}
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

	<section style="margin-top:5%">
		<div class="product-detail">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<div class="product-detail-left">

							<div class="sp-wrap">
								<a href="<?php echo URL_LAYOUT . 'img/product/' . $data['productDetail']['image1'] ?>"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data['productDetail']['image1'] ?>" alt=""></a>
								<a href="<?php echo URL_LAYOUT . 'img/product/' . $data['productDetail']['image2'] ?>"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data['productDetail']['image2'] ?>" alt=""></a>

							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12">
						<div class="product-detail-right">
							<h2 class="product-title"><?php echo  $data['productDetail']['tensanpham'] ?></h2>
							<div class="product-rating">
								<i class="fas fa-star "></i>
								<i class="fas fa-star "></i>
								<i class="fas fa-star "></i>
								<i class="fas fa-star "></i>
								<i class="fas fa-star-half-alt"></i>
								<span>4.7(21)</span>
							</div>
							<div class="product-price">
								<h3><?php echo number_format($data['productDetail']['gia'], 0, ',', '.') . ' đ';  ?></h3>
							</div>
							<div class="product-detail1">
								<a style="text-decoration:none" data-id="
								<?php
								if (isset($_SESSION['id_khachhang'])) {
									echo $_SESSION['id_khachhang'];
								} else {
									echo -1;
								}
								?>" class="addtoCart" href="<?php echo URL . 'cart/store/' . $data['productDetail']['id'] ?>">
									<button>
										<img src="<?php echo URL_LAYOUT ?>img/product/cart.png">
										<span>ADD TO CART</span>
									</button>
								</a>
								<div class="addtoList">
									<button type="submit" class="wishList">
										<i class="fa fa-heart"></i>
										<span>add to wish list</span>
									</button>
								</div>
								<ul class="Situation_product">
									<li id="in_stock">
										<span>product description :</span>
										<?php echo  $data['productDetail']['mieutasanpham'] ?>
									</li>
									<li>
										<span>product information :</span>
										<?php echo  $data['productDetail']['thongtinsanpham'] ?>
									</li>

								</ul>
							</div>
							<div class="social-links">
								<span>Share At:</span>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="#">
									<i class="fab fa-whatsapp"></i>
								</a>
								<a href="#">
									<i class="fab fa-pinterest"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="Description">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="product__details__tab">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Bình luận & Đánh giá</a>
							</li>


						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tabs-1" role="tabpanel">
								<div class="product__details__tab__desc tab_comment">
									<h1> <i class="fa fa-comment" aria-hidden="true"></i> Bình luận</h1>
									<div class="comment">
										<form method="post" id="myform">
											<div class="text-area">
												<h3 style="font-size: 18px;">Viết bình luận của bạn</h3>
												<h4 style="font-weight: 600; font-size: 18px;">Bạn đánh giá sản phẩm bao nhiêu sao?</h4>
												<div class="rating">
													<i class="fas fa-star fa-2x rating-star" style="color: #111;" data-index="0"></i>
													<i class="fas fa-star fa-2x rating-star" data-index="1"></i>
													<i class="fas fa-star fa-2x rating-star" data-index="2"></i>
													<i class="fas fa-star fa-2x rating-star" data-index="3"></i>
													<i class="fas fa-star fa-2x rating-star" data-index="4"></i>
												</div>
												<textarea placeholder="Viết bình luận..." name="binhluan" id="binhluan"></textarea>

											</div>
											<div>
												<input type="hidden" value="<?php echo  $data['khachhang']['id'] ?>" name="id_khachhang" id="id_khachhang">
												<input type="hidden" value="<?php echo  $data['khachhang']['ten'] ?>" name="tenkhachhang" id="tenkhachhang">
												<input type="hidden" value="<?php echo  $data['khachhang']['image'] ?>" name="anhkhach" id="anhkhach">
												<input type="hidden" value="" name="rating_khachhang" id="rating_khachhang">
												<input type="hidden" value="<?php echo   $data['productDetail']['id'] ?>" name="id_sanpham" id="id_sanpham">
												<input type="hidden" value="<?php date_default_timezone_set("Asia/Ho_Chi_Minh");
																			echo date("h:i:s") ?>" name="time" id="time">
											</div>
											<a id="dangbinhluan" class="btn-comment" href="<?php echo URL . 'comment/store' ?>" data_id="<?php
																																			if (isset($_SESSION['id_khachhang'])) {
																																				echo $_SESSION['id_khachhang'];
																																			} else {
																																				echo -1;
																																			}
																																			?>">
												<input type="button" value="Đăng bình luận " name="dangbinhluan">
											</a>
										</form>

										<div id="detail_comment">
											<?php

											foreach ($data['binhluankh'] as $value) {
												if ($value['id_sanpham'] == $data['productDetail']['id']) {

											?>
													<div class="comment-detail">
														<div class="comment-right">
															<img src="<?php echo URL_LAYOUT . 'img/cus/' . $value['image'] ?>">
														</div>
														<div class="comment-left">
															<div class="star">
																<?php
																if (($value['star_rating']) == 1) {
																?>
																	<i class="fas fa-star"></i>
																<?php
																} else 	if (($value['star_rating']) == 2) {
																?>
																	<i class="fas fa-star"></i><i class="fas fa-star"></i>
																<?php
																} else 	if (($value['star_rating']) == 3) {
																?>
																	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

																<?php
																} else 	if (($value['star_rating']) == 4) {
																?>
																	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

																<?php
																} else 	if (($value['star_rating']) == 5) {
																?>
																	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>


																<?php
																} else {
																}
																?>

															</div>
															<div class="comment-box">
																<span><?php echo $value['tenkhachhang'] ?></span>

																<p style="color:#444b52;"><?php echo $value['binhluan'] ?></p>
															</div>
															<div class="like-time">

																<div class="like">
																	<button class="blue" id="checkthatim<?php echo $value['id'] ?>" data_id="<?php echo $value['id'] ?>">
																		<i class="fab fa-gratipay" onclick="checklike(<?php echo $value['id'] ?>,<?php echo  $data['productDetail']['id'] ?>)"></i>
																		<span class="countlikes<?php echo $value['id'] ?>"><?php echo $value['likes'] ?></span>
																	</button>
																</div>
																<div class="time">
																	<span><?php echo $value['time']; ?></span>
																</div>
															</div>

														</div>
													</div>
											<?php
												}
											}
											?>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tabs-2" role="tabpanel">
								<div class="product__details__tab__desc">
									<h6>Products Infomation2</h6>

								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="news">
			<div class="title">
				<h3>Sản phẩm liên quan</h3>
			</div>
			<div class="owl-carousel ">
				<?php

				for ($i = 0; $i <= 10; $i++) {
				?>
					<div style="width: 200px;height:300px;" class="item"><img style="width: 100%;height:100%" src="<?php echo URL_LAYOUT . 'img/product/' .  $data['sanphamlienquan'][$i]['image1'] ?>"></div>

				<?php
				}
				?>
			</div>

		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<script src="<?php echo URL_LAYOUT ?>js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo URL_LAYOUT ?>js/jquery.cycle.js"></script>
	<script src="<?php echo URL_LAYOUT ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo URL_LAYOUT ?>js/smoothproducts.min.js"></script>
	<script src="<?php echo URL_LAYOUT ?>js/bootstrap.min.js"></script>

	<script>
		$("#sliderShuffle").cycle({
			next: '#next',
			prev: '#prev'
		});
		$('.owl-carousel').owlCarousel({
			items: 4,
			loop: true,
			margin: 15,
			autoplay: true,
			autoplayTimeout: 2000, //3 Second
			nav: true,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 3,
					nav: true
				},
				1000: {
					items: 4,
					nav: true
				}
			}

		});

		$(function() {


			$(".sp-wrap").smoothproducts();
		});
		var numbers = document.getElementById('box');
		for (var i = 0; i < 100; i++) {
			var span = document.createElement('span');
			span.textContent = i;
			numbers.appendChild(span);
		}
		var num = numbers.getElementsByTagName('span');
		var index = 0;

		function nextNum() {
			num[index].style.display = 'none';
			index = (index + 1) % num.length;
			num[index].style.display = 'initial';
		}

		function prevNum() {
			num[index].style.display = 'none';
			index = (index - 1 + num.length) % num.length;
			num[index].style.display = 'initial';
		}
		/*mobile*/
		var numbers = document.getElementById('box_mobile');
		for (var i = 0; i < 100; i++) {
			var span = document.createElement('span');
			span.textContent = i;
			numbers.appendChild(span);
		}
		var num = numbers.getElementsByTagName('span');
		var index = 0;

		function nextNum_mobile() {
			num[index].style.display = 'none';
			index = (index + 1) % num.length;
			num[index].style.display = 'initial';
		}

		function prevNum_mobile() {
			num[index].style.display = 'none';
			index = (index - 1 + num.length) % num.length;
			num[index].style.display = 'initial';
		}
	</script>
</body>


<script>
	$('.addtoCart').click(function(e) {
		e.preventDefault();
		var href = $(this).attr("href");
		var id = $(this).attr('data-id');
		if (id == -1) {
			
			swal("Đăng nhập trước khi mua bạn nhé !");

		} else {
			$.ajax({
				url: href,
				type: 'POST',
				data: {},
				success: function(res) {
					swal("Đã thêm vào giỏ", "Chúc quý khách mua hàng vui vẻ ", "success");
					$(".num_cart").load("http://localhost/PHP/DOAN-CARONO/ .num_cart");
				}
			});
		}


	})
	var ratedIndex = -1;
	$(document).ready(function() {
		resetStarColors();
		$('.rating-star').on('click', function() {

			ratedIndex = parseInt($(this).data('index'));

		});
		$('.rating-star').on('click', function() {
			resetStarColors();
			var currentIndex = parseInt($(this).data('index'));
			setStars(currentIndex);
			document.getElementById('rating_khachhang').value = currentIndex + 1;
		});
	});

	function setStars(max) {
		for (var i = 0; i <= max; i++)
			$('.rating-star:eq(' + i + ')').css('color', '#ea9d02');
	}

	function resetStarColors() {
		$('.rating-star').css('color', 'grey');
	}



	function checklike(idbinhluan, idsanpham) {
		var idbinhluan = idbinhluan;
		var idproduct = idsanpham;
		var classofp = $('#checkthatim' + idbinhluan).attr("class");
		var id_khachang = document.getElementById('dangbinhluan').getAttribute("data_id");
		if (id_khachang == -1) {
			swal(" Đăng nhập trước khi like bạn nhé ");
		} else {
			var check;
			if (classofp == "blue") {
				document.getElementById('checkthatim' + idbinhluan).classList.add("cl-red");
				document.getElementById('checkthatim' + idbinhluan).classList.remove("blue");
				check = 1;
			} else {
				document.getElementById('checkthatim' + idbinhluan).classList.remove("cl-red");
				document.getElementById('checkthatim' + idbinhluan).classList.add("blue");

				check = 0;
			}
			var valuecmt = check;
			console.log(check);

			var checklike = "like";
			var countlikes1 = '.countlikes' + idbinhluan;
			var countlikes2 = idproduct + ' .countlikes' + idbinhluan;
			var loadcountlikes = 'http://localhost/PHP/DOAN-CARONO/layout/detail/' + countlikes2;

			$.ajax({
				url: 'http://localhost/PHP/DOAN-CARONO/comment/like',
				type: 'POST',
				data: {
					checklike: checklike,
					valuecmt: valuecmt,
					idbinhluan: idbinhluan,
					idproduct: idproduct
				},
				success: function(res) {
					console.log(res);
					$(countlikes1).load(loadcountlikes);
				}
			});
		}

	}
</script>
<script>
	$('#dangbinhluan').click(function(e) {
		e.preventDefault();

		var id_khachhang = $(this).attr("data_id");
		var href = $(this).attr("href");
		var id_kh = $('#id_khachhang').val();
		var ten_kh = $('#tenkhachhang').val();
		var img = $('#anhkhach').val();
		var id_sp = $('#id_sanpham').val();
		var cmt = $('#binhluan').val();
		var time = $('#time').val();
		var rating = $('#rating_khachhang').val();;
		var comment = "guicomment";
		var comment_detail = id_sp + ' #detail_comment';
		var loadcomment = 'http://localhost/PHP/DOAN-CARONO/layout/detail/' + comment_detail;

		if (id_khachhang == -1) {
			swal("Đăng nhập trước khi bình luận bạn nhé ");

		} else {
			$.ajax({
				url: href,
				type: 'POST',
				data: {
					comment: comment,
					id_kh: id_kh,
					ten_kh: ten_kh,
					img: img,
					id_sp: id_sp,
					cmt: cmt,
					time: time,
					rating: rating,
				},
				success: function(res) {
					$("#detail_comment").load(loadcomment);
					$("#myform")[0].reset();
					resetStarColors();
				}
			});
		}

	})
</script>

</html>