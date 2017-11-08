<?php 
 include('left.php'); 
 include("simple_html_dom.php");
 require_once ('classes/DB.php'); 
 

 function GetOdysseyArtist(){  //Return random artist name
	$url = 'http://artodyssey1.blogspot.co.il/search/label/';
	$ArtistNameTag = 'a[dir=ltr]';
	$html = new simple_html_dom();
    $html->load_file($url);
    $l = $html->find($ArtistNameTag);
	$counter =sizeof($l);
	echo 'Number of artists ='.$counter. '<br>'; 
	$i=rand(0,$counter-1) ;
	echo 'Number of artist ='.$i. '<br>'; 
	$artist_name = $html->find($ArtistNameTag,$i)->attr['href'];
    return   substr($artist_name, strrpos($artist_name, '/') + 1);
   
}//GetOdysseyArtist

function getOdysseyPaintingList(){
	$url = 'http://artodyssey1.blogspot.co.il/search/label/';
	$artist_name=GetOdysseyArtist();
    echo '<a href="'.$url.$artist_name.'">';
	$aname = str_replace('%20', ' ', $artist_name);
    echo  '<h1>'.$aname.'</h1></a>';
	$name = str_replace(' ', '%20', $artist_name);
	$name = $url.$artist_name;
    $html = new simple_html_dom();
	//echo $name;
	
	$html->load_file($name);
    $img_tag = 'a';
    foreach($html->find($img_tag) as $e){
      if ((empty($e->attr['href']) == 0)  && (strcmp( substr($e->attr['href'], -3),"jpg")==0) ) 
		{
			echo '<img src="'.$e->attr['href'] .'"  > ';
			$yandex = 'https://www.yandex.com/images/search?text='. $e->attr['href'];
            $yandex = $yandex.'&img_url='.  $e->attr['href'] .'&rpt=imageview';
            echo '<a href = "'. $yandex.'" target="_blank">Ydx </a>';
        
	       $google = 'https://www.google.co.il/search?tbm=isch&q='.$e->attr['href'];
	        echo '<a href = "'. $google.'" target="_blank">'.' Gg</a>';	
 				
	    }
	}   
 }//getOdysseyPaintingList
 
 
getOdysseyPaintingList();
include('right.php');
?> 
  
 
 
    