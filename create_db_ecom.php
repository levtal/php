
<?php
 /* script  to create  4 tables in the  'ecom'  database
 
 1. products:   id,category,title,description,image,price 
 
 
 2. categories: id,name

 
 3. orders:  id,product_id,user_id,transaction_id,qty,price,address,address2,city,state,zipcode 
 
 
 4. users: id,first_name,last_name,email,username,password,join_date 
	 

	 
	 */
 define('DB_HOST', '127.0.0.1');
 define('DB_USER', 'root');
 define('DB_PASS', '');## unbunto:"mysqlmysql",vista:"", kali :"" 
 define('DB_NAME', 'ecom');

  /*
        // Remote host data  quizz  u710518084_quizz
     define('DB_HOST' , 'mysql.hostinger.co.il');
     define('DB_USER' , 'u643891464_moggg'); 
     define('DB_PASS' , 'paseri');
     define('DB_NAME' ,'u643891464_quizz'); 
  
  */

 echo "<b>Creating 4 tables</b>  <br>--------------------<br>  ";
// Create connection
$conn = new mysqli(DB_HOST, DB_USER , DB_PASS , DB_NAME);
 

if ($conn->connect_error) { // Check connection
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table products (6 fields)
$sql = "CREATE TABLE products (
	id INT(11) UNSIGNED   AUTO_INCREMENT PRIMARY KEY,
	category INT(11),
	title VARCHAR(255),
	description TEXT,
	image VARCHAR(100),
	price   DECIMAL(10.2)	
	)";
	 

if ($conn->query($sql) === TRUE) {
    echo "Table [products] created successfully<br>";
} else {
    echo "Error creating table [products] : " . $conn->error;
}
echo $sql . "<br>";
echo "<br>";

 // sql to create table  categories
$sql = "CREATE TABLE categories (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) 
 )";
echo $sql . "<br>";
echo "<br>";

if ($conn->query($sql) === TRUE) {
    echo "Table categories created successfully";
} else {
    echo "Error creating table categories: " . $conn->error;
	
}


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
	 
echo $sql . "<br>";
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
	 

echo $sql . "<br>";
echo "<br>";

if ($conn->query($sql) === TRUE) {
    echo "Table [users] created successfully";
} else {
    echo "Error creating table [users] : " . $conn->error;
}
 
echo "<br>";

////////////////////      Insert to DB ecom
//  insert data to  table 'categories'

$sql = "INSERT INTO categories(name)
        VALUES ('Xbox One'),
		       ('Ps4'),
			   ('Nintando'),
			   ('Xbox 360'),
			   ('es3')";

echo $sql . "<br>";
echo "<br>";
			   
if ($conn->query($sql) === TRUE) {
    echo  "<br> Categories inserted into question table successfully";
} else {
    echo "<br> Error in insert into <categories> table: " . $conn->error;
}
echo "<br>";
//insert user
$sql = "INSERT INTO users 
        (first_name,last_name,email,username,password) 
        VALUES ( 'ro' ,'R','a@ur','mm','1234' ),
		       ( 'romeo' ,'fbml','fbmm@ur','nn','1234' )
				 ";
echo "<br>"	;	
echo $sql;
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
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo  "<br> Products inserted into products table successfully";
} else {
    echo "<br> Error in insert into products table: " . $conn->error;
}


$conn->close();
?> 


