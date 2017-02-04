 
<?php   
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'root');
    define('DB_PASS', '');  ## unbunto::"mysqlmysql" , vista::"", kali ::"" 
    define('DB_NAME', 'gkolzone');
  
  /* 
     define('DB_HOST' , 'mysql.hostinger.co.il');
     define('DB_USER' , 'u643891464_moggg'); 
     define('DB_PASS' , 'paseri');
     define('DB_NAME' ,'u643891464_quizz'); 
  */
   

$db_conx = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
	echo "Successful database connection!";
}

 define('SITE_TITLE', 'Welcome to Gkol - Zone');
  define('BASE_URI', 'http://'.$_SERVER['SERVER_NAME'].'/prj//intersct/afblg/');
?>