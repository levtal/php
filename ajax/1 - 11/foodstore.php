<?php 
header('Content-Type: text/xml');//Generate XML Content
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';

	$food = $_GET['food'];//xml tag
	$foodArray = array('tuna','bacon','beef','loaf','ham');
	if(in_array($food, $foodArray))
		echo 'We do have '.$food.'!';
	elseif($food=='')
		echo 'Enter a food you fool.';
	else
		echo 'Sorry we dont sell no '.$food.'!';

echo '</response>'; // End xml tag
?>