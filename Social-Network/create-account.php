<?php
include('classes/DB.php');

if (isset($_POST['createaccount'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

       $q='SELECT username FROM users WHERE username=:username';
       $parm =  array(':username'=>$username);
	   if ( DB::query($q, $parm)) {
		 echo 'User already exists!';	
		 //header('Location: index.php');    	
		}
			

        if (strlen($username)< 3 || strlen($username)> 32) {
	          echo 'Invalid username ';
        }
		
        if (!(preg_match('/[a-zA-Z0-9_]+/', $username))) {
           echo 'Invalid chars in username';
          
       } 
         if (strlen($password)< 6  ||strlen($password) <=> 60) {
		 
            echo 'Invalid password!';
             header('Location: index.php');
			 
		 }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                                if (!DB::query('SELECT email FROM users WHERE email=:email', array(':email'=>$email))) {

                                        DB::query('INSERT INTO users VALUES (\'\', :username, :password, :email)', array(':username'=>$username, ':password'=>password_hash($password, PASSWORD_BCRYPT), ':email'=>$email));
                                        echo "Success!";
                                } else {
                                        echo 'Email in use!';
                                }
                        } else {
                                        echo 'Invalid email!';
                                }
                        } 
 
 		 
 
?>

<h1>Register</h1>
<form action="create-account.php" method="post">
<input type="text" name="username" value="" placeholder="Username ..."><p />
<input type="password" name="password" value="" placeholder="Password ..."><p />
<input type="email" name="email" value="" placeholder="someone@somesite.com"><p />
<input type="submit" name="createaccount" value="Create Account">
</form>
