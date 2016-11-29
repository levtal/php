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
<?php
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
	  $query = "UPDATE  posts SET
	            title = '$title', 
				body = '$body',
				category = '$category',
				author = '$author', 
				tags = '$tags'
				WHERE id=".$id; 
   	  $update_row = $db->update($query); 
    }
 }
?>
<?php
if (isset($_POST['delete'])){
	$query = "DELETE from posts
	          WHERE id =". $id;
	$delete_row = $db->delete($query); 		
    echo $query;	
}
?>
 <h1>Edit Post </h1>
 <form role="form" method="post" 
  action="edit_post.php?id=<?php echo $id?>">
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
	 <?php 
	   while($row = $categories->fetch_assoc()): 
           if($row['id']== $post['category']){
		      $selected='selected';
			}else{$selected='';}  
	 ?>
		 <option value="<?php echo $row['id']; ?>"<?php echo $selected; ?>> 
		     <?php echo $row['name'];?>
		 </option>
        <?php endwhile;?>
		 
	</select>
  </div>
  
  <div class="form-group">
    <label>Author </label>
    <input name ="author" type="text" class="form-control"   
	 placeholder="Enter Author name" value="<?php echo $post['author'];?>">
  </div>
  <div class="form-group">
    <label>Tag </label>
    <input name ="tags" type="text" class="form-control"
	placeholder="Enter Tag" value="<?php echo $post['tags'];?>">
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