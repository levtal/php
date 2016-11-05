 <!--- 
 https://www.youtube.com/watch?v=09ck8_YD3_E&index=10&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3
 
 lesson 11  
 -->
<?php include 'database.php'?>
<?php session_start(); ?>

<?php

 //Get  question number
 $number = (int)$_GET['n']; //the 'n' from /..../question.php?n=...
 
 // Get total number of  questions 
 $query = "SELECT * FROM  questions";
 $result = $mysqli->query($query)  
              or  die($mysqli->error._LINE_);
 $total =  $result->num_rows ;




         //Get   question  number 'n='
 $query = "SELECT * FROM questions
           WHERE question_number = $number" ;
  
 $result = $mysqli->query($query)  
                or  die($mysqli->error._LINE_);
  
 $question =  $result->fetch_assoc();
 
        //Get   choices for question  number 'n='
 $query = "SELECT * FROM choices
           WHERE question_number = $number" ;
  
 $choices = $mysqli->query($query)  
                or  die($mysqli->error._LINE_);
  
 
 
?> 
<html>
<head>
	<title>Question numner: <?php echo $number ?></title>
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
  	 <div class = "current">Question  <?php echo $question['question_number']; ?> of 
            <?php echo $total ; ?>
	   <p class = "question"> 
	       <?php echo $question['text']; ?>
	   </p>
	   <form method = "post" action= "process.php">
	    <ul class = choices>
		 <?php while($row = $choices->fetch_assoc()):?>			
		      <li>  <input name="choise" type="radio" 
		                     value=<?php echo $row['id']; ?>/>
		            <?php echo $row['text'] ?>	
		      </li>
		 <?php endwhile;?>
		</ul>
		 <input  type ="submit"  value="submit"/>
		 <input  type ="hidden"  name="number" 
		   value="<?php echo $number;?>" />
		   
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
 



 