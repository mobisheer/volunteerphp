<?php
include_once("../ngo/ngoheader.php");
?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	<table>
	  <tr>
	    <td align="center">ACTIVITY DETAILS</td>
	  </tr>
	  <tr>
	    <td>
	    <table border="1" allign="center" style="background-color:lightblue">
		   <?php
			include_once("../db_connect.php");
			//$actId = $_REQUEST['activity_id'];
			$actId = $_REQUEST['id'];
			$query = "select * from ngoactivity where id=$actId";
			//echo "query:$query<br>";
			$result = mysqli_query($DB_CONN,$query) or die("can not executer query:$query");
			$ngo = array();
			$row = mysqli_fetch_array($result)
			?>
				
			
			<form id="actupdate" method="post" action="../ngodetailspage.php">
				<input type="hidden"  name="id" value="<?php echo "$row[id]" ?>"/>
				<tr>
					<td>Activity Name</td>
					<td><div ><?php echo "$row[name]"?> </div></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><div><?php echo "$row[description]"?></div></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><div><?php echo "$row[address]"?></div></td>
				</tr>
				<tr>
					<td>Repetition</td>
					<td><div><?php echo "$row[repetition]"?></div></td>
				</tr>
				<tr>
					<td>Start Time</td>
					<td><div><?php echo "$row[start_time]"?></div></td>
				</tr>
				<tr>
					<td>End Time</td>
					<td><div><?php echo "$row[end_time]"?></div></td>
				</tr>
				
		
		<td width="10%"><button id="backbtn" class ="" name="backbtn">Back</button></td>
		</tr>
			</form>
		</table>
		</td>
		</tr>
		
	</table>
	
</body>
</html>


