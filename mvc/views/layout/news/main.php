<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/blog/blog.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/blog/diamond.css">



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



	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">


	<title>BLOG</title>
	</title>

</head>
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
				<li class="menu-item"><a class="active active1" href="<?php echo URL . 'layout/news' ?>">BLOG</a></li>
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
<section class="about-us">
	<div class="container">
		<div class="about-us-content">
			<div class="about-us-thumnail">
				<img src="<?php echo URL_LAYOUT ?>img/blog/about-img.jpg">
			</div>
			<div class="about-us-info">
				<div class="about-us-hastag">
					<span>#carono</span>

				</div>
				<div class="about-us-shortdesc">
					<p>Shop Thời Trang Carono với phương châm "Đồng hành cùng phong cách thời trang của bạn" sẽ là nơi mua sắm an toàn và uy tín, bởi chúng tôi luôn đề cao tiêu chí mang đến cho quý khách những sản phẩm chất lượng nhất với giá cả luôn phải chăng. </p>
				</div>
			</div>
		</div>
		<h2 class="about-us-heading">
			<span class="about-us-highlight">Câu Chuyện</span>về
			<span>Carono</span>
		</h2>
		<div class="about-us-description">
			<p>Câu chuyện được sinh ra từ tủ đồ của các cánh mày râu, nơi được cho là ‘1 màu’, ‘đơn điệu’ và ‘ít được chăm chút’. Bởi lẽ thực tế, việc mua sắm đối với các anh là không thường xuyên, ngại phải đi nhiều nơi để mua đủ những đồ mình muốn, đặc biệt là những món đồ cơ bản nhất. Coolmate hiểu được rằng những chiếc áo phông, đôi tất hay quần lót sẽ không bao giờ thiếu vắng trong tủ đồ và bằng chính sứ mệnh của mình, CoolMate sẽ dần thay đổi thói quen của các anh bằng cách thức mua hàng tiện lợi nhất và những sản phẩm chất lượng tốt nhất.</p>
			<a href="#" class="about-us-viewmore">Xem chi tiết <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</div>
	</div>
</section>
<section class="banner">

	<h1 style="font-size: 50px;">Best Seller</h1>
	<div class="diamond-grid">
		<div class="item"><img src="<?php echo URL_LAYOUT ?>img/blog/img1.jfif"></div>
		<div class="item"><img src="<?php echo URL_LAYOUT ?>img/blog/img2.jfif"></div>
		<div class="item"><img src="<?php echo URL_LAYOUT ?>img/blog/img3.jfif"></div>
		<div class="item"><img src="<?php echo URL_LAYOUT ?>img/blog/img4.jfif"></div>
		<div class="item"><img src="<?php echo URL_LAYOUT ?>img/blog/img5.jfif"></div>
		<div class="item"><img src="<?php echo URL_LAYOUT ?>img/blog/img6.jfif"></div>
		<div class="item"><img src="<?php echo URL_LAYOUT ?>img/blog/img7.jfif"></div>
		<div class="item"><img src="<?php echo URL_LAYOUT ?>img/blog/img8.jfif"></div>
		<div class="item"><img src="<?php echo URL_LAYOUT ?>img/blog/img14.jfif"></div>

	</div>
</section>

<section class="trend">
	<div class="container">
		<div class="title-trend title-line-below  title-line-above">
			<h2>Celebrity Style</h2>
		</div>
		<div class="row">

			<div class="col-lg-3 col-sm-12 ">
				<div class="summart-item-img">
					<img src="<?php echo URL_LAYOUT ?>img/blog/gd.jpg">
				</div>
				<div class="summart-item-content">
					<div class="link_a">
						<a href="#">Celebrity Style</a>
					</div>
					<div class="link_b">
						<a href="#" class="hed_link">
							<h3>G-Dragon trong phong cách mới</h3>
						</a>

					</div>
					<div class="author">
						<p>BY CHRISTIAN ALLAIRE</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12 ">
				<div class="summart-item-img">
					<img src="<?php echo URL_LAYOUT ?>img/blog/Pharrell-Williams.jpg">
				</div>
				<div class="summart-item-content">
					<div class="link_a">
						<a href="#">Celebrity Style</a>
					</div>
					<div class="link_b">
						<a href="#" class="hed_link">
							<h3>Pharrell Williams đeo trang sức răng 100 nghìn USD</h3>
						</a>

					</div>
					<div class="author">
						<p>BY CHRISTIAN ALLAIRE</p>
					</div>

				</div>
			</div>
			<div class="col-lg-3 col-sm-12">
				<div class="summart-item-img">
					<img src="<?php echo URL_LAYOUT ?>img/blog/celeb2.jpeg">
				</div>
				<div class="summart-item-content">
					<div class="link_a">
						<a href="#">Celebrity Style</a>
					</div>
					<div class="link_b">
						<a href="#" class="hed_link">
							<h3>Ariana Grande Puts a Versace Twist on Summer’s Key Color</h3>
						</a>
					</div>
					<div class="author">
						<p>BY CHRISTIAN ALLAIRE</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12 ">
				<div class="summart-item-img">
					<img src="<?php echo URL_LAYOUT ?>img/blog/Harry.jpg">
				</div>
				<div class="summart-item-content">
					<div class="link_a">
						<a href="#">Celebrity Style</a>
					</div>
					<div class="link_b">
						<a href="#" class="hed_link">
							<h3>Harry trở lại Ý với phong cách mùa hè mát mẻ</h3>
						</a>

					</div>
					<div class="author">
						<p>BY CHRISTIAN ALLAIRE</p>
					</div>
				</div>
			</div>
		</div>
</section>
<section class="trend">
	<div class="container">
		<div class="title-trend title-line-below  title-line-above">
			<h2>Trends</h2>
		</div>
		<div class="row">

			<div class="col-lg-3 col-sm-12 ">
				<div class="summart-item-img">
					<img src="<?php echo URL_LAYOUT ?>img/blog/trend1.jpg">
				</div>
				<div class="summart-item-content">
					<div class="link_a">
						<a href="#">Trend</a>
					</div>
					<div class="link_b">
						<a href="#" class="hed_link">
							<h3>Menswear! Street Style! A Look Back at the Trends From the Last IRL Men’s Shows</h3>
						</a>

					</div>
					<div class="author">
						<p>BY CHRISTIAN ALLAIRE</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12 ">
				<div class="summart-item-img">
					<img src="<?php echo URL_LAYOUT ?>img/blog/trend2.jpg">
				</div>
				<div class="summart-item-content">
					<div class="link_a">
						<a href="#">Trend</a>
					</div>
					<div class="link_b">
						<a href="https://vnexpress.net/nhung-y-tuong-phoi-do-nhuom-tie-dye-4284836.html" class="hed_link">
							<h3> Tuần lễ thời trang Sydney, 4 xu hướng nổi bật vào mùa hè</h3>
						</a>

					</div>
					<div class="author">
						<p>BY CHRISTIAN ALLAIRE</p>
					</div>

				</div>
			</div>
			<div class="col-lg-3 col-sm-12">
				<div class="summart-item-img">
					<img src="<?php echo URL_LAYOUT ?>img/blog/trend3.jpg">
				</div>
				<div class="summart-item-content">
					<div class="link_a">
						<a href="#">Trend</a>
					</div>
					<div class="link_b">
						<a href="https://vnexpress.net/nhung-kieu-vay-cuoi-hot-nam-2021-4275685.html" class="hed_link">
							<h3> Thời trang đường phố được yêu thích nhất ở lễ hội thời trang Sydney 2022</h3>
						</a>
					</div>
					<div class="author">
						<p>BY CHRISTIAN ALLAIRE</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12 ">
				<div class="summart-item-img">
					<img src="<?php echo URL_LAYOUT ?>img/blog/trend4.png">
				</div>
				<div class="summart-item-content">
					<div class="link_a">
						<a href="#">Trend</a>
					</div>
					<div class="link_b">
						<a href="#" class="hed_link">
							<h3>Những kiểu túi hot Xuân Hè 2021</h3>
						</a>

					</div>
					<div class="author">
						<p>BY CHRISTIAN ALLAIRE</p>
					</div>
				</div>
			</div>
		</div>
</section>
<section class="best-of-post">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-12 best-box">
				<div class="img-box">
					<img src="<?php echo URL_LAYOUT ?>img/blog/portugal.jpg">
				</div>
				<div class="hovered">
					<div class="detail">
						<h3>5 ways to feel more confident</h3>
						<div class="excerpt">
							<span>"</span>
							Confidence comes in waves, but it’s something I...
							<span>"</span>
						</div>
						<span href="#" class="btn1">View the post</span>
					</div>

				</div>
			</div>
			<div class="col-lg-3 col-sm-12 best-box">
				<div class="img-box">
					<img src="<?php echo URL_LAYOUT ?>img/blog/port.jpg">
				</div>
				<div class="hovered">
					<div class="detail">
						<h3>5 ways to feel more confident</h3>
						<div class="excerpt">
							<span>"</span>
							Confidence comes in waves, but it’s something I...
							<span>"</span>
						</div>
						<span href="#" class="btn1">View the post</span>
					</div>

				</div>
			</div>
			<div class="col-lg-3 col-sm-12 best-box">
				<div class="img-box">
					<img src="<?php echo URL_LAYOUT ?>img/blog/paris.jpg">
				</div>
				<div class="hovered">
					<div class="detail">
						<h3>5 ways to feel more confident</h3>
						<div class="excerpt">
							<span>"</span>
							Confidence comes in waves, but it’s something I...
							<span>"</span>
						</div>
						<span href="#" class="btn1">View the post</span>
					</div>

				</div>
			</div>
			<div class="col-lg-3 col-sm-12 best-box">
				<div class="img-box">
					<img src="<?php echo URL_LAYOUT ?>img/blog/port2.jpg">
				</div>
				<div class="hovered">
					<div class="detail">
						<h3>5 ways to feel more confident</h3>
						<div class="excerpt">
							<span>"</span>
							Confidence comes in waves, but it’s something I...
							<span>"</span>
						</div>
						<span href="#" class="btn1">View the post</span>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<div class="tip">
	<div class="container">
		<div class="row">

			<div class="col-lg-4 tip-left">
				<img src="<?php echo URL_LAYOUT ?>img/blog/blog1.jpg">
			</div>
			<div class="col-lg-4 tip-right">
				<div class="content">
					<h1>Tuyệt chiêu phối đồ cực chất cùng giày da nam </h1>
					<div class="excerpt">

					</div>
					<div class="read-story-wrapper">
						<a href="#" class="read-story">Read Story</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="tip">
	<div class="container">
		<div class="row">

			<div class="col-lg-4 tip-left">
				<img src="<?php echo URL_LAYOUT ?>img/blog/blog2.jpeg">
			</div>
			<div class="col-lg-4 tip-right">
				<div class="content">
					<h1>Áo sơ mi Flannel - Item kinh điển cho phong cách Layering</h1>
					<div class="excerpt">

					</div>
					<div class="read-story-wrapper">
						<a href="#" class="read-story">Read Story</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="tip">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 tip-left">
				<img src="<?php echo URL_LAYOUT ?>img/blog/tip1.jpg">
			</div>
			<div class="col-lg-4 tip-right">
				<div class="content">
					<h1>Top 5 địa chỉ mua giày da nam cao cấp tại Hà Nội cực uy tín</h1>
					<div class="excerpt">

					</div>
					<div class="read-story-wrapper">
						<a href="#" class="read-story">Read Story</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="tip">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 tip-left">
				<img src="<?php echo URL_LAYOUT ?>img/blog/tip2.jpg">
			</div>
			<div class="col-lg-4 tip-right">
				<div class="content">
					<h1>Top 7 "tuyệt chiêu" chọn giày da nam chất lượng và phù hợp nhất</h1>
					<div class="excerpt">

					</div>
					<div class="read-story-wrapper">
						<a href="#" class="read-story">Read Story</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="tip">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 tip-left">
				<img src="<?php echo URL_LAYOUT ?>img/blog/tip3.jpg">
			</div>
			<div class="col-lg-4 tip-right">
				<div class="content">
					<h1>Cách phối sơ mi và quần jean nữ: Mặc cho chuẩn Diện thật đẹp</h1>
					<div class="excerpt">

					</div>
					<div class="read-story-wrapper">
						<a href="#" class="read-story">Read Story</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="tip">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 tip-left">
				<img src="<?php echo URL_LAYOUT ?>img/blog/tip4.jpg">
			</div>
			<div class="col-lg-4 tip-right">
				<div class="content">
					<h1>Bật mí 12 cách mặc váy suông đẹp giúp bạn nữ toả sáng</h1>
					<div class="excerpt">

					</div>
					<div class="read-story-wrapper">
						<a href="#" class="read-story">Read Story</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<section>

	<button class="bt-top dn"><i class="fas fa-arrow-up"></i></button>

</section>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.js"></script>

<script src="<?php echo URL_LAYOUT ?>js/shoppingJS.js"></script>
<script src="<?php echo URL_LAYOUT ?>/fontawesome-free-5.15.3-web/js/all.js"></script>
<script type="text/javascript" src="<?php echo URL_LAYOUT ?>js/blog/jquery.diamonds.js"></script>

<script type="text/javascript">
	$(".diamond-grid").diamonds({
		size: 170, // Size of diamonds in pixels. Both width and height. 
		gap: 5, // Pixels between each square.
		hideIncompleteRow: false, // Hide last row if there are not enough items to fill it completely.
		autoRedraw: true, // Auto redraw diamonds when it detects resizing.
		itemSelector: ".item" // the css selector to use to select diamonds-items.
	});
</script>
</body>

</html>