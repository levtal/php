<?php 
session_start(); 
include('classes/DB.php');
 
 
  echo $_POST['category_name']; 

  echo $_POST['category_id'];

 $parm=array( ':category_id'=>$_POST['category_id'],
              ':category_name'=>$_POST['category_name']  
		     );
 

  $sql = "UPDATE category
       SET name = :category_name 
	   WHERE  id = :category_id";
 	   
  DB::query($sql, $parm);
  header('Location: showBookmark.php');  
?>
 