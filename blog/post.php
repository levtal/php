 <?php include 'includes/header.php';?>
 
<?php  
 $db = new Database();  //libreries/Database.php
 $id = $_GET['id'];
 $query = "SELECT * FROM posts
          WHERE id = " . $id;  //Get  all posts
 $post = $db->select($query)->fetch_assoc();
  
 $query = "SELECT * FROM categories";  //Get  all categories
 $categories = $db->select($query);
?>
 
   <div class="blog-post">
        <h2 class="blog-post-title"><?php  echo $post['title'];?></h2>
        <p class="blog-post-meta"> 
		   <?php  echo formatDate($post['date']); ?> by 
		   <a href="#"><?php  echo $post['author'];?></a>
		</p>
        <?php echo $post['body']; ?> 
         	
	 </div><!-- /.blog-post -->
 <?php include 'includes/footer.php';?>