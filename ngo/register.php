<?php
include_once("../db_connect.php");
session_start();

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
//$confirmPassword = $_REQUEST['confirm_password'];
$description = $_REQUEST['description'];
$address = $_REQUEST['address'];
$sectors = $_REQUEST['sectors'];
$keywords = $_REQUEST['keywords'];
$contactPerson = $_REQUEST['contact_person'];
$mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];
$website = $_REQUEST['website'];

$query = "insert into ngo(name,username,password, description, address, sectors, keywords, contact_person, mobile, email, website) "
		. " values( '". $name . "'"
		. ", '" . $username . "'"
		. ", '" . $password . "'"
		
		. ", '" . $description . "'"
		. ", '" . $address . "'"
		. ", '" . $sectors . "'"
		. ", '" . $keywords . "'"
		. ", '" . $contactPerson . "'"
		. ", '" . $mobile . "'"
		. ", '" . $email . "'"
		. ", '" . $website . "'"
		. ")";
	
//echo "query:$query<br>";
$result = mysqli_query($DB_CONN,$query) or die("can not executer query:$query");
$row = mysqli_fetch_array($result);
$_SESSION["userName"]= $row["name"];
mysqli_close($DB_CONN);

header("location:login.html");
?>