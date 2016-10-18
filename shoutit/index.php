<!---

  
https://www.youtube.com/watch?v=QoAoddCNW0s&index=5&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3
http://www.newthinktank.com/2010/04/mysql-statements-in-sql/
http://localhost/ampps/    # Configuration file


http://localhost/phpmyadmin/ # SQL Configuration file


-->
<?php  

  include 'database.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Shout it</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <div id = "container">
   <header> <h1>Shout it </h1> </header>
	<div id="shouts">
	 <div>
	  <li class = "shout"><span>10:15 pm </span>What 1 are you doing </li>
	  <li class = "shout"><span>10:15 pm </span>What 2 are you doing </li>
	  <li class = "shout"><span>10:15 pm </span>What 3 are you doing </li>
	  <li class = "shout"><span>10:15 pm </span>What 50 are you doing </li>
	  <li class = "shout"><span>10:15 pm </span>What 6 are you doing </li>
	  <li class = "shout"><span>10:15 pm </span>What 7 are you doing </li>
	</div>
	</div > 
	<div id = "input">
      <form method="post" action="process.php">
	    <input type="text" name="user"  placeholder="Name">
		<input type="text" name="message"  placeholder="message">
	    </br>
	    <input class="shout-btn" type="submit" value="Shout it">
	  </form>
	</div>
    
  
 </div>
</body>
</html>




