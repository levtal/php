 <?php include('left.php'); ?>
   
   <h1  align="center"><span class="label label-info">Random Art</span></h1>
    
	
<?php
   $internetConnection = checkdnsrr('php.net'); 
   if ($internetConnection){
       include('carousel.php'); 
       include('RandArt.php');
   }else {
	echo '<H1> No Internet Connection </H1><br>'; 
 }   
?>
 
 
 
<?php include('right.php'); ?>
 
 