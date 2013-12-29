<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<script></script>

</head>
<body>
<form id ="ngoForm"  method="post" action="vregister.php">

	    <table  allign="right" class="style1">
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
	        <td><label for="description">Description:</label></td>
	        <td><textarea name="description" id="description"></textarea></td>
        </tr>
         <tr>
	        <td><label for="address">Address:</label> </td>
	        <td><textarea name="address" id="address"></textarea></td>
        </tr>

         <tr>
	        <td> <label for="interests">Interests:</label></td>
	        <td><input type="text" name="interests" id="interests"></td>
        </tr>
         
        <tr>
	        <td> <label for="hours_week">Hours per Week:</label></td>
	        <td><input type="text" name="hours_week" id="hours_week">  </td>
        </tr>
         <tr>
	        <td><label for="phone">Mobile:</label></td>
	        <td> <input type="text" name="phone" id="phone"></td>
        </tr>
         <tr>
	        <td> <label for="email">Email:</label></td>
	        <td><input type="text" name="email" id="email"></td>
        </tr>
         
        <tr>
       		<td></td>
       		<td><button id="ngoFormSubmitBtn" >Submit</button></td>
	

	    
	      
    </form>
     <form id ="ngoForm"  method="post" action="login.html">
     
		
     <p> Already a member.please click here to 
     	<input type="submit" id="submitbtn"value="Login"/></p>
     	</form>

</body>
</html>
