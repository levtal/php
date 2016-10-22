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
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$tablename = "buyetrs";
// sql to create table
$sql = "CREATE TABLE " . $tablename .
"(
    first_name VARCHAR(15) NOT NULL,
    last_name VARCHAR(15) NOT NULL,
    state CHAR(2) NOT NULL DEFAULT 'PA',
    birth_date DATE NOT NULL,
    sex ENUM('M','F') NOT NULL,
    cust_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    last_meeting TIMESTAMP,
    money_owed FLOAT NULL

)";

if ($conn->query($sql) === TRUE) {
    echo "Table " . $tablename . " created successfully";
} else {
    echo "Error creating table: ". $tablename . " ". $conn->error;
}


$sql="INSERT INTO " .$tablename . " VALUES ('Paul', 'Jones', 'PA', '1972-10-2', 'M', NULL, '2010109121054', 54.96)";
 
echo "<br>" . $sql;

if ($conn->query($sql) === TRUE) {
    echo "<br>insert " . $tablename . " created successfully";
} else {
    echo "Error inserting to table: ". $tablename . " ". $conn->error;
}
$conn->close();
 
  
 
 
?> 