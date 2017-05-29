<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
include("lib/LIB_http.php");
include("lib/LIB_parse.php");
 
 
$search_str = "scrap%20+php%20+sorce";
$target = "https://www.google.co.il/search?q=". $search_str ."&ie=utf-8&oe=utf-8";
echo $search_str."<br>----------------------<br>"; 
$web_page = http_get($target, "");

 
$item = parse_array($web_page['FILE'],"<h3", "</h3>"); 
 
//echo "<br><pre>".print_r($item  , true) . "</pre>";
  
 for ($i=0; $i<9; $i++) {
	$href[$i]=return_between($item[$i],"/url?q=", "&", "EXCL");
    $title[$i]=return_between($item[$i],"<a>" , "</a>", "EXCL");
    $title[$i] = str_replace('class="r">', "", $title[$i]);
	  $title[$i] = str_replace('="r">', "", $title[$i]);
  //  echo " " .$href[$i] . "<br> <br> "; 
  } 
 
 
  for ($i=0; $i<9; $i++) {
	 // <a href="https://www.w3schools.com">Visit W3Schools.com!</a> 
   
    echo $i ."]  ".$title[$i] . "<br>  "; 
	echo  " <b>href --->   </b>    " . $href[$i]  . "<br> <br>"; 
  } 
  
 
?>