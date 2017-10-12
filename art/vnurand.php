  <?php 
  include("simple_html_dom.php");
 require_once ('classes/DB.php'); 
 include('left.php'); 

 function GetVnuArtist(){
	$sql = 'SELECT * FROM  vnartists'  ;
    $rows = DB::query($sql,array());
    $counter = count( $rows);
	$i=rand(0,$counter-1) ;
	return $rows[$i]["name"];
}

function getVnuPaintingList(){
	$artist_name=GetVnuArtist();
	echo  '<h1>'.$artist_name.'</h1>';
	$name = str_replace(' ', '-', $artist_name);
	$name= 'https://conchigliadivenere.wordpress.com/category/'.$name;
    $html = new simple_html_dom();
	$html->load_file($name);
	$img_tag = '[class=size-full]';
	 
    foreach($html->find($img_tag) as $e){
            //echo rtrim($e->src, "?") . '<br>';
			echo  '<img src="'.$e->src .'alt="Smiley face"  > ';
	}
  }
getVnuPaintingList();
include('right.php');
?> 
  
 
 
    