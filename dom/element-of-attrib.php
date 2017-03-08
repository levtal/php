  <?php
 /*
 Filtering elements based on values of its attributes

When a developer designs a page, he uses various attributes to uniquely identify and classify the information on the webpage.
 A parser is not human and hence cannot visualize the difference, but it can detect these attributes and filter the output so as to obtain a precise set of data.
 Let us take a practical example for better understanding. 
 If you see this page : 
 https://www.phpbb.com/community/viewtopic.php?f=46&t=543171 
 you can see the page is divided into header, content and footer. 
 Now even the content is further sub divided into posts. 
 You want  to extract only the hyperlinks in the post and not the entire page. The approach should be as follows :

Check the source of the webpage.
 Find out whether the hyperlinks are following some kind of pattern. If you look closely you will find that all of them have class=”postlink”. This will make extracting them, a piece of cake. 
  
 */
//http://nimishprabhu.com/top-10-best-usage-examples-php-simple-html-dom-parser.html
 
include('simple_html_dom.php');
 
$url = 'https://www.phpbb.com/community/viewtopic.php?f=46&t=543171';
 
$html = file_get_html($url);
$links = array();
//<a href="http://www.phpbb.com/community/docs/INSTALL.html#convert" class="postlink">here</a></li></ul>
foreach($html->find('a[class="postlink"]') as $a) {
 $links[] = $a->href;
 //echo $a->href. "<br>";
}
 
//print_r($links);
 echo "a[class= postlink ]<br>---------------  <br>";
echo "<br><pre>".print_r($links, true) . "</pre>";

//You can use “.” and “#” prefixes to 
//filter class and  id attributes respectively.
// So the above code will work without  
//any change if you use the filter as :
//
//foreach($html->find('a.postlink') as $a)




$url = 'https://www.phpbb.com/community/viewtopic.php?f=46&t=543171';
 
$html = file_get_html($url);
$links = array();
foreach($html->find('a[href^="http://www.phpbb.com/community/viewforum.php"]') as $a) {
 $links[] = $a->href;
}

 echo "'a[href^ <br>---------------  <br>";
echo "<br><pre>".print_r($links, true) . "</pre>"; 

/*
If you are sure about only the end part of the value of an attribute. Let’s say, for e.g., you are scrapping a webpage which contains numerous div elements. These div elements have the id attribute something like :
<div id=”1_message_id”>content here</div>
<div id=”2_message_id”>content here</div>
and so on.
Then you can find such div elements using the “ends with” filter as follows :
1
	
foreach($html->find('div[id$="_message_id"]' as $div)
*/

$html->clear();
unset($html);
?>