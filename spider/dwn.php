 <?php 
//page 32
 # Include http library
include("lib/LIB_http.php"); 

/*
# Usage: http_get_withheader()
	array http_get_withheader (string target_url, string referring_url)
 
	target_url = fully formed URL of the desired file.
	referring_url = fully formed URL of the referer.
Outputs 
$array['FILE'] = contents of the requested file, including the
HTTP header.
$array['STATUS'] = status information about the file transfer.
$array['ERROR'] = textual description of any errors.
*/

# Define the target and referer web pages
$target = "http://www.schrenk.com/publications.php";
$ref    = "http://www.schrenk.com";
# Request the header
$return_array = http_get_withheader($target, $ref); 
# Display the header
echo "FILE CONTENTS \n";
//var_dump($return_array['FILE']); 
 
<<<<<<< HEAD
echo "ERRORS \n";
var_dump($return_array['ERROR']); 
echo "STATUS \n";
//var_dump($return_array['STATUS']);

echo "<br><pre>".print_r($return_array['STATUS'], true) . "</pre>";
=======
echo "Errors \n";
//var_dump($return_array['ERROR']); 
echo "<br><pre>".print_r($return_array['ERROR'], true) . "</pre>";
echo "STATUS \n ";
echo "<br><pre>".print_r($return_array['STATUS'], true) . "</pre>";

//var_dump($return_array['STATUS']);
>>>>>>> 84609181a603b786b1b3c18714ea6a071b11d677
?>