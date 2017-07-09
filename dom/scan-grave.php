 <?php  
include('simple_html_dom.php');

$html = file_get_contents('./local/01.html');    
$html = str_get_html($html);

 
/*
http://dimigyuri.byethost3.com/images/regen/
http://dimigyuri.byethost3.com/images/regen/104.JPG
*/	

$garray= array(); 


$i=0;
foreach($html->find('td') as $e){
	$garray[] =  $e->outertext;
   
 } 
 
 $str='';
 $max = sizeof($garray);
 $n=1;
 for($i =5; $i < $max;$i++){
	  //echo '['. $n .'] '; 
	  //echo  $garray[$i]." <br />"; 
	 
 switch ($n) {
       
       
       case 1:
          $grave_num=$garray[$i];
		  $str =   $str. $grave_num;
		  $str= $str .','. 'http://dimigyuri.byethost3.com/images/regen/'.$grave_num.'.JPG'; 
		  //echo 'grave_num ------'. $str.'<br /> <br /> ';
		 
        break;
   
       case 6:
	        $grave_words=$garray[$i];
	     break;
   case 10:
	     break;
      case 11:
          $n=0;
		   $str= $str .','. $grave_words;
		  echo $str;
		   echo ' <br /> <br />  <br /> <br /> ';
		  $str=''; 
		 
          break;
	 default:
        $str = $str .','. $garray[$i];
		// echo '['. $n .'] ';
	    // echo  $garray[$i]." <br />";*/
		
    } 
	 $n++;	  
	 
 }
 
 
 
 
 
 /*for($i = 4; $i < $max;$i++){
	 if ($n == 2) {
	 	$grave_num=$garray[$i];
	 } 
     if ($n ==12) {  
	 	 
	    $str= $str .','. 'http://dimigyuri.byethost3.com/images/regen/'.$grave_num.'.JPG'; 
		 echo 'str = ' . $str." <br />----- <br />";
		 $str='';
	 }
     
	 if (($n <13)&& ($n >1)){ 
	       //echo '['. $n .'] ';
	      // echo  $garray[$i]." <br />";
		   $str= $str .','. $garray[$i];
	 }
	if ($n ==16) {
		$n=1;
	}
	else{
	  $n++;	
	}
 
 }  */
 
 
 
?>