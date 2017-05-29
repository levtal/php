<?php 
session_start(); 
include('classes/DB.php');

 
if (isset($_POST['addURL'])) {
        
    $parm=array(':name'=>$_POST['name'], 
		        ':url'=>$_POST['url'], 
	            ':category_id'=>$_POST['category_id']
		     );
 	$q='INSERT INTO bookmark VALUES';  
    $holders = ' (\'\',:name,:url,:category_id)';
    $sql = $q. $holders;
    DB::query($sql, $parm);
	//$msg = 'URL: <b>'.$_POST['url'] . ' </b> add to bookmark';
    //session_start();
   
   $_SESSION['msg'] =  'URL: <b>'.$_POST['name'] . ' </b> add to category = '. $_POST['category_id'];
    
	header('Location: showBookmark.php');  
  }
?>

<h1>Add New URL</h1>
<form action="addURL.php" method="post">
Item name:<br>
<input type="text" name="name" value="" placeholder="name"><p />
URL:<br>
<input type="text" name="url" value="" placeholder="url"><p />
 
<input type="hidden" name="category_id" value="<?php echo $_GET['cat_id'];?>" placeholder="id"><p />
<input type="submit" name="addURL" value="Add URL">
</form>

 