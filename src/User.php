<?php

namespace App;
require 'config.php';
use PDO;
use PDOStatement;

class User
{
	protected $id;
	protected $first_name;
	protected $middle_name;
	protected $last_name;
	protected $email;
	protected $pass;
	protected $birthdate;
	protected $address;
    protected $brand;
    protected $model;
    protected $year;
	

	public function getId()
	{
		return $this->id;
	}

	public function getFullName()
	{
		return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
	}

	public function getFirstName()
	{
		return $this->first_name;
	}

	public function getMiddleName()
	{
		return $this->middle_name;
	}

	public function getLastName()
	{
		return $this->last_name;
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function getBirthdate()
	{
		return $this->birthdate;
	}
	public function getAddress()
	{
		return $this->address;
	}
    public function getBrand()
    {
        return $this->brand;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getYear()
    {
        return $this->year;
    }

	public static function getById($id)
	{
		global $conn;

		try {
			$sql = "
				SELECT * FROM car_info
				WHERE cus_info_id=:cus_info_id
				LIMIT 1
			";
			$statement = $conn->prepare($sql);
			$statement->execute([
				'cus_info_id' => $id
			]);
			$result = $statement->fetchObject('App\User');
			return $result;
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}

		return null;
	}

	public static function hashPassword($password)
	{
		
		// DO SOMETHING HERE TO HASH THE PASSWORD
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		return $hashed_password;
		
	}

	public static function bookService($d, $cc, $pc, $wt, $ppf, $suggestions)
	{
		global $conn;
		$user = $_SESSION['user']['id'];
		$getDate = "
			SELECT date_booked FROM booked_service WHERE car_info_id = (SELECT id FROM car_info where cus_info_id=$user)
			";
			$date = $conn->query($getDate);
			$row = $date->fetch(PDO::FETCH_ASSOC);
			$booked_date = $row['date_booked'];
		if ($booked_date == date('Y-m-d')) {
			
		echo '<SCRIPT>
		alert("Only one booking per day.")
	
	window.location.replace("index.php");
	</SCRIPT>';
		}
		else {
		try {


			$sql = "
				INSERT INTO booked_service (detailing, ceramic_coating, paint_correction, window_tint, paint_protection_film, suggestions, date_booked, car_info_id)
				VALUES ('$d', '$cc', '$pc', '$wt', '$ppf', '$suggestions', CURRENT_DATE(), (SELECT id FROM car_info where cus_info_id=$user));
			";
			$conn->exec($sql);
			// echo "<li>Executed SQL query " . $sql;
			return $conn->lastInsertId();
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}
	}
		return false;
	}
	public static function attemptLogin($email, $pass)
	{
		global $conn;

		try {
			$sql = "
				SELECT * FROM cus_info
				WHERE email=:email
					
				LIMIT 1
			";
			$statement = $conn->prepare($sql);

			// Perform password hash verification (if necessary)

			$statement->execute([
				'email' => $email
			]);
			$user = $statement->fetchObject('App\User');
	
			if ($user && password_verify($pass, $user->pass)) {
				return $user;
			}

		} catch (PDOException $e) {
			error_log($e->getMessage());
		}

		return null;
	}

	public static function register($first_name, $middle_name, $last_name, $email, $password, $birthdate, $address, $city, $state, $brand, $model, $year)
	{
		global $conn;

		try {
			// Hash the password before inserting it to DB
			// ..
			$hashed_password = self::hashPassword($password);

			$sql = "
				INSERT INTO cus_info (first_name, middle_name, last_name, email, pass, birthdate, address, city, state)
				VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$hashed_password', '$birthdate', '$address', '$city', '$state');

                INSERT INTO car_info (brand, model, year, cus_info_id)
                VALUES ('$brand', '$model', '$year', (SELECT id FROM cus_info ORDER BY id DESC LIMIT 1))
			";
			$conn->exec($sql);
			// echo "<li>Executed SQL query " . $sql;
			return $conn->lastInsertId();
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}

		return false;
	}
}