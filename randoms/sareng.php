 
<?php 
  
include("simple_html_dom.php");
include('left.php');
include('jumbotron.php'); 

 

if(!isset($_GET["search_str"])){
	 $srcString = 'newyourker';
}	 
else {
	 $srcString= $_GET["search_str"]; 
	 if (strlen($srcString) == 0 ){
		 $srcString = 'newyourker';
	 }else{}
}

 
echo '<p><span class="badge">Search Word: </span>'.$srcString;
$in = str_replace(' ','+',$srcString); // space is a +

 


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
        
		echo '<p><span class="badge">'.$i.'</span>';
		echo '<a href="'.$link.'"><b>'. $title .'</b></a><br /> ';
		echo  $descr  . '<br />';
  	    echo '<b>Link:</b> ' . $link . '<br /> </p>' ;
	   
   }
   return $html;
}





/*
Always be careful about memory leak because it can slow own your website. You can add following lines to avoid memory leaks.
 
 $html->clear();
 
 
 

*/
/* 
echo '<p>Search String <b> ' . $srcString  . '</b><br />';
echo '<p> <b><H3> Google Results</H3></b><br />';
$descrTag = 'span.st';  
$linkTag = 'h3[class=r] a';
$titleTag = 'h3[class=r] a';
$googleURL  = 'http://www.google.com/search?hl=en&tbo=d&site=&source=hp&q='.$in.'&oq='.$in.'';
$html =  EngResultsScan($googleURL,$linkTag,$titleTag,$descrTag);
 
/// The aol scan does not work
echo '<p> <b><H3> aol.com</H3></b><br />';
$aolURL = 'https://search.aol.com/aol/search?s_chn=prt_bon&s_it=comsearch&q='.$in;
$linkTag = 'a.find';
$titleTag = 'a[class=find]';
$descrTag ='p property="f:desc"';


 $html = EngResultsScan($aolURL, $linkTag, $titleTag, $descrTag);    
 */
echo '<p> <b><H3> bing.com</H3></b><br />'; 
  

 ?>


 <div class="row">
	  <div class="col-md-12">
       <div class="card">   <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
			   <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Yahoo</a></li>
            <li role="presentation">
			   <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Ask.com</a></li>
            <li role="presentation">
			   <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">bing</a></li>
            <li role="presentation">
			   <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">search1</a></li>
			<li role="presentation">
			   <a href="#divid" aria-controls="settings" role="tab" data-toggle="tab">search1</a></li>   
         </ul>

                                    
     <div class="tab-content"> <!-- Tab panes -->
         <div role="tabpanel" class="tab-pane active" id="home">
		   <?php 
               $yahooURL  = 'https://search.yahoo.com/search?fr=yfp-t&fp=1&toggle=1&cop=mss&ei=UTF-8&p='.$in;
			   $descrTag = '.lh-16'; 
			   $linkTag = 'h3  a';
			   $titleTag = 'h3  a';
			   $html =  EngResultsScan($yahooURL,$linkTag,$titleTag, $descrTag);
		   ?>
		  </div>
          <div role="tabpanel" class="tab-pane" id="profile"> 
		    <?php 
			   $askURL = 'http://www.ask.com/web?o=0&qo=homepageSearchBox&q='.$in;
			   $linkTag = '.PartialSearchResults-item-title-link';
			   $titleTag = '.PartialSearchResults-item-title';
			   $descrTag ='.PartialSearchResults-item-abstract';
			   $html = EngResultsScan($askURL,$linkTag,$titleTag, $descrTag); 
			?>
		 </div>
        <div role=="tabpanel" class="tab-pane" id="messages">
		    <?php 
				$bingURL = 'https://www.bing.com/search?qs=n&form=QBLH&sp=-1&pq=asad&sc=8-4&sk=&q='.$in;
				$linkTag = 'h2 a';
				$titleTag = 'h2 a span strong';
				$descrTag ='div.b_caption p'; 
               $html = EngResultsScan($bingURL,$linkTag,$titleTag, $descrTag); 				 
		    ?>
		</div>
         <div role="tabpanel" class="tab-pane" id="settings">
		    <?php   ?>
			</div>
		  <div role="tabpanel" class="tab-pane" id="divid">
		    <?php   ?>
		  </div>	
			
	 </div>
    </div>
 </div>
</div>






<?php 
$html->clear();  
include('right.php');

?>