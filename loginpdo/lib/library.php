<?php

include('lib/DB.php');

class DemoLib{

    /*  Register New User */
 public function Register($name, $email, $username, $password) {
	 	
     $enc_password = hash('sha256', $password);
	 $parm=array(':name'=>$name, 
		        ':email'=>$email, 
	            ':username'=>$username,
				':password'=>$enc_password
		     );
 	$q="INSERT INTO users(name, email, username, password) VALUES ";  
    $holders = '(:name,:email,:username,:password)';
    $sql = $q. $holders;
    $data = DB::query($sql, $parm);
    return $data;
 }

    /* Check Username*/
  public function isUsername($username)  {
    
   $parm=array(':username'=>$username);
   $q="SELECT user_id FROM users WHERE username="; 
   $holders = ':username';
   $sql = $q. $holders;
   $data = DB::query($sql, $parm);
   $cnt = count($data);  
    if ($cnt > 0) {
                return true;
            } else {
                return false;
    }
 }

    /*Check Email  */
 public function isEmail($email){

   $parm=array(':email'=>$email);
   $sql="SELECT user_id FROM users WHERE email=:email"; 
   $data = DB::query($sql, $parm);
   $cnt = count($data);  
   
   echo $cnt;
   if ($cnt > 0) {
                return true;
            } else {
                return false;
    }

}

    /*Login*/
 public function Login($username, $password)  {
    
      $enc_password = hash('sha256', $password);
	 $parm=array(':username'=>$username,
				':password'=>$enc_password
		     );
 	$sql="SELECT user_id FROM users WHERE (username=:username OR email=:username) AND password=:password";  
    //$holders = '(:name,:email,:username,:password)';
    //$sql = $q. $holders;
    $data = DB::query($sql, $parm);
    //$cnt = count($data);  
    return $data[0]['user_id'];
 }

    /** get User Details */
 public function UserDetails($user_id)    {
    $parm=array(':user_id'=>$user_id);
	$sql= "SELECT user_id, name, username, email FROM users WHERE user_id=:user_id";
    $data = DB::query($sql, $parm); 
    $cnt = count($data);
    if ($cnt > 0) {
		//echo "<br><pre>".print_r($data, true) . "</pre>";
        
		return  $data;
		} 
/*   try {
            $db = DB();
            $query = $db->prepare("SELECT user_id, name, username, email FROM users WHERE user_id=:user_id");
            $query->bindParam("user_id", $user_id, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return $query->fetch(PDO::FETCH_OBJ);
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }*/
    
}
}