 <?php 
  //http://nimishprabhu.com/top-10-best-usage-examples-php-simple-html-dom-parser.html
 
 // Downloading and storing structured data

//Data can be obtained from mainly three different sources : 
 //         URL, Static File or HTML String.
//Use the following code to create a DOM from three different alternatives.
 
 
include('simple_html_dom.php');
 
//to parse a webpage
$html = file_get_html("http://nimishprabhu.com");
//echo  $html; 
//to parse a file using relative location
$html = file_get_html("ter.htm");
 
//to parse a file using absolute location
$html = file_get_html("C://xampp//htdocs//prj//dom//ter.htm");

//to parse a string as html code
$html = str_get_html("<html><head><title>Cool HTML Parser</title></head><body><h2>PHP Simple HTML DOM Parser</h2><p>PHP Simple HTML DOM Parser is the best HTML DOM parser in any programming language.</p></body></html>");
 echo  $html; 
//to fetch a webpage in a string and then parse
$data = file_get_contents("http://nimishprabhu.com"); //or you can use curl too, like me <img src="http://nimishprabhu.com/wp-content/plugins/lazy-load/images/1x1.trans.gif" data-lazy-src="http://nimishprabhu.com/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;"><noscript><img src="http://nimishprabhu.com/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" /></noscript>
// Some manipulation with the $data variable, for e.g.
$data = str_replace("Nimish", "NIMISH", $data);
//now parsing it into html
$html = str_get_html($data);
 
 echo  $html; 
?>