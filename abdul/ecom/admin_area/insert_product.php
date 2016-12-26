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
    
</head>

<body style="background:BurlyWood;"	>
  <div id="form">
	<form action="insert_product.php" method="post" enctype="multipart/form-data"> 
	  <table align="center" width="795" border="2" bgcolor="#997969"">
		<tr align="center">
			<td colspan="7"><h2>Insert New Post Here</h2></td>
		</tr>
		<tr>
			<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
		</tr>
		<tr>
		    <td align="right"><b>Product Category:</b></td>
			<td>
				<select name="product_cat" >
					<option>Select a Category</option>
				     <?php  getCats(); ?>
				</select>
        	</td>
		</tr>
			
		<tr>
			<td align="right"><b>Product Brand:</b></td>
			 <td>
				<select name="product_brand" >
					<option>Select a Brand</option>
					<?php  getBrands(); ?>
				</select>
		    </td>
		</tr>
			
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image" /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Keywords:</b></td>
				<td><input type="text" name="product_keywords" size="50" required/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
			</tr>
		
	 </table>
	
	
</form>
 
</body>
</html>
 