<?php
// https://www.youtube.com/watch?v=j_tg21OVVwk&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3&index=17
//20 :00
 
class Database{
 public $host = DB_HOST;
 public $username = DB_USER;
 public $passward = DB_PASS;
 public $db_name = DB_NAME;
	
 public $link;  //mysqli object
 public $error;
	
  /*Class constructor*/
 public function __construct(){
	$this->connect();  // Call connect function
  }
	
     /*Connector*/	
 private function connect(){
  $this->link = new mysqli($this->host, $this->username, $this->passward, $this->db_name);
  if (! $this->link){
	$this->error = "Connection failed: ".  $this->link->connect_error;
    return false;
   }
 }// connect 
 
 
 /*select*/
 public function select($query){
	 
  $result = $this->link->query($query)  
	       or die($this->link->error.__LINE__);
 
  if ($result->num_rows > 0){
	return $result;  
  }else{
	 return false; 
  }
 }//select
  
 /*insert*/
 public function insert($query){
  $insert_row = $this->link->query($query)  
	       or die($this->link->error.__LINE__);
 
  if ($insert_row){
	header("Location: index.php?msg=".urlencode( 'Record added'));  
	exit();
  }else{
	  die('Error: ('. $this->link->errno . ') '. $this->link->errnor); 
  }
 }//insert 
  
  
 /*update*/
public function update($query){
  $update_row = $this->link->query($query)  
	       or die($this->link->error.__LINE__);
 
  if ($update_row){
	header("Location: index.php?msg=".urlencode( 'Record updated'));  
    exit();
 }else{
	  die('Error: ('. $this->link->errno . ') '. $this->link->errnor); 
  }
 }//update 


 
public function delete($query){
  $delete_row = $this->link->query($query)  
	       or die($this->link->error.__LINE__);
 
  if ($delete_row){
	header("Location: index.php?msg=".urlencode( 'Record deleted'));  
    exit();
 }else{
	  die('Error: ('. $this->link->errno . ') '. $this->link->errnor); 
  }
 }//update  
 
 
  
}//class Database

?>


         