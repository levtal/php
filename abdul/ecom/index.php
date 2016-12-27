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
       <img id="logo" src="images/logo.png">
	   <img id="banner" src="images/ad_banner.png">
	   
    </div>
	
	<div class="menubar"> <!-- upper menu bar   -->
        <ul id="menu">
    	  <li><a href="#">Home</a></li>
          <li><a href="#">All Products</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">Sign up</a></li>
          <li><a href="#">Shopping Cart</a></li>
          <li><a href="#">Contect Us</a></li>
		  <li><a href="admin_area/insert_product.php">admin_area</a></li>
		  
       
	   </ul>
	   <div id="form">
	    <form class="" method="get" action="result.php" enctype="multipart/form-data">
          <input type="text" name="user_query"   placeholder="Search"/>
          <input type="submit" name="search"  value="search"/>          
		</form>
	   </div>
	   
	   
	   
	   
	</div>
	
    <div class="content_wrapper"> 
	 
	<div id="sidebar"><!-- side bar   -->
        <div id="sidebar_title">Categories</div>
		<ul id="cats">
          <?php  getCats();?>
		</ul> 
     
        <div id="sidebar_title">Brands</div>
		<ul id="cats">
            <?php   getBrands() ;?>
		</ul> 
		  
    </div>
	
	<div id="content_area"><!--  content  -->
         

		 this is content area
     </div>
	</div><!--end content_wrapper   -->
	
	<div id="footer"><!--   footer -->
      <p style="text-align:center; pading-top:30px"> The Scjab &copy 2017, All Rights Reserved</p>
    </div>
 </div> <!-- main_wrapper end  -->
 
</body>
</html>
 