<?php

//edit_data.php

include_once("../db_connect.php");
$ngoId = $_REQUEST['id'];
$name = $_REQUEST['name'];
//echo $name;
$username=$_REQUEST['username'];

$description = $_REQUEST['description'];
$address = $_REQUEST['address'];
$sectors = $_REQUEST['sectors'];
$keywords = $_REQUEST['keywords'];
$contactPerson = $_REQUEST['contact_person'];
$mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];
$website = $_REQUEST['website'];
//echo $ngoId;

$query = "update ngo set "      . " username = '" . $username. "',"
			        . " name = '" . $name. "',"
                                . " description='". $description."',"
                                 . " address='" . $address. "',"
                                . " keywords='" . $keywords. "',"
                                . " sectors='" . $sectors. "',"
                                . " contact_person='" . $contactPerson. "',"
                                . " mobile='" . $mobile. "',"
                                 . " email='" . $email. "',"
                                . " website='" . $website . "'"
                                . " where  id = ". $ngoId;


$result = mysqli_query($DB_CONN,$query) or die("can not execute query:$query");
mysqli_close($DB_CONN);

header("location:ngoprofile.php");

?>
