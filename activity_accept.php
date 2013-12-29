<?php
include_once("ngo/ngoheader.php");
include_once("db_connect.php");
session_start();

$vId=$_REQUEST['v_id'];
$aId= $_REQUEST['a_id'];
$status=$_REQUEST['status'];
$_SESSION["aId"] = $aId;
 $_SESSION["vid"] = $vId;


$query = "update activity_request  set" . " status = '".$status."'"
										. "where v_id =" .$vId." and a_id =" .$aId;
//echo $query;
$result = mysqli_query($DB_CONN,$query) or die("can not execute query:$query");



//$result1 = mysqli_query($DB_CONN,$query1) or die("can not execute query:$query1");

include_once("notifications.php");
echo "activity accepted";
//mysqli_close($DB_CONN);
?>
				