<?php 
session_start(); 
include('classes/DB.php');
 
if (isset($_POST['title'])) {
 $parm=array( ':title'=> $_POST['title'], 
		      ':body' => $_POST['body'],
			  ':createdDate'=> date('Y-m-d H:i:s') 
		     );


//echo "<br><pre>".print_r($parm, true) . "</pre>";
 $q='INSERT INTO posts VALUES';  
 $holders = '(\'\',:title,:body,:createdDate)';
 $sql = $q. $holders;
 DB::query($sql, $parm);
  
}
header('Location: posts.php');  
?>