<?php
include_once("db_connect.php");

$vId=$_REQUEST['v_id'];
$query = "delete from activity_request where v_id = $vId"; 
$result = mysqli_query($DB_CONN,$query);
mysqli_close($DB_CONN);
header("location:ngoactivity/nactlist")
?>