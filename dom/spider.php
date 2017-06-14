 <?php 

include("simple_html_dom.php");
$in = "PHP Simple HTML DOM";
$already_crawled = array();
$crawling = array();
$ext_link  = array();

function AbsoluteURL($rel){
    /* return if already absolute URL */
    if (parse_url($rel, PHP_URL_SCHEME) != '') return true;
    else return false;
}




 
$url= 'http://lisa1986.com/';
$data = parse_url($url);
echo $url."<br>" ;
echo "<br><pre>".print_r($data, true) . "</pre>";
 
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

 
 
 array (
  'scheme' => 'https',
  'host' => 'www.youtube.com',
  'path' => '/watch',
  'query' => 'v=2RRSw7Ycv0c&list=PLBOh8f9FoHHjdsAWwUjKk-QOlmBw-0Bvr&index=1',
)
 
 
 */
 
 $html = new simple_html_dom();
 $html->load_file($url);
 $linklist = $html->find("a");
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
	$max = sizeof($already_crawled);
 for($i = 0; $i < $max;$i++){
 	echo "[". $i ."] ".$already_crawled[$i] ."<br />";
	
     }
 
 
echo "------------------------------------<br />"; 
 $max = sizeof($ext_link);
 for($i = 0; $i < $max;$i++){
 	echo "[". $i ."] ".$ext_link[$i] ."<br />";
	
 }

 
		 

?>