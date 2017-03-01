<!--page 67
<?php
// script that emulates the form submitted and
//Using LIB_http to emulate the form analysis 
include("LIB_http.php");
# Initiate addresses
$action="http://www.WebbotsSpidersScreenScrapers.com/form_analyzer.php";
$ref = "" ;
# Set submission method
$method="POST";
# Set form data and values
$data_array['sessionid'] = "sdfg73453845";
$data_array['email'] = "sales@schrenk.com";
$data_array['message'] = "This is a test message";
$data_array['status'] = "in school";
$data_array['gender'] = "M";
$data_array['vol'] = "on";
$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
 
?> 