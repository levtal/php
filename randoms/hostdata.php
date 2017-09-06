   <?php 
   
   
 function  getIpInfo($ip_list){
	  
  $ip_info_url='https://ipinfo.io/'.$ip_list;
  $h = file_get_html($ip_info_url);
 
 echo ' OutPut of ipinfo.io <br>-------------------<br>';
 $jason_array =json_decode( $h);
 $jason_array = get_object_vars($jason_array);
 
 echo '<p><span class="badge">ip: </span>';
 echo   $jason_array['ip'].'<br>';

 echo '<p><span class="badge">Host: </span>';
 
 echo '<a href="//'. $jason_array['hostname'] .'">';
     echo  '<font size="4" color="#ffcc66">'.$jason_array['hostname'].'</font><br>';
 echo  '</a>';
 
 
 //echo $jason_array['hostname'].'<br>'; 
 echo  'city  = '.$jason_array['city'].'<br>'; 
 echo  'region  = '.$jason_array['region'].'<br>'; 
 echo  'country  = '.$jason_array['country'].'<br>'; 
 echo  'loc  = '.$jason_array['loc'].'<br>'; 
 echo  'org   = '.$jason_array['org'].'<br>'; 
 echo  'postal   = '.$jason_array['postal'].'<br>'; 

 $pieces = explode(" ", $jason_array['org']);
  
   $ip_whois_url='https://ipinfo.io/'.$pieces[0]; 
     
    $h = file_get_html($ip_whois_url);
	
	//echo $h;
	
 echo '<a href="'. $ip_whois_url .'">';
			echo  '<font size="4" color="#ffcc66"> WHOIS of ipinfo.io '. $pieces[0].'</font><br>';
            echo  '</a>';	
 
 $robex_whois_url='https://www.robtex.com/?as='.$pieces[0];  
echo '<a href="'.  $robex_whois_url .'">';
			echo  '<font size="4" color="#ffcc66"> ROBEX of '. $pieces[0].'</font><br>';
            echo  '</a>';	
	
	
	
 

 $ip_map_url='http://www.infosniper.net/index.php?ip_address='.$jason_array['ip'];

 echo '<a href="'.   $ip_map_url .'">';
 echo  '<font size="4" color="#ffcc66"> Visual Locatio - infosniper.net </font><br>';
 echo  '</a>';	
	
  
   
 
    echo   '
 <div class="mapouter">
 <div class="gmap_canvas">
 <iframe width="600" height="500" id="gmap_canvas"
 src="https://maps.google.com/maps?q=loc:'.$jason_array['loc']. 
 '&t=&z=14&ie=UTF8&iwloc=&output=embed" 
 frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
 </iframe>
 embed google map <a href="http://www.embedgooglemap.net">embedgooglemap.net</a>
 </div>
 <style>.mapouter{overflow:hidden;height:500px;width:600px;}.gmap_canvas {background:none!important;height:500px;width:600px;}</style></div>
 ';
	  
	  
  } 
   
   
   
   
   
 function scanHost($url) {
	 
   $data = parse_url($url);
   echo 'IP-List <br>' ;
   echo "-------------------------<br>" ;
   $ip_list = gethostbynamel($data['host']);
   
   echo "<br><pre>".print_r($ip_list, true) . "</pre>";
    
  
   getIpInfo($ip_list[0]);
  
 
 }  
 ?>
 


 

