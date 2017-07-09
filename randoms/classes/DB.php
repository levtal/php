<?php
 
include('cfg.php');
class DB {
	
  public static function echoSQlParms($query,$params){
     echo "DB.php Output of  function query";
	 echo "<br>----------------------------<br>";
	 echo "<br><b>". $query."</b><br>";
	 
	 echo "<br><pre>".print_r($params, true) . "</pre>";
   
 }
 
  public static function echoResults($data,$statement){ 
       	echo "<br><pre>".print_r($data, true) . "</pre>"; 
         echo "<b>Number of Items</b> = ".$statement->rowCount();
        
		echo "<br> END Output of  function query <br>";
        echo "---------------------------------<br><br>"; 
  }

 
 private static function connect() {
  try { 
	$hostdb = 'mysql:host='. DB_HOST  .';';
    $hostdb = $hostdb . 'dbname=' . DB_NAME.';charset=utf8';
    $pdo = new PDO( $hostdb, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
	}
  catch (PDOException $e){
    	exit ("<b>Error in function connect: </b>".$e->getMessage());
	}
 }//connect

  public static function query($query, $params = array()) {
    try { 
   $statement = self::connect()->prepare($query);
    //self::echoSQlParms($query,$params);//echo query and parmetrs
	 $statement->execute($params);
     if (explode(' ', $query)[0] == 'SELECT') {
        $data = $statement->fetchAll();
	    //self::echoResults($data,$statement);
       	 
        return $data;
     }
	}//try 
	catch (PDOException $e){
    	exit ("<b>Error in function query: </b>".$e->getMessage());
	}
  }
}//class DB
?>