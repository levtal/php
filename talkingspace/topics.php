<?php ?>
  
<?php require 'core/init.php';?>
 
<?php
  //Get template & assign vars
 $topic = new Topic;
   //Get  category from URL
 $category = isset($_GET['category']) ? $_GET['category'] :null;

 $template = new Template('templates/topicsT.php');
   
  //$template->heading ='This is template heading';
 if(isset($_GET['category'])){
	$template->topics = $topic->getByCategory($category );
	$template->title = 'Posts in "' . $topic->getCategory($category )['name'] . '"' ;
 }
 
 
 
 if(!isset($_GET['category'])){
	  $template->topics =  $topic->getAllTopics(); 
 }

  $template->totalTopics=$topic->getTotalTopics();
  $template->totalCategories =$topic->getTotalCategories();
  
  
  //Display templates
  echo $template;
?> 




<?php ?> 




