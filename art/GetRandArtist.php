  <?php 

include("simple_html_dom.php");
 
 

function WebScan(){
	
    $wikiurl='https://www.wikiart.org/';
	$ArtistNameTag = 'a[class=artist-name]';
	$ImageTag = 'a[class=related-dictionary-thumbnail-image]';
	$cellTag = 'div[class=related-dictionary-thumbnail]';
    $ArtistTag = 'td[class=listItem]';
	
	$url  = 'https://www.wikiart.org/en/App/Painting/Random';//Random artist
	$html = file_get_html($url);	
    $ArtistName = $html->find($ArtistNameTag,0)->href;
	$ArtistLink =  '<a href="'.'https://www.wikiart.org'.$ArtistName.'">';
     $ArtistName = str_replace("/en/", "", $ArtistName);
    $ArtistLink = $ArtistLink . $ArtistName .'</a>';
  

 
	$i=0;
 foreach ($html->find($ImageTag) as $e) {   
    $e->getAllAttributes();
	$PaintingTitle = $e->attr['title'];
	$Title = '<a href="'.$wikiurl.$e->attr['href'] .'">';
    $Title = $Title . $PaintingTitle.'</a>';
   

   
    $urlImag=explode( "background-image: url('", $e->attr['style'] ) ;
    $urlImag=explode( "')",  $urlImag[1] ) ;
    
	  
    $smallurlImag = '<img src="'. $urlImag[0].'">';
   
    $urlImag=explode( "!",   $urlImag[0] ) ;!
    $bigurlImage=$urlImag[0];
    
 
	$picIcon='<a href="'. $bigurlImage . '">'.$smallurlImag .'</a>';
  
   /* echo $Title;
    echo  '<br>';
	echo $picIcon;
	echo  '<br><br> ';*/
	$TitleArray[$i] = $Title;
	$PicArray[$i] = $picIcon;
	$i++;
    
 }	
 
  return array($ArtistLink, $TitleArray,$PicArray,$i--);
  
  
}

  


function  PaintingTable($ar){
   
  //return array($ArtistLink, $TitleArray,$PicArray[$i],$i--);
 $artist= $ar[0];
 $title= $ar[1];
 
 $imag= $ar[2];
  $itemNum = $ar[3];
 
 
  echo '<table width="98%" bgcolor="#0c0F0F" cellspacing="0" cellpadding="6" border="0" bordercolor="#F9F9F9">';
  for ($row = 0; $row < $itemNum; $row ++) {
   echo "<tr>";
     echo '<td class="listItem" valign="top"  width="33%">';
             echo $imag[$row].'<br>'; 
		   echo $title[$row].'<br>';
          
       echo "</td>";
  echo "</tr>";
 echo "</table>";
 }
 
}
 
 
 $ar = WebScan() ; 
  echo '<br><b>'.$ar[0].'</b><br><br>';
 PaintingTable($ar);	
 
   
?> 
  
 
 
 
    