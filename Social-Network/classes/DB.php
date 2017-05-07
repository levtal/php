<?php

  
 
class DB {
	
	
	
  private static function connect() {
	// Change next 4 lines according to your data base  
	 $db_host = "localhost"; 
     $db_username = "root";  
     $db_pass = "";  // ## unbunto::"mysqlmysql" , vista::"", kali ::"" 
     $db_name = "SocialNet"; 
     ///////////////////////////////////////////////
 
     $hostdb = 'mysql:host='. $db_host.';';
     $hostdb = $hostdb . 'dbname='.$db_name.';charset=utf8';
     $pdo = new PDO( $hostdb, $db_username, $db_pass);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
   }

  public static function query($query, $params = array()) {
     $statement = self::connect()->prepare($query);
     echo " query = ". $query."<br>";
	 //echo " params     <br>";
	 echo "<br><pre>".print_r($params, true) . "</pre>";
	 $statement->execute($params);
     if (explode(' ', $query)[0] == 'SELECT') {
           $data = $statement->fetchAll();
           return $data;
     }
  }
}//class DB

/*  $db_host = "localhost"; 
$db_username = "root";  
$db_pass = "";  // ## unbunto::"mysqlmysql" , vista::"", kali ::"" 
$db_name = "store";

$db_host = "mysql.hostinger.co.il";
$db_username =  'u643891464_vaz';  
$db_pass = "paseri";  
$db_name = 'u643891464_store'; 
  */
  
  ?>