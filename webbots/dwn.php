 <?php 
//page 32
 # Include http library
include("lib/LIB_http.php"); 
 

 //http://nimishprabhu.com/top-10-best-usage-examples-php-simple-html-dom-parser.html
 
 
include('simple_html_dom.php');
 
$html = file_get_html('http://nimishprabhu.com/');
 
//to fetch all hyperlinks from a webpage
$links = array();
foreach($html->find('a') as $a) {
 $links[] = $a->href;
}
print_r($links);
 
//to fetch all images from a webpage
$images = array();
foreach($html->find('img') as $img) {
 $images[] = $img->src;
}
print_r($images);
 
//to find h1 headers from a webpage
$headlines = array();
foreach($html->find('h1') as $header) {
 $headlines[] = $header->plaintext;
}
print_r($headlines);
 
 
 
 
 
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
//str_get_html( http_get_withheader($target, $ref));
# Request the header
$return_array = http_get_withheader($target, $ref); 
# Display the header
echo "FILE CONTENTS \n";
//var_dump($return_array['FILE']); 
 
 
echo "ERRORS \n";
var_dump($return_array['ERROR']); 
echo "STATUS \n";
//var_dump($return_array['STATUS']);

echo "<br><pre>".print_r($return_array['STATUS'], true) . "</pre>";
 
echo "Errors \n";
//var_dump($return_array['ERROR']); 
echo "<br><pre>".print_r($return_array['ERROR'], true) . "</pre>";
echo "STATUS \n ";
echo "<br><pre>".print_r($return_array['STATUS'], true) . "</pre>";

//var_dump($return_array['STATUS']);
 
?>