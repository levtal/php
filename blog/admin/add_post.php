 <!--admin/add_post.php -->
<?php include 'includes/header.php'; ?>
<?php
  $db = new Database();  //libreries/Database.php
  
 if (isset($_POST['submit'])){ // The  submit vutton was pressed");
    // db->$link is defined in //libreries/Database.php
   //   as $this->link = new mysqli ...
  $title = mysqli_real_escape_string($db->link, $_POST['title']);
  $body = mysqli_real_escape_string($db->link, $_POST['body']);
  $category = mysqli_real_escape_string($db->link, $_POST['category']);
  $author = mysqli_real_escape_string($db->link, $_POST['author']);
  $tags = mysqli_real_escape_string($db->link, $_POST['tags']);
	
       // Simple validation 
  if($title ==''|| $body==''||$category ==''||$author=='' )	{
	  $error=('Fill ALL fields');
   }
  else{
	  $query = "INSERT INTO posts
	          (title, body, category, author, tags) 
              VALUES('$title', '$body', $category,'$author','$tags')";
    
	  $insert_row = $db->insert($query); 
       //Function 'insert' defined  in  /libreries/Database.php
   }
 }
 
 ?>
<?php  
 
  
 
 $query = "SELECT * FROM categories";  //Get  all categories
 $categories = $db->select($query);
?>
<h1>Add new post</h1>

 <form role="form" method="post" action="add_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input name ="title" type="text" class="form-control"   placeholder="Enter Title">
  </div>
  
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body">
	</textarea>
  </div>
  
  <div class="form-group">
    <label>Category</label>
	<select name="category" class="form-control">
	<?php 
	   while($row = $categories->fetch_assoc()): 
           if($row['id']== $post['category']){
		      $selected='selected';
			}else{$selected='';}  
	 ?>
		 <option <?php echo $selected; ?>
		          value= "<?php echo $row['id'];?>" > 
		    <?php echo $row['name'];?>
		 </option>
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
  </div>
  <br>
</form> 

<?php include 'includes/footer.php'; ?> 