 <?php include('left.php'); ?>
   
   
    
	
<?php
   $internetConnection = checkdnsrr('php.net'); 
   if (! $internetConnection){
      echo '<H1> No Internet Connection </H1><br>'; 
  } 
	
 ?>
 
 
 
<?php include('right.php'); ?>
 
 