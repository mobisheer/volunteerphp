<?php
include_once("../db_connect.php");
$query ="select *from ngoactivity_list ";
if(isset($_POST['search'])){
	$search_term=$_POST['searchbox'];
	$query.="where activity_name='{$search_term}'";
	
}
$result = mysqli_query($DB_CONN,$query) or die("cannot execute query:$query");

?>
<form name="searchform" method ="post" action="actsearch.php">
Search:<input type="text" name="searchbox" id="searchbox" value=""/>
<input type ="submit" name ="search" value ="search ngo"/>
</form>
<table border="1" style="background-color:lightgreen" >
<tr>
<td>Activity Name</td>
<td>Activity Description</td>
<td>Activity Area</td>
</tr>
<?php while ($row =mysqli_fetch_array($result)){?>
<tr>
<td><?php echo $row["activity_name"]; ?></td>
<td><?php echo $row["activity_desc"]; ?></td>
<td><?php echo $row["activity_area"]; ?></td>
<td><?php echo ("<td><a href='actedit.php?id=$row[activity_id]''>Edit</a></td> 
                <td><a href='actdelete.php?id=$row[activity_id]'>Delete</a></td>
                <td><a href='actview.php?id=$row[activity_id]'>View</a></td></tr>");?></td>
      
</tr>
<?php }?>
</table>
