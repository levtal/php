<?php include 'config\config.php'; //$servername $username $password $dbname?>
<?php include 'libraries/Database.php';?>
<?php include 'includes/header.php';?>
<?php  
 $db = new Database();
 
 $query = "SELECT * FROM posts";
 $posts = $db->select($query);
?>

<?php if($posts) : ?>

    <div class="blog-post">
            <h2 class="blog-post-title">Sample Pandas post</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>demo 1</p>
            <p>demo 2</p> 
            <a class="readmore"	href="post.php?id=1">Read more </a>	
	</div><!-- /.blog-post -->

    <div class="blog-post">
            <h2 class="blog-post-title">Name itom2   blog post</h2>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

            <p>demo 3</p>
			<a class="readmore"	href="post.php?id=1">Read more </a>
    </div><!-- /.blog-post -->

    <div class="blog-post">
            <h2 class="blog-post-title">New feature</h2>
            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

            <p>Cdemo 444</p>
             
            <p>Donec ul gue.</p>
			<a class="readmore"	href="post.php?id=1">Read more </a>
    </div><!-- /.blog-post -->
<?php else :?>	
    <p>NO posts yet</p>
<?php endif;?>	
	
<?php include 'includes/footer.php';?>