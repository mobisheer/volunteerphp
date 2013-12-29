<?php
include_once("../ngo/ngoheader.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	<table>
	  <tr>
	    <td align="center">Edit Activity</td>
	  </tr>
	  <tr>
	    <td>
	    <table border="1" allign="center" style="background-color:lightblue">
		   <?php
			include_once("../db_connect.php");
			$actId = $_REQUEST['id'];
			$query = "select * from ngoactivity where id=$actId";
			//echo "query:$query<br>";
			$result = mysqli_query($DB_CONN,$query) or die("can not executer query:$query");
			$ngo = array();
			$row = mysqli_fetch_array($result)
			?>
				
			
			<form id="ngoupdate" method="post" action="actupdate.php">
				<input type="hidden" name="id" value="<?php echo "$row[id]" ?>"/>
				<tr>
					<td>Activity Name</td>
					<td><input type= "text" id="name" name="name" value="<?php echo "$row[name]"?>" /></td>
				</tr>
				<tr>
					<td>Descriptin</td>
					<td><input type= "text" id="description" name="description" value="<?php echo "$row[description]"?>"/></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type= "text" id="address" name="address" value="<?php echo "$row[address]"?>"/></td>
				</tr>
				tr>
					<td>Repeat</td>
					<td><input type= "text" id="repetition" name="repetition" value="<?php echo "$row[repetition]"?>"/></td>
				</tr>
				<tr>
					<td>Start ACtivity</td>
					<td><input type= "text" id="start_time" name="start_time" value="<?php echo "$row[start_time]"?>"/></td>
				</tr>
				<tr>
					<td>End Activtiy</td>
					<td><input type= "text" id="end_time" name="end_time" value="<?php echo "$row[end_time]"?>"/></td>
				</tr>
				
		<td width="10%"><button id="updatebtn" class ="" name="updatebtn">Update</button></td>
		</tr>
			</form>
		</table>
		</td>
		</tr>
		
	</table>
	
</body>
</html>


