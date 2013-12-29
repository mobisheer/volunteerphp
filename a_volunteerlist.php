<html>
<head>
<style>
.tb {

	border:1px solid rgba(0,0,0,0.4);
	box-shadow: 0px 0px 2px rgba(0,0,0,0.5);
	background-color:lightpink;
	background-position: center;


}

</style>
</head>
<body >
<table class="tb"  border="1">
<tr border="0">
<td>Volunteer Name</td>
<td>Address</td>
<td>Mobile No</td>
</tr>

<?php
include_once("db_connect.php");
$aId =$_REQUEST["id"];

$query="select  v.id AS v_id, v.name AS v_name,v.address as v_address, v.phone as v_mobile
        FROM volunteer AS v, activity_request AS ar
        WHERE v.id = ar.v_id
        AND ar.a_id =$aId
        AND STATUS =1";
      $result =mysqli_query($DB_CONN, $query) or die("cannot execute  query:$query");
      while($row = mysqli_fetch_array($result))
      {
      	echo ("<tr><td>$row[v_name]</td>");
      	echo("<td>$row[v_address]</td>");
      echo("<td>$row[v_mobile]</td></tr>");

      }
      mysqli_close($DB_CONN);


?>

</table>
</body>
</html>