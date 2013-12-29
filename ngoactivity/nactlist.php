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
    <td align="center"><strong>Activity list</strong></td>
  </tr>
  <tr>
    <td>
      <table border="1" allign="center" style="background-color:lightblue">
      <tr>
      <td><strong>Activity Name</strong></td>
     
      <td><strong>Activity Description</strong></td>
      
      </tr>
      <?php
      
     include_once("../db_connect.php");//database connection
     $ngoId = $_SESSION['nid'];
     echo $ngoId;
      $query = "select * from ngoactivity where ngo_id = $ngoId";
      $result = mysqli_query($DB_CONN,$query) or die("can not execute query:$query");
      //$ngos = array();
      while ($row=mysqli_fetch_array($result)){
        echo ("<tr><td>$row[name]</td>");
  
        echo ("<td>$row[description]</td>");
        
       echo ("<td><a href='actedit.php?id=$row[id]'>Edit</a></td> 
        <td><a href='actdelete.php'>Delete</a></td>
              
              <td><a href='actdetails.php?id=$row[id]'>View</a></td></tr>
              <td><a href='../a_volunteerlist.php?idate(format)=$row[id]'>volunteers of this activity</a></td></tr>");
      }
      ?>
      <td><a href='activity_add.php'>Add activity</a></td>
      </table>
    </td>
   </tr>
</table>
</body>
</html>