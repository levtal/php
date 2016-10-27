<!--- 
Creating two tables:  questions choices.
Creating database is done  in phpadmin, before running this script

https://www.youtube.com/watch?v=49vWRjNGCdE&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3&index=9
http://localhost/ampps/    # Configuration file
 
 
 
-->
<?php

 include 'sqlcnfg.php'; //$servername $username $password $dbname

 
  
  

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table questions
$sql = "CREATE TABLE questions (
	question_number INT(11) UNSIGNED   PRIMARY KEY,
	text TEXT)";
	 

if ($conn->query($sql) === TRUE) {
    echo "Table questions created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
echo "<br>";

 // sql to create table choices
$sql = "CREATE TABLE choices (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    question_number INT(11) UNSIGNED,
    is_correct TINYINT(1)  default 0, 
    text TEXT 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table choices created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?> 