<?php 
session_start(); 
include('classes/DB.php');

if (isset($_POST['id'])) {
  $parm=array(  ':id'=>$_POST['id'],
                ':title'=>$_POST['title'], 
	            ':body'=>$_POST['body']
		     );
  $q = "UPDATE posts
       SET title = :title, body =:body
	   WHERE  id = :id";
  $holders = '(\'\',:title,:body,:id)';
  $sql = $q. $holders;
 
  $sql = $q;
  DB::query($sql, $parm);
}

echo '<script> location.replace("viewPost.php?id='.$_POST['id'] .'");</script>';
//header('Location: viewPost.php?id='.$_POST['id']);  
?>