<?php

//https://gist.github.com/anchetaWern/6150297
//$html = file_get_contents('http://dimigyuri.byethost3.com/enreg.html?i=1'); //get the html returned from the following url
 
  $url = "http://dimigyuri.byethost3.com/enreg.html?i=1";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);
 
echo "[". $curl_scraped_page."]";

?>