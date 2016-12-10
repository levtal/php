 <?php ?>  
<?php require 'core/init.php';?>
 
<?php
  
   $topic = new Topic;
   
   $topic_id = $_GET['id'];
  //Get template & assign vars
  $template = new Template('templates/topicT.php');
  
  //Assign varibles 
  $template->topic   = $topic->getTopic($topic_id );
  $template->replies = $topic->getReplies($topic_id ); 
  $template->title   = $topic->getTopic($topic_id )['title'];
 




 //$template->heading ='This is template heading';
  
  
  //Display templates
  echo $template;
?> 