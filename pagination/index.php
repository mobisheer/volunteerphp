<?php 
include_once('../db_connect.php');
include_once('function.php');
$query="select * from user_notification order by id desc";
$res=mysqli_query($DB_CONN,$query);
$count=mysqli_num_rows($res);
if($count > 0){
      $paginationCount=getPagination($count);
}
 
$content ='<div id="pageData"></div>';
if($count > 0){
 
$content .='<ul class="tsc_pagination tsc_paginationC tsc_paginationC01">
    <li class="first link" id="first">
        <a  href="javascript:void(0)" onclick="changePagination(\'0\',\'first\')">F i r s t</a>
    </li>';
    for($i=0;$i<$paginationCount;$i++){
 
        $content .='<li id="'.$i.'_no" class="link">
          <a  href="javascript:void(0)" onclick="changePagination(\''.$i.'\',\''.$i.'_no\')">
              '.($i+1).'
          </a>
    </li>';
    }
 
    $content .='<li class="last link" id="last">
         <a href="javascript:void(0)" onclick="changePagination(\''.($paginationCount-1).'\',\'last\')">L a s t</a>
    </li>
    <li class="flash"></li>
</ul>';
}
echo $content;
?>