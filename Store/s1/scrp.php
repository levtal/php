 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Store Home Page</title>
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
</head>
<body>
<div align="center" id="mainWrapper">
 

  <?php include_once("template_header.php");?>
 
 <div id="pageContent">
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
   <tr>
 
    <td width="35%" valign="top">
	   <h3>Parsing Script </h3>
	    <?php
		  /*$data = file_get_contents('http://www.bbc.com/news/world-asia-38980474');
		   $regex    =  ("%Korea%");
			 //preg_grep("%\w*\b\d\s$%",$data,  $match);
			 preg_match($regex,$data,$match);
			  var_dump($match);
			  echo  "<br>----------------- <br>";
			echo "<br>m<pre>".print_r($match, true) . "</pre>";
			  //echo $match[0];
			  //echo $data; */
			  
	    ?>
		
 <?php
 //https://regex101.com/ 
		 
$regexp = '/href=([\'"])(.*?)\\1/is';
$html =  file_get_contents('https://www.rami-levy.co.il/default.asp?catid=%7B9EDE83CE-2763-412A-B752-9EEC18797064%7D'); 
//$html =  file_get_contents('http://www.walla.com'); 
// get and print the array with all matches
if (preg_match_all($regexp, $html, $matches)) {
 $length = count($matches[1]);
  echo  "Number of urls found = " . $length;  
  echo  "<br> First item = ".  $matches[0][0] ;
  echo  "<br> Second item = ".  $matches[0][1];
    
}
else {
  echo 'No match found';
}
  
 //var_dump($matches );
 
 echo  "<br>----- URL List----------- <br>";
 //echo "<br><pre>".print_r($matches, true) . "</pre>";
 
 for($j=0;$j<count($matches[1]);$j++){
	   
    $matches[0][$j]= preg_replace("/href=/","", $matches[0][$j]);// Delete the substring 'href='

	echo "[".$j."] ". $matches[0][$j] . "<br> ";
	}
 
  
?>
       
	</td> 
	
	
	<td width="55%" valign="top">
	  <h3>Curl demo</h3>
		<?php
     
	  
			$url = "oooff.com";
			$ch = curl_init($url);// initialize the CURL library 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			// setting an option in the handle  ==> $ch
			//CURLOPT_RETURNTRANSFER = tells the curl object/handle is to return the transfer to   $curl_scraped_page 
			//true'  ==> this means yes we want this enacted.  False is the same as not having it at all. 
			$curl_scraped_page = curl_exec($ch);// run all the stuff we've set
			curl_close($ch);
			echo $curl_scraped_page;
		?>
 
 	</td>
  </tr>
</table>

  </div>
 

 <?php include_once("template_footer.php");?>
</div>
</body>
</html>