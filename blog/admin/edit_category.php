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
 <h1>Edit Categories </h1>
 <form role="form" method="post" action="edit_catgory.php">
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