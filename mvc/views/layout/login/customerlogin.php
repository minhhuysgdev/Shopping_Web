<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">
    <title>CUSTOMER LOGIN</title>

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
    color: #111 !important;
    width: 100%;
    margin-bottom: 20px;
    font-weight: 600;
}
   .wrapper input[type=email]::placeholder
   {
   	color: #111;
   }
   

    </style>
</head>
<body style="background-image:url('<?php echo URL_LAYOUT ?>img/product/background.jpg')">	

	<section class="login">
		<div class="wrapper">
			<form method="post" action="<?php echo URL.'logincustomer'?>">
				<h1 style="color: #111">Customer Login</h1>
                <p style="text-align: center;color:red">
                <?php 
                if(isset($_SESSION["thongbao"])){ echo $_SESSION["thongbao"]; unset($_SESSION["thongbao"]);}
                ?>
                </p>
				<input type="email" placeholder="email" name="email">
				<input type="password" placeholder="Password" name="password">
				<input type="submit" name="logincus" value="Sign in" style="color: #fff; background-color: #111111;">
			</form>
			<div class="bottom-text">
				<input type="checkbox" name="remember" checked="checked"> <p style="color: #111">Remember me</p>
				<a href="#" style="color: #111"> Forgot Password?</a>
			</div>
			<div class="sign_up">
				<p style="color: #111">Don't have an account ?</p>
				<a href="<?php echo URL.'logincustomer/register'?>">Sign up</a>
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