 



<?php
##################################################################
# Example: Download All Images referenced in a web page  page 101
#-----------------------------------------------------------------
include("lib/LIB_download_images.php");
//$target="http://www.nasa.gov/mission_pages/viking/index.html";

 
$target="http://artifexinopere.com/?p=3322";
download_images_for_page($target);
?>