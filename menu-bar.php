<?php require "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MENU</title>
    <link rel="stylesheet" href="assets/bootstrap/css/menu.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap">
    <style>
        .btn:hover {
            font-weight: bold;
        }
    </style>
    <script></script>
</head>

<body>
    <header style="height: 100px;color: rgb(0,0,0);background: #000000;">
    <img style="width: 200px;height: 100px;background: url(&quot;assets/img/logo111.png&quot;);" src="assets/img/logo111.png">
    <a href="index.php"><button class="btn btn-primary" type="button" style="font-size: 20px;width: 130px;height: 46px;border-radius: 0px;font-family: Montserrat, sans-serif;background: rgb(0,0,0);border-color: rgb(0,0,0);margin-left: 203px;position: absolute;margin-top: 26px;">HOME</button></a>
    <a href="services.php"><button class="btn btn-primary" type="button" style="font-size: 20px;width: 130px;height: 46px;border-radius: 0px;font-family: Montserrat, sans-serif;background: rgb(0,0,0);border-color: rgb(0,0,0);position: absolute;margin-top: 26px;margin-left: 336px;">SERVICES</button></a>
    <a href="book.php"><button class="btn btn-primary" type="button" style="font-size: 20px;width: 130px;height: 46px;border-radius: 0px;font-family: Montserrat, sans-serif;background: rgb(0,0,0);border-color: rgb(0,0,0);position: absolute;margin-top: 26px;margin-left: 463px;">BOOK</button></a>
    <a href="about.php"><button class="btn btn-primary" type="button" style="font-size: 20px;width: 130px;height: 46px;border-radius: 0px;font-family: Montserrat, sans-serif;background: rgb(0,0,0);border-color: rgb(0,0,0);position: absolute;margin-top: 26px;margin-left: 591px;">ABOUT</button></a>
    <a href="contact.php"><button class="btn btn-primary" type="button" style="font-size: 20px;width: 130px;height: 46px;border-radius: 0px;font-family: Montserrat, sans-serif;background: rgb(0,0,0);border-color: rgb(0,0,0);position: absolute;margin-top: 26px;margin-left: 720px;">CONTACT</button></a>
    <?php if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    echo '<a href="register.php"><button class="btn btn-primary" type="button" style="font-size: 20px;width: 146px;height: 46px;border-radius: 0px;font-family: Montserrat, sans-serif;background: rgb(255,255,255);color: rgb(0,0,0);border-color: rgb(255,255,255);margin-left: 895px;font-weight: bold;position: absolute;margin-top: 26px;padding: 0px;">REGISTER</button></a>';
    echo '<a href="login.php"><button class="btn btn-primary" type="button" style="font-size: 20px;width: 146px;height: 46px;border-radius: 0px;font-family: Montserrat, sans-serif;background: rgb(0,0,0);border-color: rgb(255,255,255);margin-left: 1068px;position: absolute;margin-top: 26px;">SIGN IN</button></a>';
    } 
    elseif ((isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'])) {
        echo '<a href="logout.php"><button class="btn btn-primary" type="button" style="font-size: 20px;width: 146px;height: 46px;border-radius: 0px;font-family: Montserrat, sans-serif;background: rgb(0,0,0);border-color: rgb(255,255,255);margin-left: 1068px;position: absolute;margin-top: 26px;">SIGN OUT</button></a>';
    }
    ?>
    </header>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>