
<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	<table>
	  <tr>
	    <td align="center">NGO Details</td>
	  </tr>
	  <tr>
	    <td>
	    <table border="1" allign="center" style="background-color:lightblue">
		   <?php
			include_once("db_connect.php");
			

			$ngoId = $_REQUEST['id'];
			$query = "select * from ngo where id=$ngoId";
			//echo "query:$query<br>";
			$result = mysqli_query($DB_CONN,$query) or die("can not executer query:$query");

			$ngo = array();
			$row = mysqli_fetch_array($result)
			 // $_SESSION["nid"] = $row["id"];
			?>
				
			
			<form id="ngoupdate" method="post" action="">
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
					<td>Sectors</td>
					<td><div><?php echo "$row[sectors]"?></div></td>
				</tr>
				<tr>
					<td>Contact Person</td>
					<td><div><?php echo "$row[contact_person]"?></div></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><div><?php echo "$row[mobile]"?></div></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><div><?php echo "$row[email]"?></div></td>
				</tr>
				<tr>
					<td>Website</td>
					<td><div><?php echo "$row[website]"?></div></td>
				</tr>
					<tr>
		
		
		</tr>
			</form>
		</table>
		</td>
		</tr>
		
	</table>
	
</body>
</html>


