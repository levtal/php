<?php
 include('left.php'); 
 require_once ('classes/DB.php');
 include('simple_html_dom.php');

$pic_full='http://www.the-athenaeum.org/art/full.php?ID='.$_POST['pic_id'];
 $html = file_get_html($pic_full);

$artist_name= $_POST['artist_name'];

 
$lines = preg_split('/\n|\r\n?/', $artist_name); 
$artist_name =  $lines[1];
echo   'Artist: '.$artist_name; 
 
 $i=0;
foreach($html->find('div.left') as $e){
   $data[$i]= $e->plaintext;
  // echo'['.$i.']'.$data[$i] . '<br>';
   $i++;
}

$title = explode("Resize", $data[0], 2);// Painting and artist name
 

 $paintinglnk='http://www.the-athenaeum.org/';
$i=0;
foreach($html->find('a') as $e) { 
    $lnk[$i] = $e->href; 
    $lnk[$i] = substr($lnk[$i], strpos($lnk[$i], "=") + 1);   //Get the 'id'  value
	$i++;
	
}
 
 $i=0;
foreach($html->find('img') as $e){
   
  // echo $paintinglnk.$e->src . '<br>';
   $img[$i] = $paintinglnk.'art/'.$e->src; 
   $i++;
 }  
   $lnk[14]= ' http://www.the-athenaeum.org/people/detail.php?id='.$lnk[14]; //Artist Detials 
  $lnk[15]=  'http://www.the-athenaeum.org/art/list.php?m=a&s=tu&aid='.$lnk[15];// Artist List of paintings   
 ?>
 

 
 <p id="pic-data"><h1><?php  echo $title[0];   ?></h1> </p>
 <img src="<?php  echo  $img[3];?>"  border="2">
<?php 

 echo  '<form action="StorePainting.php" method="POST">';
 echo    '<input type="hidden" name="image_url" value="'.$img[3].'"/>';
 echo    '<input type="hidden" name="artist_name" value="'. $artist_name .'"/>';
 echo    '<input type="hidden" name="title" value="'.$_POST['title'].'"/>';
 echo    '<input type="submit" value="Store" style="color:#131333;height:50px; width:150px" />';
 echo '</form>';  
 ?>
 <?php include('right.php'); ?>
 
    
  
  