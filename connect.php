<?php
$dbhost							= "localhost";
$dbuser							= "root";
$dbpass							= "";
$dbname							= "volunteer_connect";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysqli_select_db($conn,$dbname);
?>