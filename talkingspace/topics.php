<?php ?>
  
<?php require 'core/init.php';?>
 
<?php
  //Get template & assign vars
 $topic = new Topic;
   //Get  category from URL
 $category = isset($_GET['category']) ? $_GET['category'] :null;
   //Get  user from URL
 $user_id = isset($_GET['user']) ? $_GET['user'] :null;
 $template = new Template('templates/topicsT.php');
   
  //$template->heading ='This is template heading';
 if(isset($category)){
	$template->topics = $topic->getByCategory($category );
	$template->title = 'Posts in "' . $topic->getCategory($category )['name'] . '"' ;
 }
 
if(isset($user_id)){
	$template->topics = $topic->getByUser($user_id );
	$template->title = 'Posts By'; 
	//$template->title = 'Posts By "' . $user->getUser($user_id )['username'] . '"' ;
 } 
 
 if(   !isset($category)  &&  !isset($user_id)  ){
	  $template->topics =  $topic->getAllTopics(); 
 }

  $template->totalTopics=$topic->getTotalTopics();
  $template->totalCategories =$topic->getTotalCategories();
  
  
  //Display templates
  echo $template;
?> 




<?php ?> 




