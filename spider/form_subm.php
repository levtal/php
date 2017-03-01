<!--page 67

A GET method performed by a form submission
 the web page http://www.schrenk.com/search with the GET protocol.2-->
<form name="frm1" action="http://www.schrenk.com/search.php">
<input type="text" name="term" value="hello">
<input type="text" name="sort" value="up">
<input type="submit">
</form>
 
 // LIB_http to emulate the form 
<?php  include("LIB_http.php");
$action = "http://www.schrenk.com/search.php"; // Address of form handler
$method="GET"; // GET method
$ref = ""; // Referer variable
$data_array['term'] = "hello"; // Define term
$data_array['sort'] = "up"; // Define sort
$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);


//Conversely, since the GET method places form information in the URL’s
// string, you could also emulate the form with a script like this:
include("LIB_http.php");
$action = "http://www.schrenk.com/search.php?term=hello&sort=up";
$method=”"GET";
$ref = "" ;
$response = http($target=$action, $ref, $method, $data_array="", EXCL_HEAD);


//The POST Method
//The POST method sends data in a separate file.
// To submit a form using the POST method with LIB_http, simply specify the
// POST protocol, as shownnext:
include("LIB_http.php");
$action = "http://www.schrenk.com/search.php"; // Address of form handler
$method="POST "; // POST method
$ref = ""; // Referer variable
$data_array['term'] = "hello"; // Define term
$data_array['sort'] = "up"; // Define sort
$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
 
 
 //Multipart Encoding page 69
?>