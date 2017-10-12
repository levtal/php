<?php   // Find painting of one artist_id
  
 include('classes/DB.php');
 include('left.php');   
 define("NUM_OF_COLUMN",4); 
 
 echo '<h1 align= "center">'.$_GET['artist_name'].'</h1>';
  
 $sql='SELECT  school ,  movement
       FROM   artists    
	   WHERE  id = ' . $_GET['artist_id'];
  $rows =DB::query($sql, array());
 
  
 
   $sql='SELECT  id,title  
	  FROM       movement
      WHERE title ="'. $rows[0]["movement" ].'"';
  $movment_rows = DB::query($sql,array());
  
  echo '<h3 align= "center"> <a href="movments.php?id='.$movment_rows[0]["id"].'">';
 
 echo  $movment_rows[0]["title"].'</a></h3> ';
  echo  $rows[0]["school" ].'<br>';



  $parm=array(':artist_id'=>$_GET['artist_id']);
                                        
   $sql='SELECT name, id, url  
	    FROM   paintings
		WHERE  artist_id =:artist_id';		 
		 
  $rows = DB::query($sql,$parm); 
  $numOfPaintings = count($rows);
  echo '<h4>';
  echo  '<br>Number of Paintings = '.$numOfPaintings;
 
  echo '[<a href="addPainting.php?artist_id='.$_GET['artist_id'];
  echo '&artist_name='.  $_GET['artist_name'] .'">';
  echo 'Add Painting</a>]</font>';
  echo '[<a href="editArtist.php?artist_id='. $_GET['artist_id'].'">';
  echo 'Edit Artist</a>]</font><br>';
  echo '</h4>';
  
  echo '<table width="94%" bgcolor="#0c0F0F" cellspacing="0" cellpadding="3" border="1" bordercolor="#333333">';
  $i=0;  
  $col = 1;
  while ($i < $numOfPaintings){  
  
	   echo '<td class="listItem" valign="top" align="center" width="25%">';
      
	 
       echo '<a href="'.$rows[$i]["url"] .'">';
	   echo '<font size="4" color="#ffcc66"> '. $rows[$i]["name" ].'</font>';
       echo '</a>';

    echo '<br><img src="'.$rows[$i]["url"] . '" height="250" width="250"><br>';
   
    echo '<a href="delPainting.php?id='. $rows[$i]["id"];
    echo  '&artist_name='.$_GET['artist_name'];
    echo '&artist_id='.$_GET['artist_id'].'">';
	echo 'X</a>';



   echo ' </td>';
	
	$i++;
    $col++;
	if ($col>NUM_OF_COLUMN) {
		$col = 1; 
		echo "</tr>";
	 }  

  }		 
 echo "</table>";		 
?>
<?php include('right.php'); ?> 