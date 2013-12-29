<?php
include_once("../db_connect.php");
session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

$activityName = $_REQUEST['name'];
$activityDesc = $_REQUEST['description'];
$address = $_REQUEST['address'];
$repetition = $_REQUEST['repetition'];
$startActivity = $_REQUEST['start_time'];
$endtime = $_REQUEST['end_time'];
$ngoId= $_SESSION['nid'];



//echo $name; 


$query = "insert into ngoactivity (name, description, ngo_id,address, repetition, start_time, end_time) "
		. " values( '". $activityName . "'" 
		. ", '" . $activityDesc . "'"
		. ", '" . $ngoId . "'"
		. ", '" . $address . "'"
		. ", '" . $repetition . "'"
		. ", '" . $startActivity . "'"
		. ", '" . $endtime . "'"
		. ")";
	
//echo "query:$query<br>";
$result = mysqli_query($DB_CONN,$query) or die("can not executer query:$query");

mysqli_close($DB_CONN);
header("location:nactlist.php")


?>