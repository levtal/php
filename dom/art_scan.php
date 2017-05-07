 <?php  
include('simple_html_dom.php');
 
// Retrieve the DOM from a given URL
//$html = file_get_html('https://finance.yahoo.com/quote/CSTR?ltr=1');
// Load a file
$html = file_get_html('./art.htm');
print ($html);
// Find all "A" tags and print their HREFs
echo "Find all  A  tags and print their HREFs<br>----------------<br>";
foreach($html->find('a') as $e) 
    echo $e->href . '<br>';

// Retrieve all images and print their SRCs
echo " Retrieve all images and print their SRCs<br>----------------<br>";
foreach($html->find('img') as $e)
    echo $e->src . '<br>';

// Find all images, print their text with the "<>" included
echo " Find all images, print their text with the  <>  included<br>----------------<br>";
foreach($html->find('img') as $e)
    echo $e->outertext . '<br>';

// Find the DIV tag with an id of "myId"
echo "Find the DIV tag with an id of    myId <br>----------------<br>";
foreach($html->find('div#myId') as $e)
    echo $e->innertext . '<br>';

// Find all SPAN tags that have a class of "myClass"
echo "Find all SPAN tags that have a class of myClass <br>----------------<br>";
foreach($html->find('span.myClass') as $e)
    echo $e->outertext . '<br>';
echo "Find any SPAN tags  <br>-------data-reactid-++++++++++++fffff--------<br>";
foreach($html->find('span.Trsdu') as $e)
    echo $e->outertext . '<br>';
// Find all TD tags with "align=center"
echo  "Find all TD tags with  align=center<br>----------------<br>";
foreach($html->find('td[align=center]') as $e)
    echo $e->innertext . '<br>';
    
// Extract all text from a given cell
echo  "Extract all text from a given cell<br>----------------<br>";
echo $html->find('span', 1)->plaintext.'<br><hr>';

 
?>