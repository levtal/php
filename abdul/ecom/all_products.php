<?php include 'includes/header.php';   ?>
<?php 
 $sql = "SELECT * FROM products"; 
   $result = $con->query($sql) or  die($con->error);
   while($row=mysqli_fetch_array($result)){
	  $id = $row['product_id'];
	  $pro_cat = $row['product_cat'];
	  $pro_brand = $row['product_brand'];
	  $pro_title = $row['product_title'];
	  $price = $row['product_price'];
	  $image = $row['product_image'];
	  $image2 = $row['image2'];
	
	  if (strlen($image2)>2){
		  $image_src=$image2;// if there is remote image use it;
	  }else{
		 $image_src= 'admin_area/product_images/'.$image;
	  }
	 echo "
	  <div id='single_product'>
        <h3>$pro_title</h3>
	    <img src='$image_src' width='180' height='180'/>
	    <p><b> Price: $ $price </b></p>
	    <a href='details.php?pro_id=$id' style='float:left;'> 
		  Details:
	    </a>
	    <a href='index.php?add_cart=$id'>
		  <button style='float:right'>
		       Add to Cart
		  </button>
		</a>
	  </div>";
	}//while



?> 
<?php include 'includes/footer.php';   ?>
  