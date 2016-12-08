<?php

class Topic{
	// Init the de Varible
  private $db;
  public function __construct(){
	$this->db= new Database;  
  }
  
  //Get all Topics 
  public function getAlltopics(){
	$this->db->query("SELECT topics.*, users.username, users.avatar, categories.name
				      FROM topics
					 
					 INNER JOIN users
					 ON topics.user_id = users.id
					 
					 INNER JOIN categories
					 ON topics.category_id = categories.id
					 
					 ORDER BY create_date DESC
					 ");
	//Assign the result
	$results = $this->db->resultset(); 
	return $results;
  }
}

/*
$this->db->query("SELECT topics.*, users.username, users.avatar,
	                          categories.name
				     FROM topics
					 INNER JOIN users
					 ON topics.user_id = users.id
					 
					 INNER JOIN categories
					 ON topics.category_id = categories.id
					 
					 ORDER BY create_date DESC
					 ");
*/
 ?>  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  