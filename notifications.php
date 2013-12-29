<?php
include_once("db_connect.php");
session_start();
$vId= $_SESSION["vid"];
$aId= $_SESSION["aId"];
$ngoId= $_SESSION['nid'];

$query = "select v.id as v_id, v.name as v_name, a.ngo_id as an_id, a.id as a_id, a.name as a_name
from volunteer as v, ngoactivity as a, activity_request as ar
where ar.status =1
and a.id=$aId
and a.ngo_id = $ngoId
and v.id =$vId";

$result = mysqli_query($DB_CONN,$query) or die("can not execute query:$query");
//echo $vId;
while($row = mysqli_fetch_array($result))
{
	$vName = $row["v_name"];
	$aName =$row["a_name"];
	$vId= $row["v_id"];
	$date= date("y/m/d");
	$Message ="accepted";
	$query1 ="insert into user_notification (vol_name, act_name, u_id, message, accepted_date )" 
					. " values( '". $vName . "'"
					. ", '" . $aName . "'"
					.", '". $vId . "'"
					. ", '" . $Message . "'"
					. ", '" . $date . "'"
					. ")";

				//u_id means volunteer id
	/*$query1 ="update user_notification  set" . " vol_name = '".$vName."',"
											. " a_name = '".$aName."'"
										. "where v_id =" .$vId; */

    $result1 = mysqli_query($DB_CONN,$query1) or die("can not execute query:$query1");

/*
	echo (" $row[v_name] your request to join in ".$row["a_name"].$row["a_id"]. "activity has accepted the ngo ");


//cho $row["n_name"];
//echo $row["n_id"];
	echo $row["an_id"];
echo ("</br>");
echo "volunteer name:".$row["v_name"];
echo $row["v_id"];
echo ("</br>"); 
//echo "actvity name:".$row["a_name"]; echo ("</br>");
*/
}
mysqli_close($DB_CONN);
?>