
<?php
include_once("../ngo/ngoheader.php");

include_once("../db_connect.php");
$query ="select *from volunteer ";
if(isset($_POST['search'])){
	$search_term=$_POST['searchbox'];
	$query.="where name='{$search_term}'";
	$query.="or interests='{$search_term}'";
	$query.="or phone='{$search_term}'";
}
$result = mysqli_query($DB_CONN,$query) or die("cannot execute query:$query");

?>
<form name="searchform" method ="post" action="volunteersearch.php">
Search:<input type="text" name="searchbox" id="searchbox" value=""/>
<input type ="submit" name ="search" value ="search volunteer"/></br>
</form>
<div w>
<strong > Volunteer List</strong>
</div>
<table border="1" style="background-color:lightgreen" >

<tr>
<td>Name</td>
<td>Description</td>
<td>Interests</td>
</tr>
<?php while ($row =mysqli_fetch_array($result)){?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["description"]; ?></td>
<td><?php echo $row["interests"]; ?></td>
<td><?php echo ("<td><a href='../volunteer/volunteerdetails.php?id=$row[id]'>View</a></td></tr>");?></td>
      
</tr>
<?php }?>
</table>
