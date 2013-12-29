
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
	    <td align="center">EDIT DATA</td>
	  </tr>
	  <tr>
	    <td>
	    <table border="1" allign="center" style="background-color:lightblue">
		   <?php
			include_once("../db_connect.php");

			$ngoId = $_REQUEST['id'];
			$query = "select * from volunteer where id=$ngoId";
			//echo "query:$query<br>";
			$result = mysqli_query($DB_CONN,$query) or die("can not executer query:$query");
			$ngo = array();
			$row = mysqli_fetch_array($result)
			?>
				
			
			<form id="ngoupdate" method="post" action="volunteerupdate.php">
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
					<td>Intersts</td>
					<td><input type= "text" id="interests" name="interests" value="<?php echo "$row[interests]"?>"/></td>
				</tr>
				<tr>
					<td>Hours per Week</td>
					<td><input type= "text" id="hours_week" name="hours_week" value="<?php echo "$row[hours_week]"?>"/></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><input type= "text" id="phone" name="phone" value="<?php echo "$row[phone]"?>"/></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type= "text" id="email" name="email" value="<?php echo "$row[email]"?>"/></td>
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


