  <?php 
  
include("simple_html_dom.php");
include('left.php');
include('jumbotron.php'); 
//include('scanip.php');
include('hostdata.php'); 
 
$already_crawled = array();
$crawling = array();
$ext_link  = array();
function scanip($ip){
	 
	 echo  $ip.'<br>';  
    $chkHostUrl='https://check-host.net/ip-info?host='.$ip;
     echo '<a href='.$chkHostUrl.'>'.$chkHostUrl.'</a><br>';
  //	$h = file_get_html($chkHostUrl);
	getIpInfo($ip);
}
 
function get_details($url) {
	// The array that we pass to stream_context_create() to modify our User Agent.
	$options = array('http'=>array('method'=>"GET", 'headers'=>"User-Agent: howBot/0.1\n"));
	// Create the stream context.
	$context = stream_context_create($options);
	// Create a new instance of PHP's DOMDocument class.
	$doc = new DOMDocument();
	// Use file_get_contents() to download the page, pass the output of file_get_contents()
	// to PHP's DOMDocument class.
	@$doc->loadHTML(@file_get_contents($url, false, $context));
	// Create an array of all of the title tags.
	$title = $doc->getElementsByTagName("title");
	// There should only be one <title> on each page, so our array should have only 1 element.
	$title = $title->item(0)->nodeValue;
	// Give $description and $keywords no value initially. We do this to prevent errors.
	$description = "";
	$keywords = "";
	// Create an array of all of the pages <meta> tags. There will probably be lots of these.
	$metas = $doc->getElementsByTagName("meta");
	// Loop through all of the <meta> tags we find.
	for ($i = 0; $i < $metas->length; $i++) {
		$meta = $metas->item($i);
		// Get the description and the keywords.
		if (strtolower($meta->getAttribute("name")) == "description")
			$description = $meta->getAttribute("content");
		if (strtolower($meta->getAttribute("name")) == "keywords")
			$keywords = $meta->getAttribute("content");
	}
	// Return our JSON string containing the title, description, keywords and URL.
	//return '{ "Title": "'.str_replace("\n", "", $title).'", "  Description": "'.str_replace("\n", "", $description).'", "  Keywords": "'.str_replace("\n", "", $keywords).'", "  URL": "'.$url.'"},';
	return 
	     '<b>Title:</b> '. $title .
		 '<br> <b> Description:</b> '. $description.
		 '<br> <b>  Keywords: </b>'. $keywords .
		 '<br> <b>URL: </b>'.$url ;
}//get_details($url)
//*************************************************
if(!isset($_GET["search_str"])){
	 $url = 'depresion';
}	 
else {
	 $url = $_GET["search_str"]; 
	 if (strlen($url) == 0 ){
		  $url = 'http://www.uroulette.com/';
		  
	 }else{  }
}
 
if  (substr( $url, 0, 4 ) !== "http") { 
                //include('scanip.php');
	             scanip($url);
				include('right.php'); 
	            return;
	        }  
$data = parse_url($url);
echo $url."<br>" ;
echo '<br><pre><font size="4" color="black">'.print_r($data, true) . "</font></pre>";
 
 
 
 
 /*
 parse_url($url) result
 
    scheme - e.g. http
    host
    port
    user
    pass
    path
    query - after the question mark ?
    fragment - after the hashmark #
*/
 
 $html = new simple_html_dom();
 $html->load_file($url);
 $linklist = $html->find("a");
 
 //echo get_details($url)."<br><br>"; 
 foreach($linklist as $link){
        //if (AbsoluteURL($link->href) ) echo 'Absolute URL ';
		//else  echo 'Relitive URL ';
		
	$l =  $link->getAttribute("href");
		// Process all of the links we find. This is covered in part 2 and part 3 of the video series.
		if (substr($l, 0, 1) == "/" && substr($l, 0, 2) != "//") {
			$l = parse_url($url)["scheme"]."://".parse_url($url)["host"].$l;
		} else if (substr($l, 0, 2) == "//") {
			$l = parse_url($url)["scheme"].":".$l;
		} else if (substr($l, 0, 2) == "./") {
			$l = parse_url($url)["scheme"]."://".parse_url($url)["host"].dirname(parse_url($url)["path"]).substr($l, 1);
		} else if (substr($l, 0, 1) == "#") {
			// echo "<br><pre>".print_r(parse_url($url), true) . "</pre>";  
			//$l = parse_url($url)["scheme"]."://".parse_url($url)["host"].$l;
           $l = parse_url($url)["scheme"]."://".parse_url($url)["host"].parse_url($url)["path"].$l; 
			
			
		} else if (substr($l, 0, 3) == "../") {
			$l = parse_url($url)["scheme"]."://".parse_url($url)["host"]."/".$l;
		} else if (substr($l, 0, 11) == "javascript:") {
			continue;
		} else if (substr($l, 0, 5) != "https" && substr($l, 0, 4) != "http") {
			$l = parse_url($url)["scheme"]."://".parse_url($url)["host"]."/".$l;
		}
        if (strpos($l,  parse_url($url)["host"]) === false) {    //extrnel links
                 // If the link isn't already in our ext_link array
     			  if (!in_array($l, $ext_link)){
			             $ext_link[] =$l;
				   }
				   else{}
        }else{    //local links
		// If the link isn't already in our crawl array add it, otherwise ignore it.
		    if (!in_array($l, $already_crawled)) {
				$already_crawled[] = $l;
		    }else{}
		}
}		
 
?>

  <div class="row">
	  <div class="col-md-12">
       <div class="card">   <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
			   <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Internel</a></li>
            <li role="presentation">
			   <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Externel</a></li>
            <li role="presentation">
			   <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">URL details</a></li>
            <li role="presentation">
			   <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">div class</a></li>
			<li role="presentation">
			   <a href="#divid" aria-controls="settings" role="tab" data-toggle="tab">div id </a>
			</li> 
			
			<li role="presentation">
			   <a href="#img" aria-controls="settings" role="tab" data-toggle="tab">img </a>
			</li>
              			   
         </ul>

                                    
     <div class="tab-content"> <!-- Tab panes -->
         <div role="tabpanel" class="tab-pane active" id="home">
		   <?php 
		    	$max = sizeof($already_crawled);
                for($i = 0; $i < $max;$i++){
                        
						
						 echo   '<a href="'.$already_crawled[$i].'">';
                        echo '<p><span class="badge">'.$i.'</span>'."</a>";
						
						
                    	echo   '<a href="spider.php?search_str='.$already_crawled[$i].'">';
                        echo  $already_crawled[$i]."</a> <br />";
                }
		   ?>
		  </div>
          <div role="tabpanel" class="tab-pane" id="profile"> 
		    <?php 
		    	$max = sizeof($ext_link);
                for($i = 0; $i < $max;$i++){
                      
                       echo   '<a href="'.$ext_link[$i].'">';
                       echo '<p><span class="badge">'.$i.'</span>'."</a>";
        			   echo   '<a href="spider.php?search_str='.$ext_link[$i].'">';
                      echo  $ext_link[$i]."</a> <br />";
                   } 
  		   ?>
		 </div>
        <div role=="tabpanel" class="tab-pane" id="messages">
			     <?php  echo get_details($url)."<br><br>";  
				        echo scanHost($url)."<br><br>";
				 ?>
		</div>
         <div role="tabpanel" class="tab-pane" id="settings">
		    <?php  foreach($html->find('div[class]') as $key => $info) {
                 echo '<p><span class="badge">'.($key + 1).' </span>';
    			 echo  $info->class .'<br>'. $info->plaintext. "<br>";
              }  ?>
			</div>
		  <div role="tabpanel" class="tab-pane" id="divid">
		    <?php  foreach($html->find('div[id]') as $key => $info) {
                 echo '<p><span class="badge">'.($key + 1).' </span>';
			     echo  $info->id .'<br>'. $info->plaintext. "<br>";
              }  ?>
		  </div>
		  
		  <div role="tabpanel" class="tab-pane" id="img">
		      <?php include("getImages.php");  ?>
		  </div>
		  
	</div>
    </div>
 </div>
</div>

<?php  include('right.php');?>