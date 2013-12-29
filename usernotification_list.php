
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Papermashup.com | PHP Pagination</title>
<link href="../style.css" rel="stylesheet" type="text/css" />

<style>
.paginate {
font-family:Arial, Helvetica, sans-serif;
	padding: 3px;
	margin: 3px;
}

.paginate a {
	padding:2px 5px 2px 5px;
	margin:2px;
	border:1px solid #999;
	text-decoration:none;
	color: #866;
}
#delete {
	padding:2px 5px 2px 5px;
	margin:2px;
	border:1px solid #999;
	text-decoration:none;
	color: #866;
}

.paginate a:hover, .paginate a:active , #delete a:hover{
	border: 1px solid #999;
	color: #000;
}
.paginate span.current {
    margin: 2px;
	padding: 2px 5px 2px 5px;
		border: 1px solid #999;
		
		font-weight: bold;
		background-color: #999;
		color: #FFF;
	}
	.paginate span.disabled {
		padding:2px 5px 2px 5px;
		margin:2px;
		border:1px solid #eee;
		color:#DDD;
	}
	
	li{ width:60%;
		padding:4px;
		margin-bottom:3px;
		background-color:#FCC;
		list-style:none;}
		
	ul{margin:6px;
	padding:0px;}	
	
</style>
</head>

<body>



<?php

include_once("volunteer/volheader.php");
	include_once('connect.php');	

	$tableName="user_notification";		
	$targetpage = "usernotification_list.php"; 	
	$limit = 10; 
	$vId= $_SESSION["vid"];
	$query = "SELECT COUNT(*) as num FROM $tableName  ";
	
	$total_pages = mysqli_fetch_array(mysqli_query($conn,$query));
	$total_pages = $total_pages["num"];
	
	$stages = 3;

	$page = $_GET['page'];
	if($page){
		$start = ($page - 1) * $limit; 
	}else{
		$start = 0;	
		}	
	
    // Get page data
	$query1 = "SELECT * FROM $tableName LIMIT $start, $limit";
	$result2= mysqli_query($conn, $query1);
	
	// Initial page num setup
	if ($page == 0){$page = 1;}
	$prev = $page - 1;	
	$next = $page + 1;							
	$lastpage = ceil($total_pages/$limit);		
	$LastPagem1 = $lastpage - 1;					
	
	
	$paginate = '';
	if($lastpage > 1)
	{	
	

	
	
		$paginate .= "<div class='paginate'>";
		// Previous
		if ($page > 1){
			$paginate.= "<a href='$targetpage?page=$prev'>previous</a>";
		}else{
			$paginate.= "<span class='disabled'>previous</span>";	}
			

		
		// Pages	
		if ($lastpage < 7 + ($stages * 2))	// Not enough pages to breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page){
					$paginate.= "<span class='current'>$counter</span>";
				}else{
					$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
			}
		}
		elseif($lastpage > 5 + ($stages * 2))	// Enough pages to hide a few?
		{
			// Beginning only hide later pages
			if($page < 1 + ($stages * 2))		
			{
				for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// Middle hide some front and some back
			elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// End only hide early pages
			else
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
			}
		}
					
				// Next
		if ($page < $counter - 1){ 
			$paginate.= "<a href='$targetpage?page=$next'>next</a>";
		}else{
			$paginate.= "<span class='disabled'>next</span>";
			}
			
		$paginate.= "</div>";		
	
	
}
 echo $total_pages.' Results';
 // pagination
 echo $paginate;
?>

<ul width="500px">

<?php 
 	
$query2 = "SELECT * FROM user_notification where u_id =$vId";
	$result2 = mysqli_query($conn, $query2);
	
		while($row = mysqli_fetch_array($result2))
		{
		
		echo ("<li> <div>".$row["vol_name"].": your request to join in "  .$row["act_name"]. " has ".$row["message"]);
 echo(" on ".$row["accepted_date"]);
 echo  " vol: ".$vId;
 echo $row["vol_name"];
		echo ("<a allign=right href=notification_delete.php?id=$row[id] id= delete>&nbsp x </a>".'</li>');
		}
	
	?>
</ul>
	
    
    
    
    

</body>
</html>
    

