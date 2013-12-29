<?php
include_once("../db_connect.php");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
//echo "inside delete";

$actId = $_REQUEST['id'];
$query= "delete from ngoactivity_list where activity_id=$actId";
$result = mysqli_query($DB_CONN,$query) or die("can not execute query:$query");
//echo $result;
mysqli_close($DB_CONN);
header("Location:actdetails.php");


?>
