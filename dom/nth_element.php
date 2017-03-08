<?php
 //Finding nth element from parsed data

//Note that the numbering of elements starts from 0 and not 1. Thus the first element //Let’s assume that you want to extract the hyperlink of the 3rd link with class  
 

include('simple_html_dom.php');
$url = 'https://www.phpbb.com/community/viewtopic.php?f=46&t=543171';
$html = file_get_html($url);
echo $html->find('a.postlink',2)->href;



//Manipulating the inner content of tags

//clear the inner contents of the div with id as content:
 $html->find('div#content',0)->innertext = '';

//Append text to existing content, you can do so as follows :
 
$appendcode = '<p>This is the text to append to existing innertext</p>';
$html->find('div#content',0)->innertext .= $appendcode;
 

$html->clear();
unset($html);
?>