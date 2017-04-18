  <?php 
include("simple_html_dom.php");
 


function WebScan(){
	
	$cellTag = 'td[class=listItem] a em';
    $ArtistTag = 'td[class=listItem]';
	$url  = 'http://www.the-athenaeum.org/art/random.php';
	$html = file_get_html($url);	
 
   //echo $html;
 
   foreach( $html->find($cellTag) as $key => $info) {
	         $title[$key] =  $info->plaintext;
             	 
   }
 
  foreach( $html->find( $ArtistTag) as $key => $info) {
	         $artist[$key] =  $info->plaintext;
   }


   $i=0;
  foreach ( $title as $t) {
     $artist[$i] = substr( $artist[$i], strlen ($t)+3);
	$parts = explode("(", $artist[$i]);
    $artist[$i]= $parts['0'];	
 
 	$i++;
 }
 
  $paintinglnk='http://www.the-athenaeum.org/';
 $i=0;
  foreach($html->find('a') as $e) {  //find all links
    $lnk[ $i] = $paintinglnk.$e->href; 
    $i++;
  }
  
 $max = sizeof($title);
 for($i = 0; $i < $max;$i++){
    $lnk[$i]=$lnk[3+2* $i];
  }
 

// Retrieve all images and print their SRCs
$i = 0;
foreach($html->find('img') as $e){
   $imag[$i]= $paintinglnk.$e->src;
  $i++;
}
 
 
echo '<table width="94%" bgcolor="#0c0F0F" cellspacing="0" cellpadding="6" border="1" bordercolor="#F9F9F9">';
  $i=0;  
for ($row = 0; $row < 4; $row ++) {
 echo "<tr>";
 for ($col = 1; $col <= 3; $col ++) {
         
		echo '<td class="listItem" valign="top" align="center" width="33%">';
		echo '<a href="'. $lnk[$i].'">';
        echo '<img src="'.$imag[$i] . '"></a><br>';
        echo  '<b><font color="gray">'.$title[$i].'</font></b><br>';
        echo  '<font color="white">'.$artist[$i].'</font><br>';
		echo  "</td>";
		$i++;
   }

   echo "</tr>";
}

echo "</table>"; 
  
  
 return  $lnk;
}


function getRandImage($url,$linkTag){
 $i=0;
	 $html = file_get_html($url);
// Extract links
 foreach($html->find('a') as $element){ 
    
   echo '['.$i.']'. $element->href . '<br>'; 
	  $i++;
 }
// Extract images

//echo "<br><br><b>".'img list'. '</b><br><br>'; 
 //  foreach($html->find('img') as $element)
  //      echo $element->src . '<br>';

echo "<b>".'End of i  list'. '</b><br><br>'; 
	
}



function GetPainting(){
   
  

/*
<div class="listItemContents">
   <a href="/art/detail.php?ID=221353">
   <img src="/art/display_image.php?id=700883" border="0" vspace="3" hspace="3">
</a>
<br> <a href="/art/detail.php?ID=221353"><em> Carmen</em></a><br>Alexander Golovin (1908)</div>
*/

$links =  WebScan();
echo '<b>links :</b> ' . $links[1]  . '<br /> </p>'  ;
    return "word";
 }
 
 ?>


<html>
<head>
	 
    <?php $title= GetPainting(); ?>
	<title><?php echo $title; ?></title>
	 
 	 
</head>

<body> 



</body>
</html>
   