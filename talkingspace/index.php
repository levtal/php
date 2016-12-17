<?php require 'core/init.php';?>
 
<?php

  //Create Topic Object
   $topic = new Topic;// Defind in /libreries/Topic.php
   $user = new User;

 //Get template & assign vars
  $template = new Template('templates/frontpage.php');
  
  //Assign varibles 
  //$template->heading ='This is template heading';
  
  $template->topics =  $topic->getAllTopics();
  $template->totalTopics=$topic->getTotalTopics();
  $template->totalCategories =$topic->getTotalCategories();
  $template->totalUsers = $user->getTotalUsers();

  echo $template;