<?php 
 # Initialization
include("lib/LIB_http.php");
include("lib/LIB_parse.php");
$product_array=array();
$product_count=0;
# Download the target (practice store) web page
//$target = "http://www.livechennai.com/Vegetable_price_chennai.asp";
 $target = "http://www.webbotsspidersscreenscrapers.com/buyair/";
$web_page = http_get($target, "");
echo "web_page<br>"; 
var_dump($web_page['FILE']);
echo "end<br>";

# Parse all the tables on the web page into an array
# parse_array()    Returns an array containing all occurrences of    
#                     text that falls between a set of delineators.   
$table_array = parse_array($web_page['FILE'], "<table", "</table>");

echo "<br><pre>".print_r($table_array, true) . "</pre>";
?>