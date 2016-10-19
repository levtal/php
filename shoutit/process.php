<?php  
include 'database.php';

 
if (isset($_POST['submit'])) { // Check if form is submitted
	$user=  mysqli_real_escape_string($con,$_POST["user"]);
    $message=  mysqli_real_escape_string($con,$_POST["message"]);
	// Set time zone
	
	date_default_timezone_set ('Israel' );
	$time = date('h:i:s a',time());
	 
	echo  "user = ".$time ;
}
?>


 