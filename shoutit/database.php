

<?php  

 include 'sqlcnfg.php'; //$servername $username $password $dbname

 echo "start";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
   echo "Connection failed: " .  mysqli_connect_errno() ;
}

 echo "end";
 /*
 $query = "SELECT * FROM shouts";
 $shouts = mysqli_query($con,$query);

// sql to create table
$sql = "CREATE TABLE MyGuests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/

//$con->close(); 
?> 