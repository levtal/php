<?php 
class User {
	
   private $db;
   
 public function __construct(){
	$this->db= new Database;  
  }
  
  
 public function register($data){
	 $sql='INSERT INTO users(name, email, avatar, username, password, about, last_activity)
	    VALUES(:name, :email, :avatar, :username, :password, :about, :last_activity)'; 
	
	$this->db->query($sql); 
	$this->db->bind(':name',$data['name']);
	$this->db->bind(':email',$data['email']);
	$this->db->bind(':avatar',$data['avatar']);
	$this->db->bind(':username',$data['username']);
	$this->db->bind(':password',$data['password']);
	$this->db->bind(':about',$data['about']);
	$this->db->bind(':last_activity',$data['last_activity']);
	
	
	$result = $this->db->execute();
	
	if($result){
		return true;
	}else{
		return false;
	} 
 }
 
  
 
 //Upload user avatar
 
 public function uploadAvatar(){
  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = (explode(".", $_FILES["avatar"]["name"])); //Array ( [0] => file name   [1] => extension)

	$extension = end($temp);//extension 
    /*  	
	 $_FILES =  Array  (
                 [avatar] => Array  (
                          [name] => South2.png
                          [type] => image/png
                          [tmp_name] => C:\xampp\tmp\php823C.tmp
                          [error] => 0
                          [size] => 34035
        )
     )
	*/
     
    
 if ((($_FILES["avatar"]["type"] == "image/gif")
		|| ($_FILES["avatar"]["type"] == "image/jpeg")
		|| ($_FILES["avatar"]["type"] == "image/jpg")
		|| ($_FILES["avatar"]["type"] == "image/pjpeg")
		|| ($_FILES["avatar"]["type"] == "image/x-png")
		|| ($_FILES["avatar"]["type"] == "image/png"))
		&& ($_FILES["avatar"]["size"] < 50000)
		&& in_array($extension, $allowedExts) ){
		  
		  if ($_FILES["avatar"]["error"] > 0) {
               redirect('register.php', $_FILES["avatar"]["error"],'error');
          }else{
			 if (file_exists("images/avatar/". $_FILES["avatar"]["name"])){
				 
			    redirect('register.php', 'Avatar File already exists','error');
         
			}else{
			  move_uploaded_file($_FILES["avatar"]["tmp_name"],"images/avatar/". $_FILES["avatar"]["name"]);
              return true;
			 }
	    }
  }else{
		redirect('register.php', 'Invaild Avatar file type','error');
   }
   
 }
 
 public function login($username,$password){
	$sql= "SELECT * FROM users
	       WHERE username = :username
		   AND password = :password";

    $this->db->query($sql);
    $this->db->bind(':username', $username);
    $this->db->bind(':password', $password);	
	$row= $this->db->single();
	
   //Check rows
	if($this->db->rowCount()>0){
		$this->setUserData($row);
		return true;
	}else{
		return false;
	}
 }//login
 
 private function setUserData($row){
	
	$_SESSION['is_logged_in'] = true; 
	$_SESSION['user_id'] = $row['id']; 
    $_SESSION['username'] = $row['username'];
    $_SESSION['name'] = $row['name'];	

 }//setUserData
 
public function logout() {
	
	unset($_SESSION['is_logged_in'])  ; 
	unset($_SESSION['user_id'])  ; 
    unset($_SESSION['username'])  ;
    unset($_SESSION['name'])  ;
    return true;	
	
 
 } 
 
 public function getTotalUsers() {
	$sql= "SELECT * FROM users";
    $this->db->query($sql); 
	$rows =  $this->db->resultset(); 
    $count=$this->db->rowCount(); 

	return $this->db->rowCount(); 
 }
 
 
 
 
 
}
?>  