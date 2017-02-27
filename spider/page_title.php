
 <?php 
#Using return_between() to find the title of a web page
 
include("lib/LIB_parse.php");
include("lib/LIB_http.php");
# Download a web page
$web_page = http_get($target="http://www.bbc.com/", $referer="");

/*
string return_between (string unparsed, string start, string end, INCL/EXCL)
Where
unparsed is the string to parse
start identifies the starting delimiter
end identifies the ending delimiter
INCL indicates that you want to include the delimiters in the parsed text
EXCL indicates that you don't want to include delimiters in the parsed
text
*/



# Parse the title of the web page, inclusive of the title tags
$title_incl = return_between($web_page['FILE'], "<title>", "</title>", INCL);
# Parse the title of the web page, exclusive of the title tags
$title_excl = return_between($web_page['FILE'], "<title>", "</title>", EXCL);
# Display the parsed text
echo "title_incl = ".$title_incl;
echo "<br>";
echo "title_excl = ".$title_excl;
echo "<br>";
echo "<br><br> STATUS array  of [". $target. "]";
echo "<br><pre>".print_r($web_page['STATUS'], true) . "</pre>";
?>