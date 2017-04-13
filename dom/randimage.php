 
 <?php
 
$link = "http://images.google.com/images?q="."get_the_title()"."&tbm=isch";
$link = str_replace(' ','_',$link);
$code = file_get_contents($link,'r');
 
 
//ereg ("imgurl=http://www.[A-Za-z0-9-]*.[A-Za-z]*[^.]*.[A-Za-z]*", $code, $img);
//ereg ("http://(.*)", $img[0], $img_pic);
 

// preg_match("#imgurl=http://www.[A-Za-z0-9-]*.[A-Za-z]*[^.]*.[A-Za-z]*#", $code, $img);
//preg_match("#http://(.*)#", $img[0], $img_pic);
/////////////

preg_match_all('%imgurl=(http|https)://(.+?)&amp%s', $code, $res, PREG_PATTERN_ORDER);
if(!empty($res[2])) {
  $res = $res[2];

  echo $res[1]."\n"; // im image #2
  echo $res[mt_rand(0,(count($res)-1))]."\n"; // im image #random
}



////// 
 
 $firstImage = $res[0];
$firstImage = trim($firstImage);
echo "";
 
// Display image
echo "<a href=\"$firstImage\">
      <img src=\"$firstImage\" class=\"artimage\">
      </a>";
?>
?>