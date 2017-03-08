<?php
 
include("lib/LIB_http.php");
include("lib/LIB_parse.php");
$product_array=array();
$product_count=0;
echo "start process";
 //https://code.tutsplus.com/tutorials/html-parsing-and-screen-scraping-with-the-simple-html-dom-library--net-11856
$target = "https://finance.yahoo.com/quote/CSTR?ltr=1";
//AEGY,CSTR,DIPSX ,TEVA
$web_page = http_get($target, "");
parse_array($web_page['FILE'], "<table", "</table>");
 

 

/*offline processing 
$web_page = file_get_contents("finance.html");
$sub_title = parse_array($web_page, '<span data-reactid="231">', "</span>");

$price = parse_array($web_page,"<span", "</span>"); 
$share_name = parse_array($web_page, "<h1", "</h1>");
$name_array = parse_array($web_page,'<a href=','>'); 
*/
 
$sub_title = parse_array($web_page['FILE'], "<span>", "</span>");
$price = parse_array($web_page['FILE'],"<span", "</span>"); 
$share_name = parse_array($web_page['FILE'], "<h1", "</h1>");
$name_array = parse_array($web_page['FILE'],'<a href=','>'); 
for($i=0; $i<count($name_array); $i++) {
	echo "<br>". get_attribute($name_array[$i], $attribute="href");
	 
  }

 echo "<br><pre>".print_r($price, true) . "</pre>";
 //echo "<br><pre>".print_r($share_name, true) . "</pre>";
 //echo "<br><pre>".print_r($name_array, true) . "</pre>";
 //echo "<br><pre>".print_r($sub_title, true) . "</pre>";
 
 echo $share_name[1];
 echo "Price: ". $price[11]."<br>";
 echo $price[12]."<br>";
 echo $price[9];

 