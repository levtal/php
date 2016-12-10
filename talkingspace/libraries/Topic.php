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

public function getByCategory($category_id){
	$sql = "SELECT topics.*, users.username, users.avatar, categories.name
				    FROM topics
					 
					INNER JOIN users
					ON topics.user_id = users.id
					 
					INNER JOIN categories
					ON topics.category_id = categories.id
					 
					
					WHERE topics.category_id =  ";
    $sql = $sql . $category_id;
	$this->db->query($sql);
	//$this->db->bind(':category_id',$category_id); 
	$results = $this->db->resultset();
	   
	//echo "<pre>".print_r($results, true) . "</pre>";
	//exit;
	return  $results;
  } 
  
  
  
//Get Total # of topics
  public function getTotalTopics(){
	$this->db->query("SELECT * FROM topics");
	$rows =  $this->db->resultset(); 
	return  $this->db->rowCount();
  }

//Get Total # of categories
  public function getTotalCategories(){
	$this->db->query("SELECT * FROM categories");
	$rows =  $this->db->resultset(); 
	return  $this->db->rowCount();
  }
  
 public function getCategory($category_id){
	$sql = "SELECT * FROM categories
	       WHERE id= :category_id";
	$this->db->query($sql);
	$this->db->bind(':category_id',$category_id);
	$row = $this->db->single();
	return  $row;
  } 
//Get Total # of replies
  public function getTotalreplies($topic_id){
	$this->db->query("SELECT * 
                      FROM replies
					  WHERE topics_id =" .$topic_id);
					 
	$rows =  $this->db->resultset(); 
	return  $this->db->rowCount();
  }
 
 
 public function getTopic($id){
	$sql = "SELECT topics.*, users.username,  users.name, users.avatar   
				    FROM topics
					 
					INNER JOIN users
					ON topics.user_id = users.id
					 
					WHERE topics.id = :id ";
    
	 
	$this->db->query($sql);
	$this->db->bind(':id',$id); 
	$row = $this->db->single();
	    
	// echo "<br><pre>".print_r($row, true) . "</pre>";
	//exit;
	return  $row;
  }
 
  public function getReplies($topic_id){
	$sql = "SELECT replies.*, users.*  
				    FROM replies
					 
					INNER JOIN users
					ON replies.topic_id = users.id
					 
					WHERE replies.topic_id = :topic_id 
					ORDER BY create_date ASC";
                    
	echo $sql;
	$this->db->query($sql);
	$this->db->bind(':topic_id',$topic_id); 
	 
	$results =  $this->db->resultset(); 
	  
	echo "<br><pre>".print_r($results, true) . "</pre>";
	exit;
	return  $results;
  }
 
 
 
 
 
}//class
 
 
 
 
 
 ?>  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  