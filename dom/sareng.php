 <?php 
  
 

include("simple_html_dom.php");

$in = "PHP Simple HTML DOM";
$in = str_replace(' ','+',$in); // space is a +
$url  = 'http://www.google.com/search?hl=en&tbo=d&site=&source=hp&q='.$in.'&oq='.$in.'';

print $url."<br>";

$html = file_get_html($url);

// <div id="resultStats">About 7,140,000,000 results<nobr> (0.57 seconds)&nbsp;</nobr></div>
foreach( $html->find('div[id=resultStats]') as $key => $info) {
			echo ($key + 1).'. '.$info->plaintext."<br />\n";
			
 } 
 
 $i=0;
//$linkObjs = $html->find('h3.r a'); 
$linkObjs = $html->find('h3[class=r] a');
$hs = $html->find('h2.hd ');//<h2 class="hd">Search Results</h2>
echo $hs[0];
//echo $linkObjs[4];
//var_dump( $linkObjs);
 
//exit; 
foreach ($linkObjs as $linkObj) {
    $title = trim($linkObj->plaintext);
    $link  = trim($linkObj->href);

    // if it is not a direct link but url reference found inside it, then extract
    if (!preg_match('/^https?/', $link) && preg_match('/q=(.+)&amp;sa=/U', $link, $matches) &&  
                preg_match('/^https?/', $matches[1])) {
         $link = $matches[1];
    } else if (!preg_match('/^https?/', $link)) { // skip if it is not a valid link
        continue;
    }

	 // int preg_match  
     // pattern - pattern to search for, as a string.
     // subject - input string.
     // matches - results of search
	
	
	
	
	
    $descr = $html->find('span.st',$i); // description is not a child element of H3 thereforce we use a counter and recheck.
    $i++;   
    echo '<p>Title:<b> ' . $title . '</b><br />';
    echo 'Link: ' . $link . '<br />';
    echo 'Description: ' . $descr . '</p>';
}

