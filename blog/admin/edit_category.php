<?php include 'includes/header.php'; ?>
<?php  
 $db = new Database();  //libreries/Database.php
 $id = $_GET['id'];
 $query = "SELECT * FROM categories
          WHERE id = " . $id;  
 $category = $db->select($query)->fetch_assoc();
  
 $query = "SELECT * FROM categories";  //Get  all categories
 $categories = $db->select($query);
?>

<?php
if (isset($_POST['submit'])){ // The  submit vutton was pressed");
    // db->$link is defined in //libreries/Database.php
   //   as $this->link = new mysqli ...
  $name = mysqli_real_escape_string($db->link, $_POST['name']);
         // Simple validation 
  if($name =='') {
	  $error=('Fill category name field');
   }
  else{
	  $query = "UPDATE  categories SET
	            name = '$name'
				WHERE id=".$id; 
   	  $update_row = $db->update($query); 
    }
 }
?>
<?php
if (isset($_POST['delete'])){
	$query = "DELETE from categories
	          WHERE id =". $id;
	$delete_row = $db->delete($query); 		
    echo $query;	
}
?>


<?php ?>
 <h1>Edit Categories </h1>
 <form role="form" method="post" 
      action="edit_category.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <label>Category Name</label>
    <input name= "name" type="text" class="form-control"
	  placeholder="Enter category" 
	  value="<?php echo $category['name'];?>" >
  </div>
   
   
  <div> 
  
  <input name ="submit" type="submit" 
	           class="btn btn-default" value="Submit"/>

   <a href="index.php" class="btn btn-default">Cancel</a>
  <input name ="delete" type="submit" 
	           class="btn btn-danger" value="Delete"/>
	
  
   </div>
  <br>
</form>
<?php include 'includes/footer.php'; ?>