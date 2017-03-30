 <?php 

include("simple_html_dom.php");
$in = "PHP Simple HTML DOM";

$in = str_replace(' ','+',$in); // space is a +
$url  = 'http://www.bitrepository.com/php-simple-html-dom-parser.html';

//Script extracts links & images from a website:
// Create DOM from URL or file
/*$html = file_get_html($url);
// Extract links
foreach($html->find('a') as $element)
    echo $element->href . '<br>'; 
// Extract images

echo "<br><br><b>".'img list'. '</b><br><br>'; 
foreach($html->find('img') as $element)
   echo $element->src . '<br>';

echo "<b>".'End of img list'. '</b><br><br>'; 
*/

//retrieve content without any tags?
//echo file_get_html($url)->plaintext;

// extracts the first 10 results (titles only) for the keyword “php” from Google:
$url = 'http://www.google.com/search?hl=en&q=php&btnG=Search';
// Create DOM from URL
$html = file_get_html($url);
 //<div class="sd" id="resultStats">About 9,990,000,000 results</div>
// Match all 'A' tags that have the class attribute equal with 'l'
foreach($html->find('div[class=sd]') as $key => $info) 
{
echo ($key + 1).'. '.$info->plaintext."<br />\n";
}


//The parser can also be used to modify HTML elements:
$html = str_get_html('<div id="simple">Simple</div><div id="parser">Parser</div>');
$html->find('div', 1)->class = 'bar';// change '<div id="parser">' to '<div id="parser" class="bar">'
$html->find('div[id=simple]', 0)->innertext = 'Foo';
// Output: <div id="simple">Foo</div><div id="parser" class="bar">Parser</div>
echo $html;







?>