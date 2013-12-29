<?php include_once("ngoheader.php");
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
	    <td align="center">EDIT Profile</td>
	  </tr>
	  <tr>
	    <td>
	    <table border="1" allign="center" style="background-color:lightblue">
		   <?php
			include_once("../db_connect.php");
			$ngoId = $_REQUEST['id'];
			$query = "select * from ngo where id=$ngoId";
			//echo "query:$query<br>";
			$result = mysqli_query($DB_CONN,$query) or die("can not executer query:$query");
			$ngo = array();
			$row = mysqli_fetch_array($result)
			?>
				
			
			<form id="ngoupdate" method="post" action="ngoupdate.php">
				<input type="hidden" name="id" value="<?php echo "$row[id]" ?>"/>
				<tr>
					<td>Full Name</td>
					<td><input type= "text" id="name" name="name" value="<?php echo "$row[name]"?>" /></td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type= "text" id="username" name="username" value="<?php echo "$row[username]"?>"/></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><input type= "text" id="description" name="description" value="<?php echo "$row[description]"?>"/></td>
				</tr>
				<tr>
					<td>Adress</td>
					<td><input type= "text" id="address" name="address" value="<?php echo "$row[address]"?>"/></td>
				</tr>
				<tr>
					<td>Sectors</td>
					<td><input type= "text" id="sectors" name="sectors" value="<?php echo "$row[sectors]"?>"/></td>
				</tr>
				<tr>
					<td>Contact Person</td>
					<td><input type= "text" id="contact_person" name="contact_person" value="<?php echo "$row[contact_person]"?>"/></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><input type= "text" id="mobile" name="mobile" value="<?php echo "$row[mobile]"?>"/></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type= "text" id="email" name="email" value="<?php echo "$row[email]"?>"/></td>
				</tr>
				<tr>
					<td>Website</td>
					<td><input type="text" id="website" name="website" value="<?php echo "$row[website]"?>"/></td>
				</tr>
					<tr>
		
		<td width="10%"><button id="updatebtn" class ="" name="updatebtn">Update</button></td>
		</tr>
			</form>
		</table>
		</td>
		</tr>
		
	</table>
	
</body>
</html>


