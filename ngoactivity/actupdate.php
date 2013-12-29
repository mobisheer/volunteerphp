<?php

//edit_data.php

include_once("../db_connect.php");
$actId = $_REQUEST['id'];
$activityName = $_REQUEST['name'];
$activityDesc = $_REQUEST['description'];
$activityArea = $_REQUEST['address'];
$repetition = $_REQUEST['repetition'];
$startActivity = $_REQUEST['start_time'];
$endActivity = $_REQUEST['end_time'];
//echo $ngoId;

$query = "update ngoactivity set "
        	. " name = '" . $activityName. "',"
        	 . " description = '" . $activityDesc. "',"
                . " address='". $activityArea."',"
                 . " repetition='" . $repetition. "',"
                . " start_time='" . $startActivity. "',"
                . " end_time='" . $endActivity. "'"
                
                . " where  id = ". $actId;


$result = mysqli_query($DB_CONN,$query) or die("can not execute query:$query");
mysqli_close($DB_CONN);

header("location:nactlist.php");

?>
