 <!--- init.php -->
 
 <?php   
  //Start session
  
  session_start();
  
  // Include Configuration
  
  require_once('config/config.php');
  
  
  
  // Hellper function file
   require_once('helpers/system_helper.php');
   require_once('helpers/format_helper.php');
   require_once('helpers/db_helper.php');
  //autoload classes
  function __autoload($class_name){
	require_once('libraries/'.$class_name.'.php'); 
   }
  
 ?>
 