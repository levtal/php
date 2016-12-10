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
 
 
 
?>  