<?php 
  session_start(); 
include('classes/DB.php');

 
  echo $_GET['durl'];// This data is loaded in the showbookmark.php by pressing the '-' sigin

  $parm=array(':durl'=> $_GET['durl'] );
  
  $q = "DELETE FROM bookmark WHERE url =  :durl";			 
  DB::query($q, $parm);
  $_SESSION['msg'] =  'URL: <b>'. $_GET['name'] . ' </b> deleted from bookmark';
  header('Location: showBookmark.php');   
   
  
?>

 
