<?php 
session_start(); 
include('classes/DB.php');

if (isset($_POST['id'])) {
  $parm=array(  ':id'=>$_POST['id'],
                ':title'=>$_POST['title'], 
	            ':body'=>$_POST['body']
		     );
			 
  //echo "<br><pre>".print_r($parm, true) . "</pre>";

  $q = "UPDATE posts
       SET title = :title, body =:body
	   WHERE  id = :id";
  $holders = '(\'\',:title,:body,:id)';
  $sql = $q. $holders;
 
 $sql = $q;
 DB::query($sql, $parm);
  
}
header('Location: viewPost.php?id='.$_POST['id']);  
?>