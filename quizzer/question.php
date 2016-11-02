 <!--- 
 https://www.youtube.com/watch?v=09ck8_YD3_E&index=10&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3
 
 lesson 11 5:47
 -->
<?php include 'database.php' 

?>
<html>
<head>
	<title>PHP Quizzer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
  <header> 
     <div class = "container">
        <h1>PHP Quizzer </h1>
     </div>
  </header>
  <main>
  	<div class = "container">
  	 <div class = "current">  	     Question 1 of 5
	   <p class = "question"> 
	       What is php stands for
	   </p>
	   <form method = "post" action= "process.php">
	     <ul class = choices>
		    <li> <input name="choise" type="radio" value="1"/>asad</li>
		    <li> <input name="choise" type="radio" value="1"/>fdfdfd</li>
		    <li> <input name="choise" type="radio" value="1"/>gddf</li>
		    <li> <input name="choise" type="radio" value="1"/>dfdfdfd</li>
		
		 </ul>
		 <input  type ="submit"  value="submit">
	   </form>
  	 </div> 
  	</div>
  </main>
  <footer>
  	 <div class = "container">
  	   Copyright  &copy 2017 PHP Quizzer
  	 </div>
  </footer>

</body>
</html>
 



 