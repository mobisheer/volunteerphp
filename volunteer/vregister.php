<?php
include_once("../db_connect.php");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirm_password'];
$description = $_REQUEST['description'];
$address = $_REQUEST['address'];
$interests = $_REQUEST['interests'];
$hoursWeek = $_REQUEST['hours_week'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];


//echo $name; 


$query = "insert into volunteer (name, username, password,  description, address, interests, hours_week, phone, email) "
		. " values( '". $name . "'" 
		. ", '" . $username . "'"
		. ", '" . $password . "'"
		
		. ", '" . $description . "'"
		. ", '" . $address . "'"
		. ", '" . $interests . "'"
		. ", '" . $hoursWeek . "'"
		. ", '" . $phone . "'"
		. ", '" . $email . "'"
		. ")";
	
//echo "query:$query<br>";
$result = mysqli_query($DB_CONN,$query) or die("can not executer query:$query");
mysqli_close($DB_CONN);

header("location:vlogin.html");

?>