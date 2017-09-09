<?php 
 include('classes/DB.php');
 $mov_id  = $_POST["mov_select"]; 
 $sql='SELECT  title 
	      FROM       movement
		  WHERE  id = '. $mov_id;
 $movement_name = DB::query($sql,array());
  $mov_name = $movement_name[0]['title'];
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