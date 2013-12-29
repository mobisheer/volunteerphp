<?php
include_once("ngo/ngoheader.php");
?>
<html>
<head>
</head>
<body>
<strong>Requests</strong>
<table border="1">
<tr>
<td>Volunteer Name</td>
<td>Activity Name</td>
</tr>
<?php
include_once("db_connect.php");

 	$query = "
  SELECT v.id AS v_id, v.name AS v_name, a.id AS a_id, a.name AS a_name
FROM volunteer AS v,  ngoactivity AS a, activity_request AS ar
WHERE ar.status =0
AND ar.v_id = v.id
AND ar.a_id = a.id
";

 $result = mysqli_query($DB_CONN,$query) or die("cannot execute query");
 //echo 
while($row = mysqli_fetch_array($result))
{ //echo $row["v_name"];
	echo ("<tr>");
		echo (" <td>$row[v_name]</td>");
		echo (" <td>$row[a_name]</td>");
		echo (" <td><a href=activity_accept.php?v_id=$row[v_id]&a_id=$row[a_id]&status=1>Accept</a></td>");
		echo (" <td><a href=activity_decline.php?v_id=$row[v_id]&a_id=$row[a_id]&status=1>Decline</a></td>");
		echo ("</tr>");
}
mysqli_close($DB_CONN);
?>

</table>
</body>
</html>