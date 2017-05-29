
 <?php 
#Using return_between() to find the title of a web page
 
include("lib/LIB_parse.php");
include("lib/LIB_http.php");

/* Page 40 -48
parsed tags from a web page,and  parse attribute values from those tags. 
For example, if you’re writing a spider
that harvests links from web pages, you will need to parse all the link tags, but
you will also need to parse the specific href attribute of the link tag.  
 
The get_attribute() function provides an interface that allows webbot
developers to parse specific attribute values from HTML tags.
*/

$tag = "img";
$attribute="src";
//$target="http://www.walla.com";
$target="http://www.nasa.gov/mission_pages/viking/index.html";
$web_page = http_get($target, $referer="");
//////////
 
// Remove all JavaScript
$noformat = remove($web_page['FILE'], "<script", "</script>");
// Strip out all HTML formatting
$noformat = strip_tags($noformat);
// Remove unwanted white space
$noformat = str_replace("\t", "", $noformat); // Remove tabs
$noformat = str_replace("&nbsp;", "", $noformat); // Remove non-breaking spaces
//$noformat = str_replace("\n", "", $noformat); // Remove line feeds
echo $noformat;


/////////
$meta_tag_array = parse_array($web_page['FILE'],"<". $tag, ">");
echo "Tag name = < ".$tag. " ><br>----------------------------------<br><br>";
for($i=0; $i<count($meta_tag_array); $i++){
	$name = get_attribute($meta_tag_array[$i], $attribute);
	//$del_tag = array("<",$tag, ">");
    //$meta_tag_array[$i] = str_replace($del_tag, "", $meta_tag_array[$i]);
    $idx= $i+1;   
    //<xmp>
	echo "[" . $idx ."]<xmp>". $meta_tag_array[$i] ."</xmp><br>";
	echo "<b> src  = ".$name ."</b><br>";
 }
 
 //$uncommented_page = remove($web_page, "<!--", "-->");
 
 
 
 
?>