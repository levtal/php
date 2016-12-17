 
 
<?php
function redirect($page = FALSE, $message = NULL, $message_type = NULL) {



 if (is_string ($page)){
   $location = $page;
 } else{
        $location = $_SERVER ['SCRIPT_NAME'];
   }

 //Check For Message
  if($message != NULL){
   //Set Message
   $_SESSION['message'] = $message;
  }
  
 //Check For Type
 if($message_type != NULL){
  //Set Message Type
  $_SESSION['message_type'] = $message_type;
  }
 
 header ('Location: '.$location);
 exit;
} 	 


//display message
function displayMesage(){
	
if (!empty($_SESSION['message']))	{
//echo "<br><pre>".print_r($_SESSION, true) . "</pre>";
	//assign message var
	$message = $_SESSION['message'] ;
	if (!empty($_SESSION['message_type'])){
		$message_type=$_SESSION['message_type'];
		//Create output
		if($message_type=='error'){
			       
			echo '<div class="alert alert-danger">'. $message. '</div>';
		} else{
		   echo '<div class="alert alert-success">'. $message. '</div>';
		}     
	}
	//unset message
	unset($_SESSION['message_type']);
	unset($_SESSION['message']);
 }else{
	 echo '';
	 }
  	
}
 
function isLoggedIn() {
 if(isset($_SESSION['is_logged_in'] )){// defind in user.php
	return true; 
  }else{
	return false;  
  }	
	
}
 
function getUser() {
	$userArray = array();
	$userArray['user_id'] = $_SESSION['user_id'];
	$userArray['username'] = $_SESSION['username'];
	$userArray['name'] = $_SESSION['name'];
	return $userArray;
}
 
 
?>  










