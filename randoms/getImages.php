<?php  
 $imgurl = substr($url, 0, strrpos( $url, '/')); 
 foreach($html->find('img') as $key => $info) {
        
		
		
		if ( strpos($info->attr['src'], 'http') !== false) {
             $img_src = $info->attr['src'];
		 }else{
		  $img_src = $imgurl.'/'.$info->attr['src'];
	 
		 }
		echo '<p><span class="badge">'.($key + 1).' </span>';  
		$yandex = 'https://www.yandex.com/images/search?text='. $img_src;
        $yandex = $yandex.'&img_url='. $img_src .'&rpt=imageview';
        echo '<a href = "'. $yandex.'" target="_blank">Ydx </a>';
        
		
		$google = 'https://www.google.co.il/search?tbm=isch&q='.$img_src;
		echo '<a href = "'. $google.'" target="_blank">'.' Gg</a>';
		 
		echo '<a href = '. $img_src .'>';
		echo '<img src=  '.$img_src. ' alt="+" width="50%" height="50%" >'; 
		echo '</a>';
		echo "<br><pre>".print_r($info->attr, true) . "</pre>";
       
    
  } 
  
 ?>