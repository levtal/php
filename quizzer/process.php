<?php  

include 'database.php';

 
if (isset($_POST['submit']))  {
  // Check if form is submitted
	$user=  mysqli_real_escape_string($con,$_POST["user"]);
    $message=  mysqli_real_escape_string($con,$_POST["message"]);
	// Set time zone
	
	date_default_timezone_set ('Israel' );
	$time = date('h:i:s a',time());
	 
	 
	// validate input
	if ( !isset($user) || ($user == '')
		      || !isset( $message) || ( $message == '') ) {
	    $error = "Name or massage, bad input"; 
	   //echo     $error;
	   header("Location: index.php?error=".urlencode($error));
       exit();
	} else {
	      $query = "INSERT INTO shouts ";
		  $query =  $query . "(user,message, time) ";
		  $query =  $query . " VALUES ('$user','$message', '$time')";
		  //echo   $query."<br>";
        }
    $query_result = mysqli_query($con,$query);
	
	if (!$query_result){// insert error
		die('Insert error' . mysqli_error($con));
	}else{ 
    	header("Location: index.php");
		exit();
	 }
  }
  
?>


 