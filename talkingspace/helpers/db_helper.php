<?php 
//get the number replies per topic
 function replyCount($topic_id){
	$db = new Database;
	$sql= "SELECT * FROM replies
	      WHERE topic_id = :topic_id";
    $db->query($sql);
	
   
	$db->bind(":topic_id",$topic_id);
	//Assign rows
	$rows = $db->resultset();
	//Get count
	return $db->rowCount();
 }
 
function getCategories() {
	$db = new Database;
    $db->query('SELECT * FROM categories');
	$resultes = $db->resultset();
	return  $resultes;  
}
 
function userPostCount($user_id){
	$db = new Database;
	//Count post of a user
	$sql= "SELECT * FROM topics
	      WHERE user_id = :user_id";
    $db->query($sql); 
	$db->bind(':user_id', $user_id);
	$rows = $db->resultset();
	$topic_count = $db->rowCount();
	
	//Count replies of a user
	$sql= "SELECT * FROM replies
	      WHERE user_id = :user_id";
    $db->query($sql); 
	$db->bind(':user_id', $user_id);
	$rows = $db->resultset();
	$reply_count = $db->rowCount();
	
	
	
	//echo "<br><pre>".print_r($rows, true) . "</pre>";
   // echo "<br> reply_count = " . $reply_count;
	
    //exit;
    return $topic_count + $reply_count;
}
?>  