<?php
include_once("../ngo/ngoheader.php");
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<script></script>

</head>
<body>
<form id ="ngoForm"  method="post" action="actadd.php">

	    <table  allign="right" class="style1">
	    <tr>
		    <td> <label for="name">Activity Name:</label></td>
		    <td> <input  type="text" name="name" id="name"></td>
	    </tr>
	    <tr>
		    <td> <label for="description"> Description:</label></td>
		    <td> <textarea   type="text" name="description" id="description"></textarea></td>
	    </tr>
	    <tr>
	        <td><label for="address">Address:</label> </td>
	        <td><input type="text" name="address" id="address" /></td>
        </tr>
         <tr>
	        <td><label for="repetition">repetition</label> </td>
	        <td><input type="text" name="repetition" id="repetition"/></td>
        </tr>
        <tr>
	        <td><label for="start_time">Start Activity:</label></td>
	        <td><input type="datetime-local"  name="start_time" id="start_time" /></td>
        </tr>
         <tr>
	        <td><label for="end_time">End Activity:</label></td>
	        <td><input  type="datetime-local" name="end_time" id="end_time"/></td>
        </tr>
         
        <tr>
       		<td></td>
       		<td><button id="SubmitBtn" >Submit</button></td>
       	</tr>
	 </form>
	 </table>
	
</body>
</html>
 
