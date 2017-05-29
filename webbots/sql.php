<?php 

// configuration area of LIB_mysql. You should configure
this area for your specific MySQL installation before you use it.
MySQL Constants (scope = global)
define("MYSQL_ADDRESS", "localhost"); // Define IP address of your MySQL Server
define("MYSQL_USERNAME", ""); // Define your MySQL username
define("MYSQL_PASSWORD", ""); // Define your MySQL password
define("DATABASE", ""); // Define your default database
 
//The insert() Function
$data_array['NAME'] = "Jill Monroe";
$data_array['CITY'] = "Irvine";
$data_array['STATE'] = "CA";
$data_array['ZIP'] = "55410";
insert(DATABASE, $table="people", $data_array);



//The update() Function
//Alternately, you can use update() to update the record you just inserted with
//the next script which changes the ZIP code for the record.
$data_array['NAME'] = "Jill Monroe";
$data_array['CITY'] = "Irvine";
$data_array['STATE'] = "CA";
$data_array['ZIP'] = "92604";
update(DATABASE, $table="people", $data_array, $key_column="ID", $id="3"); 


//The exe_sql() Function
// This function is particularly useful for extracting data with complex
 $array = exe_sql(DATABASE,"select * from people");
 $array = exe_sql(DATABASE, "select * from people where ID='2'");
 
// if exe_sql() is fetching data from the database, return an array of data


// To store an imagein a database, set the typecasting or variable type for the image to
// blob or  large blob and insert the data, as shown next :
$data_array['IMAGE_ID'] = 6;
$data_array['IMAGE'] = base64_encode(file_get_contents($file_path));
insert(DATABASE, $table, $data_array);


//you need to decode the images before using them. :
 // HTML that displays an image stored in a database
<!— Display an image stored in a database where the image ID is 6 -->
<img src="show_image.php?img_id=6">
 
//Code to extract, decode, and present the image.
 
# Get needed database library
include("LIB_mysql.php");
# Convert the variable on the URL to a new variable
$image_id=$_GET['img_id'];
# Get the base64-encoded image from the database
$sql = "select IMAGE from table where IMAGE_ID='".$image_id."'";
list($img) = exe_sql (DATABASE, $sql);
# Decode the image and send it as a file to the requester
header("Content-type: image/jpeg");//header() function sends a raw HTTP header to a client.
echo base64_decode($img);
exit;
 
 page 84


?>