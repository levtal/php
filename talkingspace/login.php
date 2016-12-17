<?php ?>  
 <?php include('core/init.php'); ?>


<?php 
 
//echo "<br><pre>".print_r($_POST, true) . "</pre>";

 
 if(isset($_POST['do_login'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']); 
	
	$user= new User;
	if($user->login($username,$password)){
	    redirect('index.php','You are loged in','success'); 	
	}else{
	     redirect('index.php','Login is not valid','error'); 	
	
	}
	//echo "<br><pre>".$username . " ". $password . "</pre>";
 }else{
	 redirect('index.php'); 

	 
 }
 

?>  