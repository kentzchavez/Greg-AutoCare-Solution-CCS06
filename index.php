<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <?php include 'menu-bar.php'; ?>
    <link rel="stylesheet" href="assets/bootstrap/css/home.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900&amp;display=swap">
</head>

<body>
    <div class="row" style="width: 1512px;height: 650px;background: url(&quot;assets/img/home-cat.png&quot;);background-size: contain;">
        <div class="col">
            <h1 style="font-size: 96px;font-family: Montserrat, sans-serif;font-weight: bold;width: 598px;margin-left: 64px;margin-top: 59px;margin-bottom: 0px;">GREG'S</h1>
            <h1 style="font-size: 48px;font-family: Montserrat, sans-serif;width: 598px;font-weight: bold;margin-left: 64px;margin-top: 0px;">AUTOCARE SOLUTIONS</h1>
            <p style="width: 573px;height: 62px;line-height: 19.5px;text-align: center;font-family: Montserrat, sans-serif;margin-left: 64px;--bs-body-font-weight: 500px;">Where the soul of automotive care meets the boundless creativity of our passionate team, driven by a genuine love for preserving and enhancing the beauty of every vehicle.</p>
            <p style="width: 573px;height: 20px;line-height: 19.5px;text-align: left;font-family: Montserrat, sans-serif;margin-left: 64px;--bs-body-font-weight: 500px;font-size: 20px;margin-bottom: 0px;margin-top: 46px;"><strong>Detailing</strong></p>
            <p style="width: 573px;height: 20px;line-height: 19.5px;text-align: left;font-family: Montserrat, sans-serif;margin-left: 64px;--bs-body-font-weight: 500px;font-size: 20px;margin-bottom: 0px;margin-top: 0px;"><strong>Window Tint</strong></p>
            <p style="width: 573px;height: 20px;line-height: 19.5px;text-align: left;font-family: Montserrat, sans-serif;margin-left: 64px;--bs-body-font-weight: 500px;font-size: 20px;margin-bottom: 0px;margin-top: 0px;"><strong>Ceramic Coating</strong></p>
            <p style="width: 573px;height: 20px;line-height: 19.5px;text-align: left;font-family: Montserrat, sans-serif;margin-left: 64px;--bs-body-font-weight: 500px;font-size: 20px;margin-bottom: 0px;margin-top: 0px;"><strong>Paint Correction</strong></p>
            <p style="width: 573px;height: 20px;line-height: 19.5px;text-align: left;font-family: Montserrat, sans-serif;margin-left: 64px;--bs-body-font-weight: 500px;font-size: 20px;margin-bottom: 0px;margin-top: 0px;"><strong>Paint Protection Film</strong></p>
            <?php if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    echo '<p style="width: 573px;height: 20px;line-height: 19.5px;text-align: left;font-family: Montserrat, sans-serif;margin-left: 64px;--bs-body-font-weight: 500px;font-size: 16px;margin-bottom: 0px;margin-top: 45px;">Register now to book today</p>';            
    echo '<a href="register.php"><button class="btn btn-primary" type="button" style="width: 146px;height: 46px;margin-left: 64px;border-radius: 0px;background: rgb(0,0,0);border-color: var(--bs-btn-disabled-color);border-top-width: 0px;border-right-width: 0px;border-bottom-width: 0px;border-left-width: 0px;font-family: Montserrat, sans-serif;margin-top: 26px;">Register</button></a>';
    echo '<a href="login.php"><button class="btn btn-primary" type="button" style="width: 146px;height: 46px;margin-left: 13px;border-radius: 0px;background: rgb(255,255,255);font-family: Montserrat, sans-serif;margin-top: 26px;color: rgb(0,0,0);border-width: 1px;border-color: var(--bs-black);border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;">Sign In</button></a>';
    } 
    elseif ((isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'])) {
        echo '<p style="width: 573px;height: 20px;line-height: 19.5px;text-align: left;font-family: Montserrat, sans-serif;margin-left: 64px;--bs-body-font-weight: 500px;font-size: 16px;margin-bottom: 0px;margin-top: 45px;">'; echo "Welcome, " . $_SESSION['user']['fullname'] . '.</p>';
        echo '<a href="book.php"><button class="btn btn-primary" type="button" style="width: 146px;height: 46px;margin-left: 64px;border-radius: 0px;background: rgb(0,0,0);border-color: var(--bs-btn-disabled-color);border-top-width: 0px;border-right-width: 0px;border-bottom-width: 0px;border-left-width: 0px;font-family: Montserrat, sans-serif;margin-top: 26px;">Book Now</button></a>';
    } ?>
        </div>
    </div>
    <div class="row" style="height: 600px;width: 1512px;background: #000000;">
        <div class="col" style="height: 490px;margin-top: 44px;width: 491px;border-right: 1px solid rgb(149,149,149) ;">
            <h1 style="font-size: 64PX;font-family: Montserrat, sans-serif;width: 358px;font-weight: bold;margin-left: 72px;margin-top: 0px;color: rgb(255,255,255);">OUR SOUL</h1>
            <p style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;line-height: 19.5PX;width: 351px;margin-left: 72px;margin-top: 198px;">The importance of soul in Greg's Auto Care Services lies in our belief that every vehicle has a unique character and story. We strive to connect with the soul of each automobile, treating it with the respect and individuality it deserves, resulting in services that reflect the essence and personality of the vehicle.</p>
        </div>
        <div class="col" style="height: 490px;margin-top: 44px;width: 530PXpx;border-right: 1px solid rgb(149,149,149) ;">
            <h1 style="font-size: 64PX;font-family: Montserrat, sans-serif;width: 358px;font-weight: bold;margin-left: 60px;margin-top: 0px;color: rgb(255,255,255);margin-right: 76PX;">CREATIVITY</h1>
            <p style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;line-height: 19.5PX;width: 394px;margin-left: 60px;margin-top: 198px;margin-right: 76PX;">Creativity holds immense significance in Greg's Auto Care Services as it fuels our ability to innovate, push boundaries, and deliver customized solutions. Our team's creative approach ensures that we go beyond standard practices, offering unique and imaginative services that enhance the aesthetics and performance of every vehicle we touch.</p>
        </div>
        <div class="col" style="height: 490px;margin-top: 44px;width: 491px;border-right: 1px solid rgb(255,255,255) ;">
            <h1 style="font-size: 64PX;font-family: Montserrat, sans-serif;width: 370px;font-weight: bold;margin-left: 49px;margin-top: 0px;color: rgb(255,255,255);">AND LOVE.</h1>
            <p style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;line-height: 19.5PX;width: 369PX;margin-left: 49px;margin-top: 198px;">Love is at the heart of Greg's Auto Care Services, driving our unwavering commitment to exceptional quality and customer satisfaction. With a deep affection for automobiles, we approach each service with passion, care, and attention to detail, ensuring that every client feels the warmth and dedication we put into preserving and enhancing the beauty of their vehicle.</p>
        </div>
    </div>
    <div class="row" style="height: 300px;width: 1512px;background: #ffffff;">
        <div class="col" style="background: url(&quot;assets/img/Rectangle%2051.png&quot;);">
            <p></p>
        </div>
        <div class="col" style="width: 756px;">
            <h1 style="font-weight: bold;max-width: 315px;max-height: 49px;margin-left: 230px;margin-top: 120px;">Why we're here?</h1><a href="services.php"><button class="btn btn-primary" type="button" style="width: 146px;height: 46px;margin-left: 315px;border-radius: 0px;background: rgb(255,255,255);font-family: Montserrat, sans-serif;margin-top: 26px;color: rgb(0,0,0);border-width: 1px;border-color: var(--bs-black);border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;">LEARN MORE</button></a>
            <p style="font-family: Montserrat, sans-serif;font-weight: bold;letter-spacing: 5PX;max-width: 151px;text-align: center;font-size: 20px;position: absolute;margin-left: 315px;margin-top: -190px;margin-bottom: 0;">SERVICES</p>
        </div>
    </div>
    <div class="row" style="height: 300px;width: 1512px;background: #ffffff;">
        <div class="col" style="width: 756px;">
            <p style="font-family: Montserrat, sans-serif;font-weight: bold;letter-spacing: 5PX;max-width: 151px;text-align: center;font-size: 20px;position: absolute;margin-left: 300px;margin-top: 50px;">ABOUT US</p>
            <h1 style="font-family: Montserrat, sans-serif;font-weight: bold;width: 514px;text-align: center;position: static;margin-left: 121px;margin-top: 100px;">Driving Perfection, Exceeding Expectations</h1><a href="about.php"><button class="btn btn-primary" type="button" style="width: 146px;height: 46px;margin-left: 300px;border-radius: 0px;background: rgb(255,255,255);font-family: Montserrat, sans-serif;margin-top: 20px;color: rgb(0,0,0);border-width: 1px;border-color: var(--bs-black);border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;border-left-width: 1px;">LEARN MORE</button></a>
        </div>
        <div class="col" style="background: url(&quot;assets/img/Rectangle%2054.png&quot;);">
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php include 'footer.php'; ?>
</body>

</html>