<?php
session_start();
include_once("../db_connect.php");
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Methods: GET, POST');
 
   
     $username = $_REQUEST['username'];
     $password =  $_REQUEST['password'];
   // echo $username,$password;
 
     $sql = "select * from ngo where
     username ='$username' and  password ='$password'";

$result = mysqli_query($DB_CONN,$sql) or die("can not executer query:$sql");
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{ 
    $_SESSION['IsValid']=true;
    $_SESSION["nid"] = $row["id"];
	$_SESSION["userName"] = $row["username"];
	//echo $row["username"] ;
        //echo $_SESSION["userName"] ;
//echo "login succesfull";
 header("Location:../volunteer/volunteersearch.php");
  //header("Location:index.php");
}

 else {
	echo "invalid username";
}
//echo $_SESSION["userName"];
      
      
    mysqli_close($DB_CONN);

       
       
?>