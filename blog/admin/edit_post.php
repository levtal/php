  <!--admin/edit_post.php -->
<?php include 'includes/header.php'; ?>

<?php  
 $db = new Database();  //libreries/Database.php
 $id = $_GET['id'];
 $query = "SELECT * FROM posts
          WHERE id = " . $id;  //Get  all posts
 $post = $db->select($query)->fetch_assoc();
  
 $query = "SELECT * FROM categories";  //Get  all categories
 $categories = $db->select($query);
?>
<?php ?>

 <form role="form" method="post" action="edit_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input name ="title" type="text" class="form-control"   
     placeholder="Enter Title"  
     value="<?php echo $post['title'];?>">
  </div>
  
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body" >
       <?php echo $post['body'];?>"
	 </textarea>
  </div>
  
    <!--       ----Category----       -->
  <div class="form-group">
    <label>Category</label>
	<select name="category" class="form-control">
	 <?php while($row = $categories->fetch_assoc()):?>
       <option> <?php echo $row['name'];?></option>
    <?php endwhile;?>
		 
	</select>
  </div>
  
  <div class="form-group">
    <label>Author </label>
    <input name ="author" type="text" class="form-control"   placeholder="Enter Author name">
  </div>
  <div class="form-group">
    <label>Tag </label>
    <input name ="tags" type="text" class="form-control"   placeholder="Enter Tag">
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