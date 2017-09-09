<?php 
 include('left.php');  
include('classes/DB.php');
 
if (isset($_POST['addArtist'])) {
    $mov_id  = $_POST["mov_select"]; 
    $sql='SELECT  title 
	      FROM       movement
		  WHERE  id = '. $mov_id;

  $movement_name = DB::query($sql,array());
  $mov_name = $movement_name[0]['title'];
  //echo $mov_name;
//	echo 	$mov_id; exit();
    $parm=array(':name'=>$_POST['artist_name'], 
		        ':pic'=>$_POST['pic'], 
	            ':movement'=>$mov_name,
				':school'=>$_POST['notes'] 
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
  <select name='mov_select' style=" color:#131333">
   
  <?php $sql='SELECT  id,title 
	   FROM       movement 
	   ORDER BY   title';
  
  $movment_rows = DB::query($sql,array());
  $movment_counter = count( $movment_rows);
   
  for ($i = 0; $i <  $movment_counter; $i++) {
    echo "<option value='" . $movment_rows[$i]["id"] . "'>" ;
    echo $movment_rows[$i]["title"] . "</option>";
  }
 ?>
 </select>
 <br> Notes:<br>
   <input type="text" name="notes" style=" color:#131333" value="" placeholder=""><p /> 
<input type="submit" name="addArtist" style=" color:#131333" value="Add Artist">
</form>
<?php include('right.php'); ?>