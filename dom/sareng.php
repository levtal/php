 <?php 
include("simple_html_dom.php");

$srcString = "Kalsoy Island";//PHP Simple HTML DOM";
$in = str_replace(' ','+',$srcString); // space is a +

function WebScan($url,$linkTag,$descrTag ){
   print $url."<br><br> ".$linkTag;
   $html = file_get_html($url);	
   $linkObjs = $html->find($linkTag );
   $i=0;
   foreach ($linkObjs as $linkObj) {
        print $i."<br><br>WebScan";
	  $title = trim($linkObj->plaintext);
       $link  = trim($linkObj->href);
	   // if it is not a direct link but url reference found inside it, then extract
    if (!preg_match('/^https?/', $link) && preg_match('/q=(.+)&amp;sa=/U', $link, $matches)     &&    preg_match('/^https?/', $matches[1]))
		{
         $link = $matches[1];
        } 
		else if (!preg_match('/^https?/', $link))   { // skip if it is not a valid link
                     continue;
             }
           // int preg_match  
           // pattern - pattern to search for, as a string.
           // subject - input string.         matches - results of search

      //Description is not a child element of H3 thereforce we use a counter and recheck.
	   // $descr = $html->find($descrTag,$i);   
        $i++;   
        echo '<p>['.$i.']Title:<b> ' . $title . '</b><br />';
        echo 'Link: ' . $link . '<br />';
	   // echo '<b>Description:</b> ' . $descr . '</p>';
   }
   return $html;
}


function EngResultsScan($url,$linkTag, $titleTag, $descrTag ){
   print $url."<br><br>";
   $html = file_get_html($url);	
   $Objs = $html->find($linkTag );
  
   $i=0;
   foreach ($Objs as $Obj) {
       //$title = trim($linkObj->plaintext);
    $link  = trim($Obj->href);
 
	   
	   // if it is not a direct link but url reference found inside it, then extract
    if (!preg_match('/^https?/', $link) && preg_match('/q=(.+)&amp;sa=/U', $link, $matches)     &&    preg_match('/^https?/', $matches[1]))
		{
         $link = $matches[1];
        } 
		else if (!preg_match('/^https?/', $link))   { // skip if it is not a valid link
                     continue;
             }
           // int preg_match  
           // pattern - pattern to search for, as a string.
           // subject - input string.         matches - results of search

        $descr = $html->find($descrTag,$i);   
		$title = $html->find($titleTag,$i)->plaintext;
        $i++;   
        
		echo '<p>['.$i.']  <a href="'.$link.'"><b>'. $title .'</b></a><br /> ';
		echo  $descr  . '<br />';
  	    echo '<b>Link:</b> ' . $link . '<br /> </p>' ;
	   
   }
   return $html;
}





/*
Always be careful about memory leak because it can slow own your website. You can add following lines to avoid memory leaks.
 
 $html->clear();
 
 
 

*/
 
echo '<p>Search String <b> ' . $srcString  . '</b><br />';
echo '<p> <b><H3> Google Results</H3></b><br />';
$descrTag = 'span.st';  
$linkTag = 'h3[class=r] a';
$titleTag = 'h3[class=r] a';
$googleURL  = 'http://www.google.com/search?hl=en&tbo=d&site=&source=hp&q='.$in.'&oq='.$in.'';
$html =  EngResultsScan($googleURL,$linkTag,$titleTag,$descrTag);



echo '<p> <b><H3> Yahoo Results</H3></b><br />'; 
$yahooURL  = 'https://search.yahoo.com/search?fr=yfp-t&fp=1&toggle=1&cop=mss&ei=UTF-8&p='.$in;
$descrTag = '.lh-16'; 
$linkTag = 'h3  a';
$titleTag = 'h3  a';
$html =  EngResultsScan($yahooURL,$linkTag,$titleTag, $descrTag);  



echo '<p> <b><H3> ask.com</H3></b><br />'; 
$askURL = 'http://www.ask.com/web?o=0&qo=homepageSearchBox&q='.$in;
$linkTag = '.PartialSearchResults-item-title-link';
$titleTag = '.PartialSearchResults-item-title';
$descrTag ='.PartialSearchResults-item-abstract';
$html = EngResultsScan($askURL,$linkTag,$titleTag, $descrTag);   


 
/*
/// The aol scan does not work
echo '<p> <b><H3> aol.com</H3></b><br />';
$aolURL = 'https://search.aol.com/aol/search?s_chn=prt_bon&s_it=comsearch&q='.$in;
$linkTag = 'a.find';
$titleTag = 'a[class=find]';
$descrTag ='p property="f:desc"';


 $html = EngResultsScan($aolURL, $linkTag, $titleTag, $descrTag);    
 */
echo '<p> <b><H3> bing.com</H3></b><br />'; 
$bingURL = 'https://www.bing.com/search?qs=n&form=QBLH&sp=-1&pq=asad&sc=8-4&sk=&q='.$in;
$linkTag = 'h2 a';
$titleTag = 'h2 a span strong';
$descrTag ='div.b_caption p'; 
//$html = WebScan($bingURL, $linkTag, $descrTag);
$html = EngResultsScan($bingURL,$linkTag,$titleTag, $descrTag);   
  
 /* https://www.bing.com/search?qs=n&form=QBLH&sp=-1&pq=asad&sc=8-4&sk=&q=asad*/