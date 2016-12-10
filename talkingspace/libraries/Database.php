<?php
 //http://culttt.com/2012/10/01/roll-your-own-pdo-php-class/
 
  
class Database{  // DB_... defined in   config.php 
    private $host      = DB_HOST;
    private $user      = DB_USER;
    private $pass      = DB_PASS;
    private $dbname    = DB_NAME;
 
    private $dbh;
    private $error;
    private $stmt;
	
    public function __construct(){
        // Set DSN  to MySQL 
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // Set options  connection type to the database to be persistent.
        //ERRMODE_EXCEPTION will throw an exception if an error occurs
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
       
		// Create a new PDO instanace
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }
        // Catch any errors
        catch(PDOException $e){
            $this->error = $e->getMessage();
			
            echo '<b>ERROR!  in Database.php<br><br>';
			//echo "message =" .$e['message:protected']." <br><br>" ;
			echo "Message =".  $e->getMessage()." <br><br>";
			
            print_r( $e );
        }
    }
	/*Prepare

  prepare function allows you to bind values into your SQL statements. This is important because it takes away the threat of SQL Injection because you are no longer having to manually include the parameters into the query string.
 
	*/
 public function query($query){
    $this->stmt = $this->dbh->prepare($query);
 }
 
 /*Bind the inputs with the placeholders we put in place.
  In order to prepare our SQL queries*/
 public function bind($param, $value, $type = null){
    /*Param= value  in our SQL statement, example name.
      Value=  actual value , example “John Smith”.
      Type =  parameter  type   , example string.
    */
 if (is_null($type)) {
  switch (true) {
    case is_int($value):
      $type = PDO::PARAM_INT;
      break;
    case is_bool($value):
      $type = PDO::PARAM_BOOL;
      break;
    case is_null($value):
      $type = PDO::PARAM_NULL;
      break;
    default:
      $type = PDO::PARAM_STR;
  }
 }
 $this->stmt->bindValue($param, $value, $type);
}
 
 public function execute(){
    return $this->stmt->execute();
}

public function resultset(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
}
 

 /* returns a single record from the database. Again,
 first we run the execute method, then we return the single result.  
 */
 public function single(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
 } 
 
 
 /*Returns number of effected rows from the previous statement*/
 public function rowCount(){
    return $this->stmt->rowCount();
  }
 
 /*returns the last inserted Id as a string*/
  public function lastInsertId(){
    return $this->dbh->lastInsertId();
 }


/*Transactions allows you to run multiple changes to a database all in one batch to ensure that your work will not be accessed incorrectly or there will be no outside interferences before you are finished

  To begin a transaction*/ 
public function beginTransaction(){
    return $this->dbh->beginTransaction();
}

 /*To end a transaction*/ 
public function endTransaction(){
    return $this->dbh->commit();
} 
/*To cancel a transaction and roll back your changes*/
public function cancelTransaction(){
    return $this->dbh->rollBack();
}
 
 /*Dumps the the information that was contained in the Prepared Statement.*/
 public function debugDumpParams(){
    return $this->stmt->debugDumpParams();
}
 
 
}

?>


         