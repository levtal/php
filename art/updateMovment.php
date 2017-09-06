<?php 
 
include('classes/DB.php');
 
 //echo $_POST['id'];
 
 echo $_POST['notes'];
 
  
 $parm=array( ':id'=>$_POST['id'],
              ':title'=>$_POST['movment_name'], 	
              ':notes'=>$_POST['notes'] 				  
    	    );
 
 //echo "<br><pre>".print_r($parm, true) . "</pre>";
//exit();
 $sql =  "UPDATE movement
          SET   
    		title = :title, 
            notes = :notes 			
		  WHERE  id   = :id";
  DB::query($sql, $parm);
  
 $url = 'Location:movments.php?id='.$_POST['id'];
 header( $url);  
?> 