<?php
include("lib/LIB_http.php");
include("lib/LIB_parse.php");
$product_array=array();
$product_count=0;
echo "start process";
/*
https://code.tutsplus.com/tutorials/html-parsing-and-screen-scraping-with-the-simple-html-dom-library--net-11856
*/
 
$target = "https://www.bloomberg.com/quote/TEVA:US";
//AEGY,CSTR,DIPSX ,TEVA
$web_page = http_get($target, "");

 
$price = parse_array($web_page['FILE'],"<div", "</div>"); 
 
 
 echo $price[34]."<br>";;
 echo "Price: ". $price[39]."<br>";
 echo "Open: " . $price[45]."<br>";

 
 echo $price[9];
?>