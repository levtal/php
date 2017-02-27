<?php  
/*
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "store";
   

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
   echo "Connection failed: " .  mysqli_connect_errno() ;
} */                       
?>

<?php  
// This file is www.developphp.com curriculum material
// Written by Adam Khoury January 01, 2011
// http://www.youtube.com/view_play_list?p=442E340A42191003



/*  
$db_host = "mysql.hostinger.co.il";
$db_username =  'u643891464_vaz';  
$db_pass = "paseri";  
$db_name = 'u643891464_store'; 






1: "die()" will exit the script and show an error statement if something goes wrong with the "connect" or "select" functions. 
2: A "mysql_connect()" error usually means your username/password are wrong  
3: A "mysql_select_db()" error usually means the database does not exist. 
*/ 
 
$db_host = "localhost"; 
$db_username = "root";  
$db_pass = "";  // ## unbunto::"mysqlmysql" , vista::"", kali ::"" 
$db_name = "store"; 
 
// Run the actual connection here  
$conn= mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");

 
mysqli_select_db($conn,"$db_name") or die ("no database");              
?>