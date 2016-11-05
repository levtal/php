  <!---
https://www.youtube.com/watch?v=gCDyR_6RBwY&index=16&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3 
  12  18:55-->
 
<?php include 'database.php' ?>

<?php session_start(); ?>

 <?php
      //Check  to see if  score is set
	if (!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
		echo 'not set=' . $_SESSION['score'];
	}
   	if ($_POST){  
	  $number = $_POST['number'];
	  $selected_choise =  $_POST['choise'];
	  $next =  $number+ 1;// Update next question number
	   // Get total number of  questions 
	  $query = "SELECT * FROM  `questions`";
      
      $result = $mysqli->query($query)  
                or  die($mysqli->error._LINE_);
      $total =  $result->num_rows;

      $correct_choise=$row['id']; 
     

	  
	  
	   // Get coorect choise
	  $query = "SELECT * FROM   `choices`  
	            WHERE question_number = $number  AND is_correct = 1";
      
	  $result = $mysqli->query($query)  
                or  die($mysqli->error._LINE_); //$mysqli defind in 'database.php'
	  $row =  $result->fetch_assoc();				
      
	  $correct_choise=$row['id']; //Get the correct choise from the database
	  // echo "type correct_choise = " .  gettype($correct_choise);
	  // echo "type selected_choise = " .  gettype($selected_choise);
	 if((int)$correct_choise == (int)$selected_choise) { //  the coorrect  answer was chosen
		//echo  "correct_choise = " . $correct_choise . "  selected_choise = " .  $selected_choise;
		$_SESSION['score']++;
	}
     
	//echo  " correct = " . $correct_choise . "  selected = " .  $selected_choise;
	 
	if($number == $total) {  // 
		header("Location: final.php"); //This the last question
		exit();
	}else{
		header("Location: question.php?n=$next"); 
	 
	}
   }
  	
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
  	 
  </main>
  <footer>
  	 <div class = "container">
  	   Copyright  &copy 2017 PHP Quizzer
  	 </div>
  </footer>

</body>
</html>
