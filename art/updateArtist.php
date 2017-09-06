<?php 
 
include('classes/DB.php');
  
 $sql='SELECT id 
	      FROM       movement
		  WHERE  title = "'. trim($_POST['movement']).'"';
   	  
 
  
 $movement_id = DB::query($sql,array());
 $movment_counter = count( $movement_id);
    
 
 if ($movment_counter == 0 ) { // No such movment so choose id of 'na'   
	      $mov_id = 1;
		  $mov_name = 'na';
	   } else {
		   $mov_id = $movement_id[0]['id'];
		   $mov_name = trim($_POST['movement']);
	   }	   
	//echo $mov_id;
  
 $parm=array( ':artist_id'=>$_POST['artist_id'],
              ':artist_name'=>$_POST['artist_name'],
              ':pic'=>$_POST['pic'],			  
              ':movement'=>$mov_name,
              ':school'=>$_POST['school'],			   
    	    );
 
  $sql =  "UPDATE artists
          SET   
    		name = :artist_name, 
		    pic = :pic,			  
            movement = :movement,
            school = :school 	
		  WHERE  id   = :artist_id";
  DB::query($sql, $parm);
  
 $url = 'Location:movments.php?id='.$mov_id;
 header( $url);  
?> 