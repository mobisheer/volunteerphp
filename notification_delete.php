<?php 
include_once("db_connect.php");
 $dId= $_REQUEST['id']; 
 //echo $dId;
 $query = "delete from user_notification where id =$dId"; 
 $result = mysqli_query($DB_CONN, $query);

include_once("usernotification_list.php");
 mysqli_close($DB_CONN);

?>