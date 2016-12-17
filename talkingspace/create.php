<?php ?>  
<?php require 'core/init.php';?>
 
<?php
  //Get template & assign vars
  $topic = new Topic;
  
  if(isset($_POST['do_create'])){
	 //Create validator
	$validate = new Validator;
	$data = array();
	$data['title'] = $_POST['title'];
 	$data['body'] = $_POST['body'];
	$data['category_id'] = $_POST['category'];
	$data['user_id'] = getUser()['user_id'];
	$data['last_activity'] = date("Y-m-d H:j:s");
   
    $field_array = array('title', 'body', 'category');
	
    if (!$validate->isRequierd($field_array)){
		redirect('create.php','Please fill all required fields ','error');
	 }
     
    $insert_result = $topic->create($data);
	
	
	if($insert_result){
	   redirect('index.php', 'Stored new topic','sucess');
    } else{
		redirect('topic.php?id='.$topic_id, 'Problems with new topic','error');
   	}

      
  }
  $template = new Template('templates/createT.php');
  
  //Assign varibles 
  //$template->heading ='This is template heading';
  
  
  //Display templates
  echo $template;
?> 