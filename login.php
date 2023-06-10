<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign in</title>
    <?php include 'menu-bar.php'; ?>
    <link rel="stylesheet" href="assets/bootstrap/css/signin.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
</head>

<body style="background: #1c1b1b;height: 1000px;">
    <h1 style="font-family: Montserrat, sans-serif;font-weight: bold;color: rgb(255,255,255);margin: 0px;margin-top: 65px;margin-left: 106px;">SIGN IN</h1>
    <div style="width: 1300px;margin-top: 42px;margin-left: 106px;border-width: 1px;border-color: rgb(255,255,255);border-bottom: 1px solid rgb(255,255,255) ;"></div>
    <div class="container" style="width: 700px;height: 623px;margin-top: 41px;margin-right: 406px;margin-left: 406px;color: rgb(0,0,0);background: #000000;">
        <form action='attempt-login.php' method="POST">
            <label class="form-label" style="font-family: Montserrat, sans-serif;font-size: 20px;color: rgb(255,255,255);margin-top: 126px;margin-left: 75px;">Email Address
                <input class="form-control" type="text" style="width: 550px;height: 58px;border-radius: 15px;font-family: Montserrat, sans-serif;font-size: 20px;color: rgb(255,255,255);background: #3b3b3b;border-width: 0px;margin-top: 10px;" name="email_address" placeholder="Enter your email address">
                </label>
            <label class="form-label" style="font-family: Montserrat, sans-serif;font-size: 20px;color: rgb(255,255,255);margin-top: 31px;margin-left: 75px;">Password
                <input class="form-control" type="text" style="width: 550px;height: 58px;border-radius: 15px;font-family: Montserrat, sans-serif;font-size: 20px;color: rgb(255,255,255);background: #3b3b3b;border-width: 0px;margin-top: 10px;" name="password" placeholder="Enter your password">
                </label>
            <button class="btn btn-primary" type="submit" style="width: 550px;height: 77px;border-radius: 0px;border-width: 0px;background: rgb(255,255,255);color: rgb(0,0,0);font-weight: bold;font-family: Montserrat, sans-serif;font-size: 20px;margin-left: 75px;margin-top: 79px;">SIGN IN</button>
        </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <div style="margin-top: 200px;"></div>
    <?php include 'footer.php'; ?>
</body>

</html>