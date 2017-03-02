<?php
# Demonstration of LIB_thumbnail.php
# Include libraries

 
include("lib/LIB_http.php");
include("lib/LIB_thumbnail.php");
# Get image from the Internet
$target = "http://www.schrenk.com/north_beach.jpg";
$ref = "";
$method = "GET";
$data_array = "";
$image = http_get($target, $ref, $method, $data_array, EXCL_HEAD);
# Store captured image file to local hard drive
$handle = fopen("test.jpg", "w");//This file create in the current dir
fputs($handle, $image['FILE']);
fclose($handle);
# Create thumbnail image from image that was just stored locally
$org_file = "test.jpg";
$new_file_name = "thumbnail.jpg";
# Set the maximum width and height of the thumbnailed image
$max_width = 90;
$max_height= 90;
# Create the thumbnailed image
create_thumbnail($org_file, $new_file_name, $max_width, $max_height);
?>

Full-size image<br>
<img src="test.jpg">
<p>
Thumbnail image<br>
<img src="thumbnail.jpg">

 