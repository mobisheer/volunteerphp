<?php
include_once("volheader.php");

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
	    <td align="center">Profile</td>
	  </tr>
	  <tr>
	    <td>
	    <table border="1" allign="center" style="background-color:lightblue">
		   <?php
			include_once("../db_connect.php");
			//$vId = $_REQUEST['id'];
			$vId = $_SESSION["vid"];
			$query = "select * from volunteer where id=$vId";
			//echo "query:$query<br>";
			//$vId = $_SESSION["vid"];
			$result = mysqli_query($DB_CONN,$query) or die("can not executer query:$query");
			$ngo = array();
			$row = mysqli_fetch_array($result)
			?>
				
			
			<form id="volunteerupdate" method="post" action="volunteeredit.php">
				<input type="hidden"  name="id" value="<?php echo "$row[id]" ?>"/>
				<tr>
					<td>Full Name</td>
					<td><div ><?php echo "$row[name]"?> </div></td>
				</tr>
				<tr>
					<td>username</td>
					<td><div><?php echo "$row[username]"?></div></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><div><?php echo "$row[description]"?></div></td>
				</tr>
				<tr>
					<td>Adress</td>
					<td><div><?php echo "$row[address]"?></div></td>
				</tr>
				<tr>
					<td>Interests</td>
					<td><div><?php echo "$row[interests]"?></div></td>
				</tr>
				<tr>
					<td>Hours Per Week</td>
					<td><div><?php echo "$row[hours_week]"?></div></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><div><?php echo "$row[phone]"?></div></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><div><?php echo "$row[email]"?></div></td>
				</tr>
				
				<tr>
		
		<td width="10%"><button id="editbtn" class ="" name="editbtn">Edit</button></td>
		</tr>
			</form>
		</table>
		</td>
		</tr>
		
	</table>
	
</body>
</html>


