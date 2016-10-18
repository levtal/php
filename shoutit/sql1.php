<!--- 
https://www.youtube.com/watch?v=9ywkQ9aGhVo
http://www.newthinktank.com/2010/04/mysql-statements-in-sql/
http://localhost/ampps/    # Configuration file


http://localhost/phpmyadmin/ # SQL Configuration file

MySQL Username:root


Default root password = "mysql"
 
-->
<?php

 include 'sqlcnfg.php'; //$servername $username $password $dbname

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("<br>*Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE " . $dbname;
if ($conn->query($sql) === TRUE) {
    echo "<br>*Database created successfully";
} else {
    echo "<br>*Error creating database: " . $conn->error;
}

$conn->close();
 
  
 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
}

$conn->close();
?> 