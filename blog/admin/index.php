<!--admin/index.php -->
<?php include 'includes/header.php'; ?>
<?php
 $db = new Database();  //libreries/Database.php
 
 $query = "SELECT  posts.* , categories.name FROM posts
           INNER JOIN categories
           ON posts.Category=categories.id";  //Get  all posts
 $posts = $db->select($query);

 $query = "SELECT * FROM categories";  //Get  all categories
 $categories = $db->select($query);
?>

 <table class="table table-striped">
   <tr>
	<th>Post ID</th>
	<th>Post Title</th>
	<th>Category</th>
	<th>Author</th>
	<th>Date</th>
   </tr> 
   
   <?php  while($row = $posts->fetch_assoc()):?>
   	<tr>
		<td><?php  echo $row['id'];?></td>
		<td><a href="edit_post.php?id=<?php echo $row['id'];?>">
		      <?php echo $row['title'];?>
		    </a> 	
		</td>
		<td><?php  echo $row['name'];?></td>
		<td><?php  echo $row['author'];?></td>
		<td><?php  echo formatDate($row['date']);?></td>
	</tr> 
	<?php  endwhile;?>
  </table>
  
 <br>  
<table class="table table-striped">
    <tr>
	  <th>Category ID#</th>
	  <th>Category name</th>
	   
	</tr> 
	<?php  while($row = $categories->fetch_assoc()):?>
   	<tr>
		<td><?php  echo $row['id'];?></td>
		<td><a href="category.php?id=<?php echo $row['id'];?>">
		      <?php echo $row['name'];?>
		    </a> 	
		</td>
	</tr> 
	<?php  endwhile;?>
  </table> 

<?php include 'includes/footer.php'; ?> 