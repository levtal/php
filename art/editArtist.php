 <?php
 include('left.php');  
 require_once ('classes/DB.php');
 
$sql=  'SELECT  id, name, pic, movement, school
	    FROM  artists 
	    WHERE id= "'.$_GET['artist_id'].'"';
$artist_rows = DB::query($sql,array()); 
 ?>

 <h1 class="hero">Edit Artist</h1>
 <form id="frm"action="updateArtist.php" method="post">
  Name:<br> <input type="text" name="artist_name"
            style=" color:#131333"   
            value="<?php echo $artist_rows[0]['name'];?>" 
			placeholder="name"><p /><br>
  
  ImageURL:<br> <input type="text" name="pic"  
            style=" color:#131333"    
            value="<?php echo $artist_rows[0]['pic'];?>" 
			placeholder="Image URL"><p /><br> 
  Movement:<br> <input type="text" name="movement" 
            style=" color:#131333"
            value="<?php echo $artist_rows[0]['movement'];?>" 
			placeholder="nd"><p /><br> 	
  School:<br> <input type="text" name="school" 
            style=" color:#131333"  
            value="<?php echo $artist_rows[0]['school'];?>" 
			placeholder="nd"><p /><br> 			
 
  <input type="hidden" name="artist_id" value="<?php echo $_GET['artist_id'];?>" placeholder="id"><p />
  <input type="submit" name="updateArtist" style=" color:#131333" value="Update">
 </form>
  

<?php include('right.php'); ?>