
<?php include('left.php'); ?>
   
   <h1  align="center"><span class="label label-info">IP data</span></h1>
    
 
<?php
   

 $ip='0.0.0.0';
 $ip=$_SERVER['REMOTE_ADDR'];
 $clientDetails = json_decode(file_get_contents("http://ipinfo.io/$ip/json"));
 echo "You're logged in from: <b>" . $clientDetails->country . "</b>";
 echo "<br>IP: <b>" . $clientDetails->ip . "</b>";
 echo "<br><pre>".print_r($clientDetails, true) . "</pre>";
	
/*	
	stdClass Object
(
    [ip] => 5.29.150.40
    [city] => 
    [region] => 
    [country] => IL
    [loc] => 31.5000,34.7500
    [org] => AS12849 Hot-Net internet services Ltd.
)
	echo GetClientIP(true);	
	*/
	
	
	
$indicesServer = array('PHP_SELF',
'argv',
'argc',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
'REMOTE_USER',
'REDIRECT_REMOTE_USER',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_PORT',
'SERVER_SIGNATURE',
'PATH_TRANSLATED',
'SCRIPT_NAME',
'REQUEST_URI',
'PHP_AUTH_DIGEST',
'PHP_AUTH_USER',
'PHP_AUTH_PW',
'AUTH_TYPE',
'PATH_INFO',
'ORIG_PATH_INFO') ;

echo '<table cellpadding="10">' ;
foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;

  	
 ?>
 
 
 
 
 
 <?php 

if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP'] ;
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check if ip is pass from proxy
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'] ;
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR'];
    }

$file = 'ip-data.txt';  //file to which the IP address will be written.

$fp = fopen($file, 'a');
$str = "<br> \r\n[".$ipaddress.'-'. date("Y/m/d").':'. date("h:m").'] -' .$clientDetails->country  ;
$str = $str.'-' .$clientDetails->city .'-' .$clientDetails->region;
$str = $str.'-' .$clientDetails->org;

 fwrite($fp, $str);
echo $str;
fclose($fp);
 ?>
 <?php include('right.php'); ?>