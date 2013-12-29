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
    <td align="center"><strong>List of Volunteer Details</strong></td>
  </tr>
  <tr>
    <td>
      <table border="1" allign="center" style="background-color:lightblue">
      <tr>
      <td><strong>Full Name</strong></td>
      <td><strong>User Name</strong></td>
      <td><strong>Description</strong></td>
      <td><strong>Interests</strong></td>
      </tr>
      <?php
     include_once("../db_connect.php");//database connection
      $query = "select * from volunteer";
      $result = mysqli_query($DB_CONN,$query) or die("can not execute query:$query");
      //$ngos = array();
      while ($row=mysqli_fetch_array($result)){
        echo ("<tr><td>$row[name]</td>");
        echo ("<td>$row[username]</td>");
        echo ("<td>$row[description]</td>");
        echo ("<td>$row[interests]</td>");
        echo ("<td><a href='volunteeredit.php?id=$row[id]''>Edit</a></td> 
                <td><a href='volunteerdelete.php?id=$row[id]'>Delete</a></td>
                <td><a href='volunteerview.php?id=$row[id]'>View</a></td></tr>");
      }
      ?>
      </table>
    </td>
   </tr>
</table>
</body>
</html>