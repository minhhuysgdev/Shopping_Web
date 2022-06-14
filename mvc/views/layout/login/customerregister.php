<!DOCTYPE html>
<html>

<head>
<link rel="icon" href="<?php echo URL_LAYOUT . 'img/product/carono1.jpg' ?>">
    <title>CUSTOMER REGISTER</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style type="text/css">
        body,
        html {
            font-family: "Poppins", sans-serif;
        }
        .wrapper input[type=submit]:hover
            {
        color: #fff;
        background-color: #111111;
        }
    </style>
</head>

<body style="background-image:url('<?php echo URL_LAYOUT ?>img/product/background.jpg')">	
    <section class="login">
        <div class="wrapper" style="height: 520px;">
            <form method="post">
                <h1 style="color: #111111;">Customer Register</h1>
                <input type="text" placeholder="email" name="mail">
                <input type="password" placeholder="Password" name="pass">
                <input type="text" placeholder="Phone Number" name="phone">
                <input type="text" placeholder="Adress" name="adress">
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="SurName" name="surname">
                <input type="date" placeholder="Date Add" name="dateadd">
            
                <span> <input type="submit" name="register" value="register" style="color: #fff; background-color: #111111; margin-top: 30px;">
            
            </form>

        </div>

    </section>
</body>

</html>