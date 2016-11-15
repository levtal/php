<!--- 
creating Tables:    posts,  categories
Create the database    in phpadmin, before running this script
Run this script  before anything,  to create the  tables


 
-->
<?php
 
 include 'config\config.php'; //$servername $username $password $dbname

 
// Create connection
$conn = new mysqli(DB_HOST, DB_USER , DB_PASS , DB_NAME);
// The above DB constants are in the 'config\config.php' file
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table posts (7 fields)
$sql = "CREATE TABLE posts (
	id INT(11) UNSIGNED   AUTO_INCREMENT PRIMARY KEY,
	category INT(11),
	title VARCHAR(255),
	body TEXT,
	author VARCHAR(255),
	tags   VARCHAR(255),
	date TIMESTAMP   default CURRENT_TIMESTAMP
	)";
	 

if ($conn->query($sql) === TRUE) {
    echo "Table posts created successfully";
} else {
    echo "Error creating table posts : " . $conn->error;
}
echo "<br>";

 // sql to create table  categories
$sql = "CREATE TABLE categories (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) 
 )";
echo $sql . "<br>";
if ($conn->query($sql) === TRUE) {
    echo "Table categories created successfully";
} else {
    echo "Error creating table categories: " . $conn->error;
	
}

//  insert data to  table 'categories'

$sql = "INSERT INTO categories(id, name)
        VALUES (1, 'News'),
		       (NULL, 'Events'),
			   (NULL,'Tutorials'),
			   (NULL,'Misc')";

if ($conn->query($sql) === TRUE) {
    echo  "<br> Categories inserted into question table successfully";
} else {
    echo "<br> Error in insert into <categories> table: " . $conn->error;
}


//  posts

$sql = "INSERT INTO posts (  category,title,body,author,tags )
        VALUES ( '1','tt1','body' ,'author','tags' ),
		       ( '2','tt4441','b555dy' ,'auth4or','tag6s' )
				 ";

if ($conn->query($sql) === TRUE) {
    echo  "<br> Posts inserted into posts table successfully";
} else {
    echo "<br> Error in insert into posts table: " . $conn->error;
}
echo "<br>"	;	
echo $sql;
$conn->close();
?> 


