<?php

require "config.php";

use App\User;

// Save the user information, and automatically login the user

try {
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$email_address = $_POST['email_address'];
	$password = $_POST['password'];
	$birthdate = $_POST['birthdate'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$brand = $_POST['car1_brand'];
	$model = $_POST['car1_model'];
	$year = $_POST['car1_year'];
	$result = User::register($first_name, $middle_name, $last_name, $email_address, $password, $birthdate, $address, $city, $state, $brand, $model, $year);

	if ($result) {

		// Set the logged in session variable and redirect user to index page

		$_SESSION['is_logged_in'] = true;
		$_SESSION['user'] = [
			'id' => $result,
			'fullname' => $first_name . ' ' . $middle_name . ' ' . $last_name,
			'email' => $email
		];
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

