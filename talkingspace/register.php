<?php ?>  
<?php require 'core/init.php';?>
 
<?php
  
  $topic = new Topic; //Create  topic object
  $usr = new User; //Create  user object
  $validate = new Validator;

  
 if(isset($_POST['register'])){//submit button in registerT.php
	 //Creata Data array
    $data = array();
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] = md5($_POST['password']);
	$data['password2'] = md5( $_POST['password2']);
	$data['about'] = $_POST['about'];
	$data['last_activity'] = date("Y-m-d  H:i:s");
	
	$field_array = array ('name','email','username','password','password2');
    if (!$validate->isRequierd($field_array)){
		redirect('register.php','Please fill all required fields ','error');
	 }
	
	if (!$validate->isValidemail($data['email'])){
		redirect('register.php','Please use valid email ','error'); 
	 }
	 
	if (!$validate->passwordsMatch($data['password'],$data['password2'])){
		redirect('register.php','Password match problem ','error'); 
	 } 
	 
	 
	// if we are here then all fields are correct 
	
	//upload Avatar image
	if ($usr->uploadAvatar() ){
	  	$data['avatar'] = $_FILES['avatar']["name"];//file name
	}else {
		$data['avatar'] = "noimage.png";
	}
  
 
  //register user
  $result = $usr->register($data);
 if( $result){
	    redirect('index.php','You are registered, please log in','Sucess');
   } else {
	   redirect('index.php','Error in registration','error');
   } 
}


  
 //Get template & assign vars
  $template = new Template('templates/registerT.php');
  echo $template;
?> 