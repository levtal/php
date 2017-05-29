<?php 
 
include('classes/DB.php');
 
if (isset($_POST['addCateg'])) {
        
    $parm=array(':category_name'=>$_POST['category_name']);
 	$q='INSERT INTO category  VALUES';  
    $holders = ' (\'\',:category_name)';
    $sql = $q. $holders;
    DB::query($sql, $parm);
  }
?>

<h1>Add New category</h1>
<form action="addCateg.php" method="post">
<input type="text" name="category_name" value="" placeholder="name"><p />
 
<input type="submit" name="addCateg" value="Add category">
</form>
