<?php
include('./classes/DB.php');
function isLoggedIn() {
  if (isset($_COOKIE['SNID'])) {
    $q = 'SELECT user_id FROM login_tokens WHERE token=:token';
    $param = array(':token'=>sha1($_COOKIE['SNID']));
    //echo  "params = ". $param[':token'] ."<br>";var_dump($param);
    if (DB::query($q,$param)) {
	  $q = 'SELECT user_id FROM login_tokens WHERE token=:token'; 
	  $userid = DB::query( $q,$param)[0]['user_id'];
      if (isset($_COOKIE['SNID_'])) {// Is the second cookie is set
                                return $userid;
      } else {// Second cookie is not set so create cookie for 3  days 
            $cstrong = True;
            $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
            DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$userid));
            DB::query('DELETE FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])));
            setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
           //The next cookie is for 3  days only
		   setcookie("SNID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
           return $userid;
        }
    }
   }
 return false;
}//isLoggedIn()


if (isLoggedIn()) {
        echo '<b>Logged In</b><br><br>';
        echo 'userid = '.isLoggedIn().'<br><br>';
} else {
        echo '<b>Not logged in</b><br><br>';
}
?>