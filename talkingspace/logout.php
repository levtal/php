<?php include('core/init.php'); ?>


<?php 
  if(isset($_POST['do_logout'])){ // do_logout button pressed(footer.php)
                    
	$user= new User;
	if($user->logout()){
	    redirect('index.php','You are loged out','success'); 	
	}else{
	     redirect('index.php'); 	
	}
	//echo "<br><pre>".$username . " ". $password . "</pre>";
  } 
?>  