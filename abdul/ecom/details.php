<?php include 'includes/header.php';   ?>
   
<?php 
  if(isset($_GET['pro_id'])){
	$product_id = $_GET['pro_id'];
	$sql = "SELECT * FROM products
            	WHERE product_id='$product_id'";
	$result = $con->query($sql) or  die($con->error);

	while($row=mysqli_fetch_array($result)){
		$pro_id = $row['product_id'];
		$pro_title = $row['product_title'];
		$pro_price = $row['product_price'];
		$pro_desc  = $row['product_desc'];
	    $image = $row['product_image'];
	    $image2 = $row['image2'];//remote  image
		$cat=$row['product_cat']; 
        $brand=$row['product_brand'] ;

	  if (strlen($image2)>2){
		$image_src=$image2;// if there is remote image use it;
	  }else{
		 $image_src= 'admin_area/product_images/'.$image;
	  }
		echo "<div id='single_product'>
				<h1>$pro_title</h1>";
				
	    echo"<h3>Artist: "; getBrand($brand); echo"   Movment: "; getCat($cat); echo"</h3>";

		echo"	<img src='$image_src'   />
				<p><b> $ $pro_price </b></p>
				<p>$pro_desc </p>
				<a href='index.php' style='float:left;'>Go Back</a>
				  <a href='index.php?add_cart=$pro_id'>
		            <button style='float:right'>
		                  Add to Cart
		           </button>
		         </a>
			</div>";
	    	 
	}//while
 }//if(isset
?>
				 
<?php include 'includes/footer.php';   ?>
	 