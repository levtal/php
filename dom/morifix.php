 <?php 
  
 /*<div class="content linkableSentence" dir="rtl">
                <a href="http://www.morfix.co.il/vicious%20circle" class="text" onclick="oStuff.gaLog('UserAction','To page: Sentence of the day');">vicious circle</a>
                
            </div>

	<div class="transcription">The country is stuck in a <b>vicious circle</b> of having to borrow money in order to pay off its debts.</div>		
	
  <div class="explenation">מעגל קסמים, מצב שבו בעיה מסוימת גוררת בעיות נוספות בתהליך החוזר על עצמו שוב ושוב</div>
	
*/
include("simple_html_dom.php");

$in = "PHP Simple HTML DOM";
$in = str_replace(' ','+',$in); // space is a +
$url  = 'http://www.morfix.co.il/pages/sentenceoftheday/list';

print $url."<br>";

$html = file_get_html($url);

 //get the qustions
foreach( $html->find('div[class="content linkableSentence"]') as $key => $info) {
	        $qustion[$key] =  $info->plaintext;
} 
 
foreach( $html->find('div[class="transcription"]') as $key => $info) {
	        $englis_answer[$key] =  $info->plaintext;
}

foreach( $html->find('div[class="explenation"]') as $key => $info) {
	        $hebrow_answer[$key] =  $info->plaintext;
}



$i=0;
foreach ($qustion as $q) {
    echo ($i).'. <b>'.$q."</b><br />\n _ _". $englis_answer[$i]."<br />\n  _ _". $hebrow_answer[$i]."<br />\n ";
	
	$i++;
	 
}