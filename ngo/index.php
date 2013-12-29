 <?php include_once("regheader.php");
 ?>
 <!DOCTYPE html>
<html>
<head>
<title></title>
<link href="" rel="stylesheet" type="text/css">
<style>
.style1 {
	margin-top: 10%;
	margin-left: -100%;
	margin-right: auto;
	width:100%;
	color: #FFFF0;
	font-weight: bold;
	background-color: lightblue;
}
</style>
<script></script>

</head>
<body>
    <form id ="ngoForm"  method="post" action="register.php">

	    <table   class="style1">
	    <tr>
		    <td> <label for="name">Full Name:</label></td>
		    <td> <input  type="text" name="name" id="name"></td>
	    </tr>
	    <tr>
		    <td> <label for="username">UserName:</label></td>
		    <td> <input  type="text" name="username" id="username"></td>
	    </tr>
	    <tr>
	        <td><label for="password">New Password:</label> </td>
	        <td><input type="password" name="password" id="password"></textarea></td>
        </tr>
         <tr>
	        <td><label for="confirm_password">Confirm Password:</label> </td>
	        <td><input type="password" name="confirm_password" id="confirm_password"></textarea></td>
        </tr>
        <tr>
	        <td><label for="name">Description:</label></td>
	        <td><textarea name="description" id="description"></textarea></td>
        </tr>
         <tr>
	        <td><label for="address">Address:</label> </td>
	        <td><textarea name="address" id="address"></textarea></td>
        </tr>

         <tr>
	        <td> <label for="sectors">Sectors:</label></td>
	        <td><input type="text" name="sectors" id="sectors"></td>
        </tr>
         <tr>
	        <td> <label for="keywords">Keywords:</label> </td>
	        <td><input type="text" name="keywords" id="keywords"></td>
	    </tr>
        <tr>
	        <td> <label for="contact_person">Contact Person:</label> </td>
	        <td><input type="text" name="contact_person" id="contact_person"></td>
        </tr>
         <tr>
	        <td><label for="mobile">Mobile:</label></td>
	        <td> <input type="text" name="mobile" id="mobile"></td>
        </tr>
         <tr>
	        <td> <label for="email">Email:</label></td>
	        <td><input type="text" name="email" id="email"></td>
        </tr>
         <tr>
	        <td> <label for="website">Website:</label> </td>
	        <td> <input type="text" name="website" id="website"></td>
        </tr>
        <tr>
       		<td></td>
       		<td><button id="ngoFormSubmitBtn" data-inline="true">Submit</button></td>
	

	    
	      
    </form>
    

</body>
</html>