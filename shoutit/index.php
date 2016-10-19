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
	<meta name="description" content="checkt  ghf" />
	<meta name="keywords" content="" />
	<meta name="shout" content="index,follow" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <div id = "container">
   <header> <h1>Shout it </h1> </header>
	<div id="shouts">
	 <div>
	  <ul>
	 
	    <?php 
		    $query = "SELECT * FROM shouts";
            $shouts = mysqli_query($con,$query);
    		while ($row = mysqli_fetch_assoc($shouts)) { ?>
           <li class = "shout">
		     <span><?php echo $row['time']; ?></span>
			 <?php 
			    echo "<strong>" . $row['user'] . "</strong>";
			    echo $row['message']; ?> 
		   </li>
        
		<?php  }?>
	  
	    </ul>
	</div>
	</div > 
	<div id = "input">
      <form method="post" action="process.php">
	    <input type="text" name="user"  placeholder="Name">
		<input type="text" name="message"  placeholder="message">
	    </br>
	    <input class="shout-btn" name= "submit" type="submit" value="Shout it">
	  </form>
	</div>
    
  
 </div>
</body>
</html>




