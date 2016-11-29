<?php include 'includes/header.php';?>
<?php  
 $db = new Database();  //libreries/Database.php
 $query = "SELECT * FROM posts ORDER BY id DESC";  //Get  all posts
 $posts = $db->select($query);
 
 $query = "SELECT * FROM categories";  //Get  all categories
 $categories = $db->select($query);
?>

<?php if($posts): ?>
     <?php while($row = $posts->fetch_assoc()): ?>
      <div class="blog-post">
        <h2 class="blog-post-title"><?php  echo $row['title'];?></h2>
        <p class="blog-post-meta"> 
		   <?php  echo formatDate($row['date']); ?> by 
		   <a href="#"><?php  echo $row['author'];?></a>
		</p>
        <?php  echo shortenText($row['body'],400); ?> 
        <a class="readmore"	
		   href="post.php?id=<?php  echo urlencode($row['id']);?>">
		   Read more 
		</a>	
	  </div><!-- /.blog-post -->
     <?php endwhile; ?>
<?php else:?>	
    <p>NO posts yet</p>
<?php endif;?>	
	<?php      ?>
<?php include 'includes/footer.php';?>