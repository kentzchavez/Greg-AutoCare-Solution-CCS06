<?php

require "config.php";

use App\User;

// Only logged in user should be able to open this page
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    echo '<SCRIPT> //not showing me this
    alert("Please log in first.\n\nIf you do not have an account yet, please click register and create an account first.")
    window.location.replace("login.php");
</SCRIPT>';
}

$user = User::getById($_SESSION['user']['id']);

?>

<!DOCTYPE html>
<html lang="en" style="background: #1c1b1b;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Book</title>
    <?php include 'menu-bar.php'; ?>
    <link rel="stylesheet" href="assets/bootstrap/css/book.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body style="background: rgb(28,27,27);height: 1800px;">
    <h1 style="font-family: Montserrat, sans-serif;font-weight: bold;color: rgb(255,255,255);margin: 0px;margin-top: 65px;margin-left: 106px;">BOOK NOW</h1>
    <div style="width: 1300px;margin-top: 42px;margin-left: 106px;border-width: 1px;border-color: rgb(255,255,255);border-bottom: 1px solid rgb(255,255,255) ;"></div>
        <div class="row">
            <div class="col-md-6" style="position: absolute;width: 400px;height: 574px;color: #3b3b3b;background: #3b3b3b;border-radius: 30px;margin-top: 42PX;margin-left: 106px;">
                <h1 style="font-size: 24px;color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-weight: bold;margin-top: 67px;margin-left: 41px;width: 298px;">WHAT HAPPENS NEXT?</h1>
                <p style="font-family: Montserrat, sans-serif;color: rgb(255,255,255);width: 298px;height: 115px;text-align: justify;line-height: 19.5px;margin-left: 41px;margin-top: 15px;">A specialist will contact you within 24hrs. We will walk you through our unique process of determining which package best suites you and your budget. What are you waiting for? Let's go!</p>
                <p class="fw-semibold" style="font-family: Montserrat, sans-serif;color: rgb(255,255,255);width: 298px;height: 36px;text-align: justify;line-height: 19.5px;margin-left: 41px;margin-top: 44px;">For walk-in customers, please fill out our form at the shop.</p>
                <h1 style="font-size: 24px;color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-weight: bold;margin-top: 44px;margin-left: 41px;width: 298px;">OUR SCHEDULE</h1>
                <p style="font-family: Montserrat, sans-serif;color: rgb(255,255,255);width: 298px;height: 115px;text-align: left;line-height: 19.5px;margin-left: 41px;margin-top: 15px;">Mon-Fri: 9:00 AM to 5:00 PM<br><br>Sat: 10:00 AM to 3:00 PM (Appointment Only)<br><br>Sun: Closed (Appointment Only)</p>
            </div>
            <div class="col-md-6" style="width: 815px;height: 1300px;margin-left: 573px;margin-top: 73px;position: absolute">
                <h1 style="color: rgb(255,255,255);font-size: 24px;font-family: Montserrat, sans-serif;margin-left: 0px;margin-top: 0px;font-weight: bold;">Step 1: Choose Your Car</h1>
                <div style="margin-left: 0pox;margin-top: 18ox;border-bottom: 1px solid rgb(255,255,255);width: 814px;"></div>
                <form action="book_service.php" method="post">
                    <p class="fw-semibold" style="font-family: Montserrat, sans-serif;color: rgb(255,255,255);width: 298px;height: 24px;text-align: justify;line-height: 19.5px;margin-left: 33px;font-size: 20px;margin-top: 41px;">Your Cars</p><button class="btn btn-primary" type="button" style="margin-left: 33px;width: 750px;height: 58px;border-radius: 15px;border-width: 0px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255, 255, 255);font-weight: bold;"><?php echo $user->getYear() . " " . $user->getBrand() . " " .     $user->getModel();?></button>
                    <h1 style="color: rgb(255,255,255);font-size: 24px;font-family: Montserrat, sans-serif;margin-left: 0px;margin-top: 83PX;font-weight: bold;">Step 2: Select Your Services</h1>
                    <div style="margin-left: 0pox;margin-top: 18ox;border-bottom: 1px solid rgb(255,255,255);width: 814px;"></div>
                    <p class="fw-semibold" style="font-family: Montserrat, sans-serif;color: rgb(255,255,255);width: 393px;height: 24px;text-align: justify;line-height: 19.5px;margin-left: 33px;font-size: 20px;margin-top: 41px;"><span style="font-weight: normal !important;">Which services are you interested in?</span></p>
                    <label for="d"> <div class="btn btn-primary" style="margin-left: 33px;width: 750px;height: 58px;border-radius: 0px;background: #1c1b1b;font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255, 255, 255);font-weight: bold;border-width: 1px;border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-bottom-color: rgb(255,255,255);border-left-color: rgb(255,255,255); padding-top: 11px;"><input type='hidden' value='no' name='d'><input type="checkbox" value="yes" id="d" name="d"> DETAILING</div></label>
                    <label for="cc"> <div class="btn btn-primary" style="margin-left: 33px;width: 750px;height: 58px;border-radius: 0px;background: #1c1b1b;font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255, 255, 255);font-weight: bold;border-width: 1px;border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-bottom-color: rgb(255,255,255);border-left-color: rgb(255,255,255);margin-top: 27px; padding-top: 11px;"><input type='hidden' value='no' name='cc'><input type="checkbox" value="yes" id="cc" name="cc"> CERAMIC COATING</div></label>
                    <label for="pc"> <div class="btn btn-primary" style="margin-left: 33px;width: 750px;height: 58px;border-radius: 0px;background: #1c1b1b;font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255, 255, 255);font-weight: bold;border-width: 1px;border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-bottom-color: rgb(255,255,255);border-left-color: rgb(255,255,255);margin-top: 27px; padding-top: 11px;"><input type='hidden' value='no' name='pc'><input type="checkbox" value="yes" id="pc" name="pc"> PAINT CORRECTION</div></label>
                    <label for="wt"> <div class="btn btn-primary" style="margin-left: 33px;width: 750px;height: 58px;border-radius: 0px;background: #1c1b1b;font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255, 255, 255);font-weight: bold;border-width: 1px;border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-bottom-color: rgb(255,255,255);border-left-color: rgb(255,255,255);margin-top: 27px; padding-top: 11px;"><input type='hidden' value='no' name='wt'><input type="checkbox" value="yes" id="wt" name="wt"> WINDOW TINT</div></label>
                    <label for="ppf"> <div class="btn btn-primary" style="margin-left: 33px;width: 750px;height: 58px;border-radius: 0px;background: #1c1b1b;font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255, 255, 255);font-weight: bold;border-width: 1px;border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-bottom-color: rgb(255,255,255);border-left-color: rgb(255,255,255);margin-top: 27px; padding-top: 11px;"><input type='hidden' value='no' name='ppf'><input type="checkbox" value="yes" id="ppf" name="ppf"> PAINT PROTECTION FILM</div></label>
                    <h1 style="color: rgb(255,255,255);font-size: 24px;font-family: Montserrat, sans-serif;margin-left: 0px;margin-top: 83PX;font-weight: bold;">Step 3: Suggestions</h1>
                    <div style="margin-left: 0pox;margin-top: 18ox;border-bottom: 1px solid rgb(255,255,255);width: 814px;"></div>
                    <p class="fw-semibold" style="font-family: Montserrat, sans-serif;color: rgb(255,255,255);width: 393px;height: 24px;text-align: justify;line-height: 19.5px;margin-left: 33px;font-size: 20px;margin-top: 41px;"><span style="font-weight: normal !important;">Anything you'd like us to know?</span></p><textarea class="form-control" style="width: 750px;height: 253px;margin-left: 33px;color: rgb(255,255,255);background: rgb(59,59,59);border-top-width: 0px;border-right-width: 0px;border-bottom-width: 0px;border-left-width: 0px;border-radius: 19px;font-size: 20px;font-family: Montserrat, sans-serif;" placeholder="Tell us about your car’s history and any important reminders that we should take note." name="suggestions"></textarea><button class="btn btn-primary" type="submit" style="width: 806px;height: 77px;border-radius: 0px;border-width: 0px;background: rgb(255,255,255);color: rgb(0,0,0);font-weight: bold;font-family: Montserrat, sans-serif;font-size: 20px;margin-left: 0px;margin-top: 48px;">BOOK NOW</button>
                </form>
            </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <div style="margin-top: 1600px;"></div>
    <?php include 'footer.php'; ?>
</body>

</html>