<!---
https://www.youtube.com/watch?v=49vWRjNGCdE&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3&index=9<!DOCTYPE html-->
<?php include 'database.php' ?>

<?php 
  // Get  total number of questions
   $query = "SELECT * FROM questions" ;
   $results = $mysqli->query($query)  
                or die($mysqli->error._LINE_);
	$totel =  $results->num_rows;			
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
  	    <h2>Test your knowledge </h2> 
  	    <p> This is a multiple choise quiz</p>
  	    <ul>
  	         <li><strong>Number of questions </strong>
			       <?php echo $totel ?>
			 </li>
  	         <li><strong>Type </strong>Multiple choise</li>
  	         <li><strong>Estimated time: </strong>
			       <?php echo $totel * 0.5 ?> Minutes
			 </li>
  	    </ul>
  	    <a href="question.php?n=1" class="start">Start Quiz</a>
  	</div>
  </main>
  <footer>
  	 <div class = "container">
  	   Copyright  &copy 2017 PHP Quizzer
  	 </div>
  </footer>

</body>
</html>
 



 