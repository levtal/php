<?php 
 include('left.php');  
include('classes/DB.php');
 
if (isset($_POST['addArtist'])) {
        
    $sql='SELECT id 
	      FROM       movement
		  WHERE  title = "'. $_POST['movement'].'"';
    $movement_id = DB::query($sql,array());
    $movment_counter = count( $movement_id);
    //echo  'movment_counter= '.$movment_counter;
    if ($movment_counter == 0 ) { // No such movment so choose id of 'na'   
	      $mov_id = 1;
		  $mov_name = 'na';
	   } else {
		   $mov_id = $movement_id[0]['id'];
		   $mov_name = $_POST['movement'];
	   }	   
	//echo $mov_id;
	
    $parm=array(':name'=>$_POST['artist_name'], 
		        ':pic'=>$_POST['pic'], 
	            ':movement'=>$mov_name,
				':school'=>$_POST['school'] 
		     );
	$q='INSERT INTO artists  VALUES';  
    $holders = ' (\'\',:name,:pic,:movement,:school)';    
    $sql = $q. $holders;
    // echo "<br><pre>".print_r($parm, true) . "</pre>";
    
    DB::query($sql, $parm);
    $h = 'movments.php?id='.$mov_id;
	echo 'Adding  Artist '.$_POST['artist_name'];	
	echo '<meta http-equiv="refresh" content="0;url='.$h .'">';
	exit();
  }else{
	$sql='SELECT  title 
	      FROM       movement
		  WHERE  id = '.$_GET['id'];
    $movement_name = DB::query($sql,array());  
  }
  
  
?>

<h1>Add  Artist</h1>
<form action="addArtist.php" method="post">
 Name:<br>
 <input type="text" name="artist_name" style=" color:#131333" value="" placeholder="name"><p />
 ImageURL:<br>
   <input type="text" name="pic" style=" color:#131333" value="" placeholder="pic url"><p />
 Movement:<br>
  <input type="text" name="movement" style=" color:#131333" value="<?php echo $mov_name;   ?>" placeholder="movement"><p /> 
  School::<br>
   <input type="text" name="notes" style=" color:#131333" value="" placeholder="school"><p /> 
<input type="submit" name="addArtist" style=" color:#131333" value="Add Artist">
</form>
<?php include('right.php'); ?>