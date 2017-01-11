<!DOCTYPE html>
<?php include 'functions/functions.php';   ?>
 
<html lang="en">
<head>
    <title>E-Commerce</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="styles/style.css" media="all"/>

      <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
	 
    <script src="/js/bootstrap.js"></script>
</head>

<body>
 <div class="main_wrapper">
    <div class="header_wrapper"> <!--  header -->
       <a href="index.php">
	         <img id="logo" src="images/logo.png">
		</a>	 
	   <img id="banner" src="images/ad_banner.png">
	   
    </div>
	
	<div class="menubar"> <!-- upper menu bar   -->
       <?php echo "ip=[".getIp()."]"; ?>
	   <ul id="menu">
    	  <li><a href="index.php">Home</a></li>
          <li><a href="all_products.php">All Products</a></li>
          <li><a href="customer/my_account.php">My Account</a></li>
          <li><a href="#">Sign up</a></li>
          <li><a href="cart.php">Shopping Cart</a></li>
          <li><a href="#">Contect Us</a></li>
		  <li><a href="admin_area/insert_product.php">admin_area</a></li>
        </ul>
	   <div id="form">
	    <form class="" method="get" action="results.php" enctype="multipart/form-data">
          <input type="text" name="user_query"   placeholder="Search"/>
          <input type="submit" name="search"  value="search"/>          
		</form>
	   </div>
	   
	</div>
	
    <div class="content_wrapper"> 
	 
	<div id="sidebar"><!-- side bar   -->
        <div id="sidebar_title">Movements</div>
		<ul id="cats">
          <?php  getCats();?>
		</ul> 
     
        <div id="sidebar_title">Artists</div>
		<ul id="cats">
            <?php   getBrands() ;?>
		</ul> 
		  
    </div>
	<div id="content_area"> <!--  content  -->
        <?php cart(); ?>
       <div id="shopping_cart">
          <span style="font-size:18px;float:right;padding:5px;line-height:40px;">
            <?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
			?> 
			  
			  <b style= "color:yellow">Shopping cart - </b>
              Total items: <?php total_items();//function.php?> 
              Total price: <?php total_price();//function.php?>
              <a href="cart.php" style= "color:yellow">Go to Cart</a>
          </span>
        </div>
	         <div id="products_box"> 