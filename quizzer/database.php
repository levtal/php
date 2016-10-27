

<?php  

 include 'sqlcnfg.php'; //$servername $username $password $dbname

   

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
   echo "Connection failed: " .  mysqli_connect_errno() ;
}

  
 
?> 