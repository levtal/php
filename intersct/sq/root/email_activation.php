

<?php
     echo "Start email process."."<br>";
    ini_set( 'display_errors', 1 );
    
    error_reporting( E_ALL );
    
    $from = "vaz@vazlavgtt.esy.es";
    $to = "$e";
    
    
    $subject = "Checking PHP mail";
    
    $message = "PHP mail works just fine";
    
    $headers = "From:" . $from;
    
    mail($to,$subject,$message, $headers);
    
    echo "The email message was sent to ==> ".  $to;
?>







<?php
     /*  echo "Email process to." ."$e"  ;

	     $to = "$e";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
		 
		 $from = "vaz@vazlavgtt.esy.es";
         $header .= "From:" . $from ." \r\n";
     	  
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
           echo "The email message was sent to ==> ".  $to;
   		 
         }else {
            echo "Message could not be sent...";
         }
    */  ?>











<?php
    /* echo "Start email process."."<br>";
    ini_set( 'display_errors', 1 );
    
    error_reporting( E_ALL );
     $to = "$e";
    $from = "vaz@vazlavgtt.esy.es";
    
   // $to = "talmarkov@yahoo.com";
    
    $subject = "Checking PHP mail";
    
    $message = "PHP mail works just fine";
    
    $headers = "From:" . $from;
    
    mail($to,$subject,$message, $headers);
    
    echo "The email message was sent to ==> ".  $to;*/
?>

<?php
// Email the user their activation link
  /*  echo "Start email process."."<br>";
    ini_set( 'display_errors', 1 );
    
    error_reporting( E_ALL );
    $to = "$e";							 
    $subject = 'yoursitename Account Activation';
    $from = "vaz@vazlavgtt.esy.es"; ///remote email
      
    $subject = "Checking PHP mail";
    
  	$my_site_url="http://vazlavgtt.esy.es";
	
	$message= "yoursitename Message \r\n\n";
	
    $message1 = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>yoursitename Message</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="http://www.yoursitename.com"><img src="http://www.yoursitename.com/images/logo.png" width="36" height="30" alt="yoursitename" style="border:none; float:left;"></a>yoursitename Account Activation</div><div style="padding:24px; font-size:17px;">Hello '.$u.',<br /><br />Click the link below to activate your account when ready:<br /><br /><a href="http://www.yoursitename.com/activation.php?id='.$uid.'&u='.$u.'&e='.$e.'&p='.$p_hash.'">Click here to activate your account now</a><br /><br />Login after successful activation using your:<br />* E-mail Address: <b>'.$e.'</b></div></body></html>';
     
    $headers = "From: $from \r\n";
  //  $headers .= "MIME-Version: 1.0\r\n";
   // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 
 

//   $headersfrom .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 



 $r=mail($to, $subject, $message, $headers);
		if ($r){
			  echo " Email result = [" .$r . "]<br><br>";
			 echo "signup_success <br><br>";
			 echo "The email message was sent to ==> ".  $to."<br>";
			 echo "  subject  <br>". $subject    ."<br>";
			 echo "  from <br>". $from    ."<br>";
			 echo " headers <br>". $headers    ."<br>";
			 echo " message <br><br>". $message    ."<br>";
			
	    }
		else {echo " Email result = " .$r;}
    echo "The email message was sent to ==> ".  $to;*/
?>


<?php /*		
		
		 
       
       
		$r=mail($to, $subject, $message, $headers);
		if ($r){
			 echo "signup_success <br><br>";
			 echo "The email message was sent to ==> ".  $to."<br>";
			 echo "  subject  <br>". $subject    ."<br>";
			 echo "  from <br>". $from    ."<br>";
			 echo " headers <br>". $headers    ."<br>";
			 echo " message <br><br>". $message    ."<br>";
	    }
		else {echo " Email result = " .$r;}
		exit();
		
*/ ?>			