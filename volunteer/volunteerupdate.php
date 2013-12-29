<?php
session_start();

//edit_data.php

include_once("../db_connect.php");
$VolId = $_REQUEST['id'];
$name = $_REQUEST['name'];
//echo $name;
$username=$_REQUEST['username'];

$description = $_REQUEST['description'];
$address = $_REQUEST['address'];
$interests = $_REQUEST['interests'];
$hours_week = $_REQUEST['hours_week'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
//echo $ngoId;

$query = "update volunteer set "
			    . " username = '" . $username. "',"
			    . " name = '" . $name. "',"
                . " description='". $description."',"
                . " address='" . $address. "',"
                . " interests='" . $interests. "',"
                . " hours_week='" . $hours_week. "',"
                . " phone='" . $phone. "',"
                . " email='" . $email. "'"
                . " where  id = ". $VolId;


$result = mysqli_query($DB_CONN,$query) or die("can not execute query:$query");
mysqli_close($DB_CONN);

//header("location:volunteerlist.php");
header("location:volprofile.php");

?>
