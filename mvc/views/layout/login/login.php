<!DOCTYPE html>
<html>
<head>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL_LAYOUT?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style type="text/css">
    	body,html
    	{
    		font-family: "Poppins", sans-serif;
    	}
        .wrapper input[type=email] {
    border: none;
    font-size: 17px;
    border-bottom: 1px solid #d7d7d7;
    background: transparent;
    outline: none;
    height: 30px;
    opacity: 1;
    color: #28527a !important;
    width: 100%;
    margin-bottom: 20px;
    font-weight: 600;
}
    </style>
</head>
<body style="background-image:url('<?php echo URL_LAYOUT ?>img/product/background.jpg')">	

	<section class="login">
		<div class="wrapper">
			<form method="post">
				<h1>Admin Login</h1>
                <p style="text-align: center;color:red">
                <?php 
                if(isset($_SESSION["thongbao"])){ echo $_SESSION["thongbao"]; unset($_SESSION["thongbao"]);}
                ?>
                </p>
				<input type="text" placeholder="email" name="username">
				<input type="password" placeholder="Password" name="password">
				<input type="submit" name="login" value="Sign in">
			</form>
			<div class="bottom-text">
				<input type="checkbox" name="remember" checked="checked"> <p>Remember me</p>
				<a href="#"> Forgot Password?</a>
			</div>
			
			<div class="social">
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-youtube"></i></a>
			</div>
		</div>

	</section>
</body>
</html>