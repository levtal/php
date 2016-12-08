<?php require 'core/init.php';?>
 
<?php

  //Create Topic Object
   $topic = new Topic;// Defind in /libreries/Topic.php
  //Get template & assign vars
  $template = new Template('templates/frontpage.php');
  
  //Assign varibles 
  //$template->heading ='This is template heading';
  
  $template->topics =  $topic->getAllTopics();
  //Display templates
  echo $template;