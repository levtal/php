<!DOCTYPE html>
<?php include 'functions/functions.php';   ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 
    <title>The gaming place</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

      <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">The gaming place</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="register.html">Create account</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Enter password">
            </div>
            <button name=submit" type="submit" class="btn btn-default">Login</button>
          </form>
        </div><!--/.nav-collapse -->
      </div>
  </nav>

  <div class="container">

  <div class="row">

  
   <!-- start side bar -->
   <div class="col-md-4">
     <div class="cart-block">
      <form action="cart/update" method="post">
       <table cellpadding="6" cellspacing="1" styles="width:1004" border="1">
        <tr>
          <th> QTY</th>
          <th>Item Description</th>
          <th style="text-align:right">Item price</th>
        </tr>
         <tr>
          <td></td>
          <td class="right"><strong>Total</strong></td>
          <td class="right" style="text-align:right">$</td>
        </tr>
      </table>
       <br>
       <p>
        <button class="btn btn-default" type="submit">Update Cart</button>
        <a class="btn btn-default" href="cart">Go to cart</a>
       </p>
    </form>
   </div>
     <!--  upper side  panel -->
    <div class="panel panel-default panel-list">
        <div class="panel-heading panel-heading-dark">
         <h3 class="panel-title">Categories</h3> <!--  panel title -->
       </div>
 
    <ul class="list-group">
	 <?php  getCats();?>
    </ul>
   </div>  <!-- end upper side  panel -->

  <!--  lower side  panel -->
    <div class="panel panel-default panel-list">
        <div class="panel-heading panel-heading-dark">
         <h3 class="panel-title">Brands</h3> <!--Lower left side  panel title -->
       </div>
 
    <ul class="list-group">
     <?php  getBrands();?>
	  </ul>
   </div>  <!-- end lower side  panel -->



  </div> <!-- end side bar -->
 


  <div class="col-md-8"><!--main bar -->
	<div class="panel panel-default">
	 <div class="panel-heading panel-heading-green"> 
	   <h3 class="panel-title">Latest releases</h3>
	 </div>
	<div class="panel-body"> 
	
	<div class="row">
	
    <div class="col-md-4 game">
       <div class="game-price">$11</div>
	   <a href="product.html" >
	        <img src="images/4.jpg"/>
	   </a>
	   <div class="game-title">
	       nig dog
	   </div>
	   <div class="game-add"> 
	   <button class="btn btn-primary" type="submit">add to cart
	   </button>
	 </div>
	</div>
	
	
	 <div class="col-md-4 game">
       <div class="game-price">$12</div>
	   <a href="product.html" >
	        <img src="images/g.jpg"/>
	   </a>
	   <div class="game-title">
	       nig dog
	   </div>
	   <div class="game-add"> 
	   <button class="btn btn-primary" type="submit">add to cart
	   </button>
	 </div>
	</div>
	
	<div class="col-md-4 game">
       <div class="game-price">$13</div>
	   <a href="product.html" >
	        <img src="images/g.jpg"/>
	   </a>
	   <div class="game-title">
	       nig dog
	   </div>
	   <div class="game-add"> 
	   <button class="btn btn-primary" type="submit">add to cart
	   </button>
	 </div>
	</div>
	
	</div> <!--row-->
	
	
	<div class="row">
	
    <div class="col-md-4 game">
       <div class="game-price">$14</div>
	   <a href="product.html" >
	        <img src="images/4.jpg"/>
	   </a>
	   <div class="game-title">
	       nig dog
	   </div>
	   <div class="game-add"> 
	   <button class="btn btn-primary" type="submit">add to cart
	   </button>
	 </div>
	</div>
	
	
	 <div class="col-md-4 game">
       <div class="game-price">$15</div>
	   <a href="product.html" >
	        <img src="images/3.jpg"/>
	   </a>
	   <div class="game-title">
	       nig dog
	   </div>
	   <div class="game-add"> 
	   <button class="btn btn-primary" type="submit">add to cart
	   </button>
	 </div>
	</div>
	
	 
	
	</div> <!--row-->
	
	
	
	
	
	
	
	</div> <!--class= panel-body --> 
	 </div>
	
   </div><!--end main bar  class="col-md-8" -->
  </div>

  </div><!-- /.container -->
  
  <div class="row footer">
    <div class="container">
	  <p> the place &copy 2017, All Rights Reserved</p>
	</div>
  </div>	

    </body>
</html>
 