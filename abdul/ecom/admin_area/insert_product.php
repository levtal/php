 <!DOCTYPE html>
<?php include 'admin_functions.php';   ?>
<?php  //  /admin_area/insert_product.php

//include '../functions/functions.php';   ?>
  
<html lang="en">
<head>
     <title>Insert</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="styles/style.css" media="all"/>

      <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
	 
    <script src="/js/bootstrap.js"></script>
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>
        tinymce.init({selector:'textarea'});
</script>
</head>

<body style="background:BurlyWood;"	>
  <div id="form">
   <form action="insert_product.php" method="post" enctype="multipart/form-data"> 
	<table align="center" width="795" border="1" bgcolor="#997969">
		<tr align="center">
			<td colspan="7"><h2> New Product</h2></td>
		</tr>
		<tr>
			<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
		</tr>
		<tr>
		    <td align="right"><b>Product Category:</b></td>
			<td>
				<select name="product_cat" required/>
					<option>Select a Category</option>
				    <?php  getCats(); ?>
				</select>
        	</td>
		</tr>
			
		<tr>
			<td align="right"><b>Product Brand:</b></td>
			<td>
				<select name="product_brand" required/>
					<option>Select a Brand</option>
					<?php  getBrands(); ?>
				</select>
		    </td>
		</tr>
			
		<tr>
			<td align="right"><b>Product Image:</b></td>
			<td>
			    <input type="file" name="product_image" />
				 Image URL  
				<input type="text" name="image2" size="40" />
			</td>
		</tr>
			
		<tr>
			<td align="right"><b> Price:</b></td>
			<td><input type="text" name="product_price" required/></td>
		</tr>
			
		<tr>
			<td align="right"><b> Description:</b></td>
			<td>
			 <textarea name="product_desc" cols="20" rows="10">
			 </textarea>
		   </td>
		</tr>
			
		<tr>
			<td align="right"><b> Keywords:</b></td>
			<td><input type="text" name="product_keywords" size="50" required/></td>
		</tr>
			
		<tr align="center">
			<td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
		</tr>
	</table>
   </form>
 </body>
</html>

<?php 

 if(isset($_POST['insert_post'])){
	
	 //getting the text data from the fields
	$product_title = $_POST['product_title'];
	$product_cat= $_POST['product_cat'];
	$product_brand = $_POST['product_brand'];
	$product_price = $_POST['product_price'];
	$product_desc = $_POST['product_desc'];
	$product_keywords = $_POST['product_keywords'];
	
		//getting the image from the field
	$product_image = $_FILES['product_image']['name'];
	$product_image_tmp = $_FILES['product_image']['tmp_name'];
	$image2 =  $_POST['image2'];// url link to remote image 

	move_uploaded_file($product_image_tmp,"product_images/$product_image");
	
	$sql = "INSERT INTO
        	products (product_cat,product_brand,product_title,
	                 product_price,product_desc,product_image,image2,product_keywords) 
		    VALUES   
		    ('$product_cat','$product_brand','$product_title','$product_price',
		                '$product_desc','$product_image','$image2','$product_keywords')";
		//echo "<br>  $sql <br>";
	$result = $con->query($sql);
	if($result){
	   echo "<script>alert('Product Has been inserted!')</script>";
	   echo "<script>window.open('insert_product.php','_self')</script>";
		 
	 }
 }

 