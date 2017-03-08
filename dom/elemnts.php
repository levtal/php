 <?php
/*
Finding HTML elements based on their tag names

Suppose you wanted to find each and every image on a webpage or say,
 each and every hyperlink.
 We will be using “find” function to extract this information from the object.
 
*/ 
include('simple_html_dom.php');
 
$html = file_get_html('http://walla.com/');
 
//to fetch all hyperlinks from a webpage
$links = array();
foreach($html->find('a') as $a) {
 $links[] = $a->href;
}
echo  "links<br>-----------<br>";
echo "<br><pre>".print_r($links, true) . "</pre>";
 
//to fetch all images from a webpage
$images = array();
foreach($html->find('img') as $img) {
 $images[] = $img->src;
}
 
echo  "images<br>-----------<br>";
echo "<br><pre>".print_r($images, true) . "</pre>"; 
//to find h1 headers from a webpage
$headlines = array();
foreach($html->find('h3') as $header) {
 $headlines[] = $header->plaintext;
}

echo  "headlines<br>-----------<br>";
echo "<br><pre>".print_r($headlines, true) . "</pre>"
 
?>