<?php

include ('config/database.php'); //create $mysqli connection


//Get the categories
function getCats() {
	global $con;// connection defind in  'config/database.php'
	$sql = "SELECT * FROM categories" ;
    $result = $con->query($sql)  
                or  die($con->error._LINE_);
    $total =  $result->num_rows;

	while($row=mysqli_fetch_array($result)){
		$cat_id = $row['cat_id'];
		$cat_title = $row['cat_title'];
        $out= "<li class=' '><a href=";
		$out=$out."'#'"." >$cat_title</a></li>";
		echo $out;
	}
}
 

function getBrands() {
	global $con;// connection defind in  'config/database.php'
	
	$sql = "SELECT * FROM brands" ;
             
    $result = $con->query($sql)  
                or  die($con->error._LINE_);
    $total =  $result->num_rows;
	//echo "<br><pre>".print_r($result, true) . "</pre>";
    //echo "<br> reply_count = " .$total;
	
    
	while($row=mysqli_fetch_array($result)){
		$brand_id = $row['brand_id'];
		$brand_title = $row['brand_title'];
		//echo "<br><pre>".print_r($row, true) . "</pre>";
        $out= "<li class=' '><a href=";
		$out=$out."'#'"." >$brand_title</a></li>";
		echo $out;
	}
} 
	
	
    

?>  