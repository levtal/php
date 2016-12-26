
<?php
 /* script  to create   tables in the  'ecom'  database
 
 1'sd step:   create dbase 'ecom'  in localhost/phpmyadmin/
 2'nd step:   run this script
------------------------------------------
 
 This script will create the next tables:
 1. products: 
 2. categories:  
 3. brands
 */
 include 'config/config.php'; //$servername $username $password $dbname
 
 echo "<b>Creating 8 tables in ecom dbase</b>  <br>--------------------<br>  ";
// Create connection
$conn = new mysqli(DB_HOST, DB_USER , DB_PASS , DB_NAME);
 

if ($conn->connect_error) { // Check connection
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table products (8 fields)
$sql = "CREATE TABLE products (
	product_id INT(100) UNSIGNED   AUTO_INCREMENT PRIMARY KEY,
	product_cat INT(100),
	product_brand INT(100),
	product_title VARCHAR(255),
	product_price   DECIMAL(10.2),
	product_desc  TEXT,
	product_image TEXT(100),
	product_keywords TEXT(200)
	
	)";
	 
echo "<br>".$sql . "<br><br>";
if ($conn->query($sql) === TRUE) {
    echo "Table products created successfully<br>";
} else {
    echo "Error creating table [products] : " . $conn->error,"<br>";
}

echo "<br>";

 // sql to create table  categories  (2 fields)
$sql = "CREATE TABLE categories (
    cat_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cat_title TEXT
 )";
echo "<br>".$sql . "<br>";
echo "<br>";

if ($conn->query($sql) === TRUE) {
    echo "Table categories created successfully<br>";
} else {
    echo "Error creating table categories: " . $conn->error."<br>";
	
}

echo "<br>";

 // sql to create table  brands  (2 fields)
$sql = "CREATE TABLE brands (
    brand_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    brand_title TEXT
 )";
echo "<br>".$sql . "<br>";
echo "<br>";

if ($conn->query($sql) === TRUE) {
    echo "Table brands created successfully<br>";
} else {
    echo "Error creating table brands: " . $conn->error."<br>";
	
}

/*
// sql to create table orders (11 fields)
$sql = "CREATE TABLE orders (
	id INT(11) UNSIGNED   AUTO_INCREMENT PRIMARY KEY,
	product_id INT(11),
    user_id INT(11),
	transaction_id VARCHAR(255),
	qty INT(11),
	price   DECIMAL(10.2),
	address VARCHAR(255),
	address2 VARCHAR(255),
	city VARCHAR(100),
	state VARCHAR(100),
	zipcode  VARCHAR(30)
	)";
	 
echo"<br>". $sql . "<br>";
echo "<br>";
if ($conn->query($sql) === TRUE) {
    echo "Table [orders] created successfully";
} else {
    echo "Error creating table [orders] : " . $conn->error;
}



// sql to create table users (11 fields)
$sql = "CREATE TABLE users (
	id INT(11) UNSIGNED   AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(100),
    last_name VARCHAR(100),
	email VARCHAR(100),
	username VARCHAR(100),
	password  VARCHAR(100),
	join_date TIMESTAMP   default CURRENT_TIMESTAMP
	)";
	 

echo "<br>". $sql . "<br>";
echo "<br>";

if ($conn->query($sql) === TRUE) {
    echo "Table [users] created successfully";
} else {
    echo "Error creating table [users] : " . $conn->error;
}
 
echo "<br>";

////////////////////      Insert to DB ecom
//https://en.wikipedia.org/wiki/List_of_art_movements

*/
//  insert data to  table 'categories'
$sql = "INSERT INTO categories(cat_title)
        VALUES 
		       ('Cubism'),
			   ('Dada'),
			   ('De Stijl'),
			   
			   ('Expressionism')";

echo "<br>".$sql . "<br>";
echo "<br>";
			   
if ($conn->query($sql) === TRUE) {
    echo  "<br> Categories inserted into question table successfully<br>";
} else {
    echo "<br> Error in insert into categories table: " . $conn->error. "<br>";
}
echo "<br>";


//  insert data to  table 'brand'
$sql = "INSERT INTO brands(brand_title)
        VALUES 
		       ('Georges Braque'),
			   ('Pablo Picasso'),
			   ('Andre Lhote'),
			   ('Egon Schiele'),
			   ('Oskar Kokoschka'),
			   ('Josef Gassler')";

echo "<br>".$sql . "<br>";
echo "<br>";
			   
if ($conn->query($sql) === TRUE) {
    echo  "<br> brands inserted into question table successfully<br>";
} else {
    echo "<br> Error in insert into brands table: " . $conn->error. "<br>";
}
echo "<br>";


/*
//insert user
$sql = "INSERT INTO users 
        (first_name,last_name,email,username,password) 
        VALUES ( 'ro' ,'R','a@ur','mm','1234' ),
		       ( 'romeo' ,'fbml','fbmm@ur','nn','1234' )
				 ";
echo "<br>"	;	
echo "<br>". $sql . "<br>";
if ($conn->query($sql) === TRUE) {
    echo  "<br> Users inserted into users table successfully";
} else {
    echo "<br> Error in insert into users table: " . $conn->error;
}

//  products

$sql = "INSERT INTO products 
               ( category,title,description,image,price )
        VALUES ( '1' ,'destiny','aur','game1.jpg','59.99' ),
		       ( '1' ,'dcl','aur','game4.jpg','49.99' ),
			   ( '5' ,'use','norway ','game3.jpg','159.99' ),
			   ( '2' ,'fvrv','fddvf','game8.jpg','59.99' ),
			   ( '3' ,'shadow','fbtrgh  ghghg ','game3.jpg','159.99' ),
		       ( '1' ,'dcl','ser  tyffd  bbh','game4.jpg','49.99' )
				 ";
echo "<br>"	;	
echo "<br>". $sql. "<br>";
if ($conn->query($sql) === TRUE) {
    echo  "<br> Products inserted into products table successfully";
} else {
    echo "<br> Error in insert into products table: " . $conn->error;
}

*/
$conn->close();
?> 


