<style type="text/css">
.header{
	border:1px solid black
top:0px;
 width:100%;
 height:10%;
 background-color:gray;
}

#sp{
	font-size:20px;
	color:white;
}
</style>
<div class="header" id="sample">
<?php session_start();
?>
Welcome:&nbsp<span id="sp"><?php echo $_SESSION["userName"];
 //echo $_SESSION["nid"];
    //echo $_SESSION["vid"]; ?></span>&nbsp&nbsp
click here to <a href="../ngo/logout.php" id="logoutbtn" >logout</a>&nbsp&nbsp
<a href ="../ngo/ngoprofile.php" id="profilebtn">Profile</a>&nbsp &nbsp
<a href ="../ngoactivity/nactlist.php" id="activitybtn" >Activity</a>&nbsp&nbsp
<a href ="../requests.php" id="requestbtn">Requests</a>

</div>

