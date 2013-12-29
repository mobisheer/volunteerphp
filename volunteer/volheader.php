<style type="text/css">
.header{
	border:1px solid black
top:0px;
 width:100%;
 height:10%;
 background-color:gray;
}

</style>
<div class="header" id="sample">
<?php session_start();
?>
<table width="100%">
<tr><td ></td>
<td ></td></tr>
<tr>
<td ></td>
<td width="30%">
Welcome: <?php 
echo $_SESSION["userName"];

    //echo $_SESSION["vid"]; ?>&nbsp
    <a href ="homepage.php" id="homebtn" >Home</a>&nbsp
 <a href="../volunteer/logout.php" id="logoutbtn" >logout</a>&nbsp
<a href ="volunteer/volprofile.php" id="profilebtn" >Profile</a>&nbsp
<a href ="../usernotification_list.php" id="notificationbtn" >Notifications</a>&nbsp
</td>
</tr>
</table>
</div>

