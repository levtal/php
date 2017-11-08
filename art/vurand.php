<?php 
 include('left.php'); 
 include("simple_html_dom.php");
 require_once ('classes/DB.php'); 
 

 function GetArtist($url,$ArtistNameTag){  
	    //Return random artist name
	$html = new simple_html_dom();
    $html->load_file($url);
    $l = $html->find($ArtistNameTag);
	$counter =sizeof($l);
	echo 'Number of artists ='.$counter. '<br>'; 
	$i=rand(0,$counter-1) ;
	echo 'Number of artist ='.$i. '<br>'; 
	$artist_name = $html->find($ArtistNameTag,$i);//->plaintext;
	 
    return  $artist_name;
}//GetArtist

function getPaintingList(){
	$url='https://conchigliadivenere.wordpress.com/';
    $ArtistNameTag = 'li[class=cat-item]a';
    $artist_name=GetArtist($url,$ArtistNameTag);
	 
	echo  '<h1>'.$artist_name.'</h1></a>';
    $html = new simple_html_dom();
	 
	    
	$html->load_file( $artist_name->attr['href']);
	 
    $img_tag = 'a';
    foreach($html->find($img_tag) as $e){
      if ((empty($e->attr['href']) == 0)  && (strcmp( substr($e->attr['href'], -3),"jpg")==0) )  {
			echo '<img src="'.$e->attr['href'] .'"  > ';
			
		   $yandex = 'https://www.yandex.com/images/search?text='. $e->attr['href'];
           $yandex = $yandex.'&img_url='.  $e->attr['href'] .'&rpt=imageview';
           echo '<a href = "'. $yandex.'" target="_blank">Ydx </a>';
        
	       $google = 'https://www.google.co.il/search?tbm=isch&q='.$e->attr['href'];
	       echo '<a href = "'. $google.'" target="_blank">'.' Gg</a>';	
			
 	  }
	}   
 }//PaintingList
 
 
getPaintingList();
include('right.php');
?> 
  
 
 
    