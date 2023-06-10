<?php

require "config.php";

use App\User;

// Save the user information, and automatically login the user

try {
	$d = $_POST['d'];
	$cc = $_POST['cc'];
	$pc = $_POST['pc'];
	$wt = $_POST['wt'];
	$ppf = $_POST['ppf'];
	$suggestions = $_POST['suggestions'];
	$result = User::bookService($d, $cc, $pc, $wt, $ppf, $suggestions);

	if ($result) {

		echo '<SCRIPT>
		alert("Booking Submitted.\n\nPlease check your email for updates on your assigned schedule.")
	
	window.location.replace("index.php");
	</SCRIPT>';

		
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

