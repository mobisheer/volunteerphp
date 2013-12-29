<?php
include_once("../db_connect.php");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
//echo "inside delete";

$VolId = $_REQUEST['id'];
$query= "delete from volunteer where id=$VolId";
$result = mysqli_query($DB_CONN,$query) or die("can not execute query:$query");
//echo $result;
mysqli_close($DB_CONN);
header("Location:volunteerdetails.php");

//$result = array("status" => "success");
//echo json_encode($result);
?>
