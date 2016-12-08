<?php 
 //URL Format

function  formatDate($date) {
	$date = date("F j, Y, g:i a" ,strtotime($date));

	return $date;
}
 
 
 
 function urlFormat($str){
	//Strip out all whitespaces
	$str = preg_replace('/\s*/','',$str);
	//Convert the string to all lowercase
	$str = strtolower($str);
	//URL Encode
	$str = urlencode($str);
	return $str;
	
}
 
 
 ?>  