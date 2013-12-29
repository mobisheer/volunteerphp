
<?php
include_once("../volunteer/volheader.php");
?>
<?php
include_once("../db_connect.php");
$query ="select *from ngo ";
if(isset($_POST['search'])){
	$search_term=$_POST['searchbox'];
	$query.="where name='{$search_term}'";
	$query.="or sectors='{$search_term}'";
	$query.="or mobile='{$search_term}'";
}
$result = mysqli_query($DB_CONN,$query) or die("cannot execute query:$query");

?>
<form name="searchform" method ="post" action="ngosearch.php">
Search:<input type="text" name="searchbox" id="searchbox" value=""/>
<input type ="submit" name ="search" value ="search ngo"/>
</form>
<table border="1" style="background-color:lightgreen" >
<tr>
<td>Name</td>
<td>Description</td>
<td>Sectors</td>
</tr>
<?php while ($row =mysqli_fetch_array($result)){?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["description"]; ?></td>
<td><?php echo $row["sectors"]; ?></td>
<td><?php echo ("<td><a href='ngoedit.php?id=$row[id]''>Edit</a></td> 
                <td><a href='ngodelete.php?id=$row[id]'>Delete</a></td>
                <td><a href='ngoview.php?id=$row[id]'>View</a></td></tr>");?></td>
      
</tr>
<?php }?>
</table>
