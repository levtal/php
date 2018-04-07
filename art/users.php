<?php 
 include('left.php'); 
 include("simple_html_dom.php");
 require_once ('classes/DB.php'); 
  
$sql='SELECT  id,email,username,password 
	   FROM       users 
	   ORDER BY   username';
  
  $rows = DB::query($sql,array());
  $counter = count( $rows);  
 
  
  for ($i = 0; $i <  $counter; $i++) {
     
     echo $i.': '.$rows[$i]["username"]. '  ' ;
	 echo $rows[$i]["email"]. ' : ' ;
	 echo $rows[$i]["password"].'<br> ';  
  }
include('right.php');
?> 
  
 
 
    