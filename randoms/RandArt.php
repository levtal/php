  <?php 
include("simple_html_dom.php");
 


function WebScan(){
	
	$cellTag = 'td[class=listItem] a em';
    $ArtistTag = 'td[class=listItem]';
	$url  = 'http://www.the-athenaeum.org/art/random.php';
	$html = file_get_html($url);	
 
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
    $lnk[ $i] = $paintinglnk . $e->href; 
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
 
 return array($lnk, $imag,$title,$artist);
  
}

 



function  PaintingTable($ar){
   
 
 $lnk = $ar[0];
 $imag= $ar[1];
 $title= $ar[2];
 $artist= $ar[3];
 echo '<table width="94%" bgcolor="#0c0F0F" cellspacing="0" cellpadding="6" border="1" bordercolor="#F9F9F9">';
  $i=0;  
 for ($row = 0; $row < 4; $row ++) {
 echo "<tr>";
 for ($col = 1; $col <= 3; $col ++) {
         
		echo '<td class="listItem" valign="top" align="center" width="33%">';
		echo '<a href="'. $lnk[$i].'">';
        echo '<img src="'.$imag[$i] . '"></a><br>';
        echo  '<b><font color="gray">'.$title[$i].'</font></b><br>';
        //echo  '<font color="white">'.$artist[$i].'</font><br>';
        $text = str_replace(' ', '_', $artist[$i]);
		echo  '<a href="https://en.wikipedia.org/wiki/'.$text.'">';
		echo  '<font color="white">'.$artist[$i].'</font></a>';
		echo "</td>";
		$i++;
   }

   echo "</tr>";
}

echo "</table>";
   
 }
 
 ?>


<html>
<head>
	 
    <?php $ar=  WebScan();
    $title= $ar[2];	?> 
     
	<title><?php echo ($ar[3][0]); ?></title> 
	 
 	<?php PaintingTable($ar)	?> 
	 
</head>

<body> 



</body>
</html>
   