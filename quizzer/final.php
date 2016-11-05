 <!---
 https://www.youtube.com/watch?v=9K5b3fvGfRA&spfreload=10 -->
<?php session_start(); ?>

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
  	    <h2>Your  are done </h2>
        <p> Congrats You have completed the test</p>
        <p> Finel score :<?php echo $_SESSION['score'];  ?></p>
        <a href="question.php?n=1" class="start">Take again</a>
     </div>
  </main>
  <footer>
  	 <div class = "container">
  	   Copyright  &copy 2017 PHP Quizzer
  	 </div>
  </footer>

</body>
</html>
 



 