<?php 
 
if (!isset($_SESSION["manager"])) {
    header("location: admin_login.php"); 
    exit();
}
include "../storescripts/connect_to_mysql.php";  


$managerID = preg_replace('#[^0-9]#i', '', $_SESSION["id"]); // filter everything but numbers and letters
$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["manager"]); // filter everything but numbers and letters
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["password"]); // filter everything but numbers and letters
 
  
$sql = "SELECT * FROM admins 
       WHERE id='$managerID' 
	   AND username='$manager' 
	   AND password='$password' LIMIT 1"; // query the person
$result= mysqli_query($conn,$sql); // query the person
// ------- MAKE SURE PERSON EXISTS IN DATABASE ---------
$existCount = mysqli_num_rows($result); // count the row nums
if ($existCount == 0) { // evaluate the count
	 echo "Your login session data is not on record in the database.";
     exit();
}
?>
 