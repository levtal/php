<!--- 
https://www.youtube.com/watch?v=9ywkQ9aGhVo
http://www.newthinktank.com/2010/04/mysql-statements-in-sql/
http://localhost/ampps/    # Configuration file


http://localhost/phpmyadmin/ # SQL Configuration file

MySQL Username:root


Default root password = "mysql"


mysql -u root -p
-->
  <html>
<head>
<title><?php echo "Object Oriented Programming";?></title>
</head>

<body>mysql -u root -p

<?php

# Error in program is known as an exception
# If you set up code to handle errors, these exceptions are thrown to that code
# The code you use to protect against errors catches the exception and makes everything right

# Turn error reporting on E_ALL will warn on all errors and warnings
# error_reporting (0) would shutoff error reporting
# E_STRICT will notify you if your writing non-optimized code
error_reporting (E_ALL);

class errorWrangler extends Exception {
  function errorReport(){
	$error = "Error: "; 
	$error = $error. $this->getMessage();
	$error = $error. "<br />"; 
	$error = $error. "File = ".$this->getFile(); 
	$error = $error. "<br />"; 
	$error = $error. "Line = ".$this->getLine();
	$error = $error. "<br />";
	return $error;
  }
}

$num1 = 0;
$num2 = 0;

try {
   if($num2 == 0) {
        throw new errorWrangler("Can't divide by zero");
    }
 elseif($num2 == 1){
   throw new Exception("Don't divide by 1");
  }
echo "$num1 divided by $num2 is " . $num1/$num2;
}

catch (errorWrangler $e){
	echo $e->errorReport();// permisson  problem
	error_log($e->errorReport(), 3, "errorlog.txt");//3= text file
	die('Something bad happened');
 }

catch (Exception $e)
{
echo $e->getMessage();
}

/*
# An error handler function 1
function error_wrangler ($num1, $num2)
{
if($num2 == 0)
{
throw new Exception("Can’t divide by zero");
}
return true;
}

try
{
error_wrangler($num1, $num2);
echo "$num1 divided by $num2 is " . $num1/$num2;
}

catch(Exception $e)
{
echo "Error: " . $e->getMessage() . "<br />" . $e->getFile() . "<br />" . $e->getLine() . "<br />";
}
*/

?>

</body>
</html>