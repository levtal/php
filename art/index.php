<?php 
  include('left.php'); 
  $ip = getenv("REMOTE_ADDR") ; 
  Echo "Your IP is " . $ip; 
  $internetConnection = checkdnsrr('php.net'); 
   if ($internetConnection){
       if(isset($_GET['id'])){
		    include('GetRandArtist.php');
	   }
       else {  
	      include('GetRandArt.php');
		}
   }else {
	echo '<H1> No Internet Connection </H1><br>'; 
 }   
 include('right.php'); ?>
 
 