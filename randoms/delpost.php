<?php 
  session_start(); 
include('classes/DB.php');

 
 // echo $_GET['id'];// This data is loaded in the posts.php by pressing the '-' sigin
 
  $parm=array(':id'=> $_GET['id'] );
  
  $q = "DELETE FROM posts WHERE id =  :id";			 
 
 
   
 DB::query($q, $parm);
  
  header('Location: posts.php');   
   
  
?>