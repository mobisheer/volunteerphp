
<?php
include_once("volunteer/volheader.php");


include_once("db_connect.php");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
//session_start();



$actid = $_REQUEST["id"];
$vid = $_SESSION["vid"];
 $_SESSION["aId"] = $actid;

$status=0;
$query = "insert into activity_request (a_id, v_id, status)"
				."values ('".$actid."'"
				.", '".$vid."'"
				.",'".$status."'" 
			    .")";

$result = mysqli_query($DB_CONN,$query) or die("can not execute query:  $query");
mysqli_close($DB_CONN);

echo "your request has been sent ";
?>

