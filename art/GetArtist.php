 <?php  
include('simple_html_dom.php');

         
  $pic_full='http://www.the-athenaeum.org/art/full.php?ID='.$_GET['pic_id'];
  $html = file_get_html($pic_full);

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
 

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
    
  </head>

  
<body>
 <p id="pic-data"><h1><?php  echo $title[0];   ?></h1> </p>
 
  <a href="<?php  echo  $lnk[ 14];?>">    <font color="blue">Artist Detials</font></a> 
  <a href="<?php  echo  $lnk[ 15];?>">    <font color="blue">Artist List</font></a> 
   
  <img src="<?php  echo  $img[3];?>"  border="2">
<p id="Array"></p>
<p id="Array length"></p>
 
<p id="result"></p>
<p id="num"></p>



</body>
</html>
 
    
  
  