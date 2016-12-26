<?php

include ('../config/database.php'); //create $mysqli connection


//Get the categories
function getCats() {
	global $con;// connection defind in  'config/database.php'
	$sql = "SELECT * FROM categories" ;
    $result = $con->query($sql)  
                or  die($con->error );
   

	while($row=mysqli_fetch_array($result)){
		 //echo "<br><pre>".print_r($row, true) . "</pre>";
		
		
		$cat_id = $row['cat_id'];
		$cat_title = $row['cat_title'];
        $out="<option value='$cat_id'>$cat_title</option>";
		 
		echo $out;
		 
	}
    
}
 
 
 
 

function getBrands() {
	global $con;// connection defind in  'config/database.php'
	
	$sql = "SELECT * FROM brands" ;
             
    $result = $con->query($sql)  
                or  die($con->error);
    $total =  $result->num_rows;

	while($row=mysqli_fetch_array($result)){
		$brand_id = $row['brand_id'];
		$brand_title = $row['brand_title'];
		
        $out= "<option value='$brand_id'>$brand_title</option>";
		echo $out;
	}
} 
	
	
    

?>  