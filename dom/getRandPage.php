 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html  >
<head>
	 

	<title>untitled</title>
	 
 	 
</head>

<body>
   
   


 <?php 
include("simple_html_dom.php");
 
 
function TranslateToHebrew($word){
    $morifix_url = 'http://www.morfix.co.il/'.$word;
	 $morifix_html = file_get_html($morifix_url);	
     echo 'morifix_url: ' . $morifix_url . '<br />'; 
    $tran = $morifix_html->find('div[class="row"]',0)->plaintext;
	return  $tran ;
 }


function getRandWord(){
    $url='https://randomword.com/';
	$html = file_get_html($url);	
 
   $word = $html->find('div #random_word',0)->plaintext;
   $meaning =  $html->find('div #random_word_definition',0)->plaintext;
   /* <div id="shared_section">
				<div id="random_word">ophthalmophobia</div>
				<div id="random_word_definition">fear of being stared at  </div>
			</div> */
    
	
   	/*  'h3[class=r] a';
	 <div class="translation translation_he heTrans">גָּדוֹל; חָשׁוּב; מְבֻגָּר </div>
	*/
return array ($word, $meaning);
}
 

function WebScan($url,$linkTag){
   echo  '<b>'. $url .'</b></a><br /> ';
       echo 'Linktag: ' . $linkTag . '<br />';
   $html = file_get_html($url);	
   $linkObjs = $html->find($linkTag );
   $i=0;  
   $lnk=array();
   foreach ($linkObjs as $linkObj) {
      
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
        $i++;   
       echo '<p>['.$i.']  <a href="'.$link.'"><b>'. $title .'</b></a><br /> ';
       echo 'Link: ' . $link . '<br />';
	    $lnk[$i] = $link;
	   }
   return  $lnk;
}


function getRandImage($url,$linkTag){
 $i=0;
	 $html = file_get_html($url);
// Extract links
 foreach($html->find('a') as $element){ 
    
   echo '['.$i.']'. $element->href . '<br>'; 
	  $i++;
 }
// Extract images

//echo "<br><br><b>".'img list'. '</b><br><br>'; 
 //  foreach($html->find('img') as $element)
  //      echo $element->src . '<br>';

echo "<b>".'End of i  list'. '</b><br><br>'; 
	
}




 
 list ($word, $meaning) = getRandWord();
 echo '<b>word:</b> ' . $word . '<br /> </p>' ;
 echo '<b>meaning:</b> ' .  $meaning . '<br /> </p>' ;
 
 $tragom= TranslateToHebrew($word);
 echo '<b>Translation:</b> ' .  $tragom . '<br /> </p>' ;
 $in = str_replace(' ','+',$meaning); // space is a + 
  
$linkTag = 'h3[class=r] a';
$titleTag = 'h3[class=r] a';
$googleURL  = 'http://www.google.com/search?hl=en&tbo=d&site=&source=hp&q='.$in.'&oq='.$in.'';
$links =  WebScan($googleURL,$linkTag);
echo '<b>links :</b> ' . $links[1]  . '<br /> </p>' ;
 $style=' alt="HTML5 Icon" style=" width="5100" height="400"';
 $in='kalsoy';
  echo '<table>  <tr>';
  echo '<th>'.$in.'</th>'.'<th>'. $meaning.'</th>'.'<th>'.$word.'</th>';
    echo ' </tr> <tr>';
  echo '<td>';
  echo '<img src="http://loremflickr.com/3000/1800/'.$in.',bird"'.$style.'><br />';
  echo '</td>'; 
  echo '<td>';
  echo '<img src="http://loremflickr.com/1000/800/'.$meaning.',moon"'.$style.'><br />' ;
  echo '</td>'; 
  echo '<td>';
  echo '<img src="http://loremflickr.com/1000/800/'. $word.',urban'.$style.'><br />';
  echo '</td>';
   echo '</tr></table>';
 //<img src="http://loremflickr.com/1820/1140/Surrealism" />
 //<img src="http://loremflickr.com/182/110/portrait" />
?>


 



</body>
</html>
   