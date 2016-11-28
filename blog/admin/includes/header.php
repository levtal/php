<!---admin/include/header.php-->  

 


<?php include '../config/config.php'; //$servername $username $password $dbname?>
<?php include '../libraries/Database.php';?>
<?php include '../helpers/format_helper.php';?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin area</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
  </head>
  
  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Dashboard</a>
          <a class="blog-nav-item" href="add_post.php">Add posts</a>
          <a class="blog-nav-item" href="add_category.php">Add category</a>
          <a class="blog-nav-item pull-right" 
		      href="../index.php">Vist blog
		  </a> 
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <div class="logo"><img src="../images/admin.png"/></div>
          <!--h1 class="blog-title">Admin  Area  </h1-->
        <p class="lead blog-description">Pandas examples.</p>
      </div>
         <div class="row">
          <div class="col-sm-12 blog-main">
		  <?php  if (isset($_GET['msg'])):  ?>
			<div class="alert alert-success">
			 <?php  echo htmlentities($_GET['msg']);  ?>
			
			</div>  
		  
		  <?php endif;?>
		  