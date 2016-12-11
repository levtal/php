<!--- 
creating Tables:    posts,  categories
Steps:
1. Create the database    in phpadmin, before running this script.
2. Run this script  before anything,  to create the  tables in databas
 
 http://culttt.com/2012/10/01/roll-your-own-pdo-php-class/

-->
<?php
 include 'config/config.php'; //$servername $username $password $dbname
 include 'libraries/Database.php';
echo "Creating Databse tables <br>";  
$database = new Database(); // Class Database defind in Database.php 
 //---------------  users table  --------
//set the query CREATE.
$sql = 'CREATE TABLE IF NOT EXISTS users (
	id INT(11) UNSIGNED   AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100),
	email VARCHAR(100),
	avatar VARCHAR(100),
	username VARCHAR(10),
	password   VARCHAR(64),
	about   TEXT,
	last_activity DATETIME,
	join_date TIMESTAMP   default CURRENT_TIMESTAMP	)';
	 
$database->query($sql);
$result = $database->execute();   //execute the statement CREATE.

$database->query('INSERT INTO users 
    (Name, Email, Avatar, Username, Password, About,  Last_activity ) 
    VALUES 	     
	(:name,:email,:avatar, :username, :password, :about, :last_activity )');
//Bind the data to the placeholders.
$database->bind(':name', 'Brad Tuglom');
$database->bind(':email', 'Brad@Smith');
$database->bind(':avatar', 'fer.jpg');
$database->bind(':username', 'skl.png');
$database->bind(':password', '1234');
$database->bind(':about', ':Web aboutnuy75 :about6hfgh'); 
$database->bind(':last_activity', 'last_activity');
 	
$database->execute();   //execute the statement INSERT.
 
$database->bind(':name', 'sou twp Tuglom');
$database->bind(':email', 'so@Smith');
$database->bind(':avatar', 'so.png');
$database->bind(':username', 'somag');
$database->bind(':password', '1234');
$database->bind(':about', ':fgr  hfrff kghghh 88 hfgh'); 
$database->bind(':last_activity', '0');
 	
$database->execute();   //execute the statement INSERT.
 
 
 
 
 
//---------------  categories  --------
//set the query CREATE.
 $sql = "CREATE TABLE IF NOT EXISTS categories (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT )";
	 
$database->query($sql);
$result = $database->execute();   //execute the statement CREATE.

$database->query('INSERT INTO categories 
    (Name, Description) 
     VALUES 	     
	(:name,:description)');
//Bind the data to the placeholders.
$database->bind(':name', 'Web Programing');
$database->bind(':description', 'me goo  Smith');
$database->execute();   //execute the statement INSERT.
 
$database->bind(':name', 'Web Des');
$database->bind(':description', 'good doog  very good  ith');
$database->execute();   //execute the statement INSERT.
 

//---------------  topics table  --------
//set the query CREATE.
$sql = "CREATE TABLE IF NOT EXISTS topics (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    category_id INT(11),
	user_id INT(11),
    title VARCHAR(100),
    body TEXT,	
	last_activity DATETIME,
	create_date TIMESTAMP   default CURRENT_TIMESTAMP )";
	 
$database->query($sql);
$result = $database->execute();   //execute the statement CREATE.

$database->query('INSERT INTO topics 
    (Category_id, User_id, Title, Body, Last_activity ) 
    VALUES 	     
	(:category_id,:user_id,:title, :body, :last_activity)');
//Bind the data to the placeholders.
$database->bind(':category_id', '1');
$database->bind(':user_id', '1');
$database->bind(':title', 'ferr Server no good');
$database->bind(':body', 'what is your');
$database->bind(':last_activity', 'last_activity');
 	
$database->execute();   //execute the statement INSERT.

 
$database->bind(':category_id', '1');
$database->bind(':user_id', '2');
$database->bind(':title', 'go home rttt good');
$database->bind(':body', 'no me go you gooo what is your');
$database->bind(':last_activity', 'last_activity');
 	
$database->execute();   //execute the statement INSERT.

//---------------  replies table  --------
//set the query CREATE.
  //   id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY
 $sql = "CREATE TABLE IF NOT EXISTS replies (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    topic_id INT(11),
	user_id INT(11),
    title VARCHAR(100),
    body TEXT,	
    create_date TIMESTAMP   default CURRENT_TIMESTAMP )";
$database->query($sql);
$result = $database->execute();   //execute the statement CREATE.

$database->query('INSERT INTO replies 
    (Topic_id, User_id, Title, Body, Create_date ) 
    VALUES 	     
	(:topic_id,:user_id,:title, :body, :create_date)');
//Bind the data to the placeholders.
$database->bind(':topic_id', '1');
$database->bind(':user_id', '2');
$database->bind(':title', 'ferrrrrrr');
$database->bind(':body', 'this is my reply: fsedfdfdfdfdle');
$database->bind(':create_date', '1/2/3');
 	
$database->execute();   //execute the statement INSERT.

 
///Select a single row
$database->query('SELECT  Topic_id, User_id, Title, Body 
                  FROM
				  replies WHERE Topic_id = :topic_id');

$database->bind(':topic_id', '1'); // we bind the data to the placeholder.
$row = $database->single(); 
echo "<pre>";
print_r($row);
echo "</pre>";
echo $database->lastInsertId(); 
echo " <br> End Creating Databse tables <br>";  
?>

         