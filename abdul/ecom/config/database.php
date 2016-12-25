

<?php  

include 'config.php'; //$servername $username $password $dbname

  
 
// Create connection
 $con = new mysqli(DB_HOST, DB_USER , DB_PASS , DB_NAME);
 

 if ($con->connect_error) { // Check connection
    echo "<br><pre>".print_r($con, true) . "</pre>";
	die("Connection failed: " . $con->connect_error);
	
 }

 

 

  
 
?> 