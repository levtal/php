
<!--admin/index.php -->

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
          <a class="blog-nav-item" href="posts.php">Add posts</a>
          <a class="blog-nav-item" href="posts.php">Add category</a>
           <a class="blog-nav-item pull-right" href="posts.php">Vist blog</a> 
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <div class="logo"><img src="../images/logo.png"/></div>
    <h1 class="blog-title">Admin  of Blog  </h1>
        <p class="lead blog-description">Pandas examples.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">


        <!-- Content   --->
         Content


      </div>    <!-- /.blog-main -->
     </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Pandas blog &copy; 2017 </p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     
    <script src="..js/bootstrap.js"></script>
   </body>
</html>




