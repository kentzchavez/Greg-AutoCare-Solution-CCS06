<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <?php include 'menu-bar.php'; ?>
    <link rel="stylesheet" href="assets/bootstrap/css/register.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap">
</head>

<body style="background: #1C1B1B;height: 1492px;">
    <div class="row">
        <div class="col">
            <h1 style="font-size: 40px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);font-weight: bold;margin-top: 65PX;margin-left: 106PX;">REGISTER</h1>
            <div style="width: 1194px;border-bottom: 1px solid rgb(255,255,255);margin-right: 0px;margin-left: 106px;margin-top: 19px;"></div>
        </div>
    </div>
    <h1 style="color: rgb(255,255,255);font-size: 24px;font-family: Montserrat, sans-serif;margin-left: 269px;margin-top: 67px;font-weight: bold;">Step 1: Your Contact Details</h1>
    <div style="margin-left: 269px;margin-top: 28px;border-bottom: 1px solid rgb(255,255,255);width: 955px;"></div>
    <form style="width: 1250px;" method="post" action="save-registration.php">
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 269px;margin-top: 45px;">Last Name *</label>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 204px;margin-top: 45px;display: inline;padding-left: 0px;">First Name *</label>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 202px;margin-top: 45px;display: inline;padding-left: 0px;">Middle Name</label>
        <input class="form-control" type="text" style="width: 305px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 269px;color: rgb(255,255,255);display: inline;" name="last_name" placeholder="Enter your last name" required>
        <input class="form-control" type="text" style="width: 305px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 20px;color: rgb(255,255,255);display: inline;" name="first_name" placeholder="Enter your first name" required>
        <input class="form-control" type="text" style="width: 305px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 20px;color: rgb(255,255,255);display: inline;" name="middle_name" placeholder="Enter your middle name">
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 269px;margin-top: 31px;">Email Address *</label>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 498px;margin-top: 31px;">Birthday *</label>
        <input class="form-control" type="email" style="width: 630px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 269px;color: rgb(255,255,255);display: inline;" name="email_address" placeholder="Enter your email address" required>
        <input class="form-control" type="date" style="display: inline;font-size: 20px;font-family: Montserrat, sans-serif;color: rgb(255,255,255);width: 305px;height: 58px;margin-left: 20px;border-radius: 15px;border-color: rgba(255,255,255,0);background: rgb(59,59,59);" name="birthdate" required>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 269px;margin-top: 31px;">Address *</label>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 386px;margin-top: 31px;">City *</label>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 188px;margin-top: 31px;">Province *</label>
        <input class="form-control" type="text" style="width: 455px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 269px;color: rgb(255,255,255);display: inline;" name="address" placeholder="Enter your address" required>
        <input class="form-control" type="text" style="width: 215px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 23px;color: rgb(255,255,255);display: inline;" name="city" placeholder="e.g. San Fernando" required>
        <input class="form-control" type="text" style="width: 238px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 23px;color: rgb(255,255,255);display: inline;" name="state" placeholder="e.g. Pampanga" required>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 269px;margin-top: 31px;">Password*</label>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 388px;margin-top: 31px;">Confirm Password *</label>
        <input class="form-control" type="password" style="width: 472px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 269px;color: rgb(255,255,255);display: inline;" name="password" placeholder="8-alphanumeric characters"  minlength="8" onChange="onChange()" required>
        <input class="form-control" type="password" style="width: 460px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 20px;color: rgb(255,255,255);display: inline;" name="confirm_password" placeholder="Confirm your password" onChange="onChange()" required>
        <h1 style="color: rgb(255,255,255);font-size: 24px;font-family: Montserrat, sans-serif;margin-left: 269px;margin-top: 114px;font-weight: bold;">Step 2: Your Car Details</h1>
        <div style="margin-left: 269px;margin-top: 28px;border-bottom: 1px solid rgb(255,255,255);width: 955px;"></div>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 269px;margin-top: 49px;">Brand</label>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 260px;margin-top: 49px;">Year Made</label>
        <label class="form-label" style="color: rgb(255,255,255);font-family: Montserrat, sans-serif;font-size: 20px;font-weight: bold;margin-left: 191px;margin-top: 49px;">Model</label>
        <input class="form-control" type="text" style="width: 293.3px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 269px;color: rgb(255,255,255);display: inline;" name="car1_brand" placeholder="e.g. Hyundai" required>
        <input class="form-control" type="number" style="width: 269.84px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 26.98px;color: rgb(255,255,255);display: inline;" name="car1_year" placeholder="e.g. 2013" min="1890" max="2030" required>
        <input class="form-control" type="text" style="width: 337.89px;height: 58px;background: #3b3b3b;font-size: 20px;font-family: Montserrat, sans-serif;border-radius: 15px;border-color: rgba(0,0,0,0);border-bottom-color: rgba(206,212,218,0);margin-left: 26.98px;color: rgb(255,255,255);display: inline;" name="car1_model" placeholder="e.g. Sta Fe" required>
        <button class="btn btn-primary text-center" type="submit" style="padding: 0PX;padding-left: 0px;margin-left: 269px;width: 955px;height: 77px;background: rgb(255,255,255);border-width: 0px;border-radius: 0px;color: rgb(0,0,0);font-family: Montserrat, sans-serif;font-size: 20PX;font-weight: bold;padding-top: 0PX;padding-right: 0PX;margin-top: 83PX;">REGISTER</button>
    </form>
    <script src="assets/bootstrap/js/bootstrap.min.js">
    </script>
	<script type="text/JavaScript">   
function onChange() {
  const password = document.querySelector('input[name=password]');
  const confirm = document.querySelector('input[name=confirm_password]');
  if (confirm.value === password.value) {
    confirm.setCustomValidity('');
  } else {
    confirm.setCustomValidity('Passwords do not match.');
  }
}
</script>
<div style="margin-top: 200px;"></div>
<?php include 'footer.php'; ?>
</body>

</html>