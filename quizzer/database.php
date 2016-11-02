

<?php  

 include 'sqlcnfg.php'; //$servername $username $password $dbname

   

// Create connection

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($mysqli->connect_error) {
   printf( "Connection failed: %s \n ", $mysqli->connect_error);
   exit();
}

  
 
?> 