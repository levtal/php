<!---Add question
https://www.youtube.com/watch?v=aejWA9vYEJQ&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3&index=11

http://localhost/phpmyadmin/ # SQL Configuration file


--> 
<?php include 'database.php'?> 
<?php  //
  if (isset($_POST['submit'])){ // If submit button in 'add.php' was pressed
		//Get POST  varible
		$question_number = $_POST['question_number'];
		$question_text = $_POST['question_text'];
		//Choises array
		
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
     <div class = "container">
        <h2>Add a question</h2>
        <form method="post" action="add.php">
          <p>
            <label>Question Number</label><input type="number" name="question_number"/>
          </p>
          <p>
            <label>Question Text</label><input type="text" name="question_text"/>
          </p>
          <p><label>Question Choise #1</label><input type="text" name="choise1"/></p>          
          <p><label>Question Choise #2</label><input type="text" name="choise2"/></p>
          <p><label>Question Choise #3</label><input type="text" name="choise3"/></p>
          <p><label>Question Choise #4</label><input type="text" name="choise4"/></p>
          <p><label>Question Choise #5</label><input type="text" name="choise5"/></p>
          
           <p>
            <label>Correct Choise number</label><input type="number" name="correct_choise"/>
          </p>
          <p>
             
            <input type="submit" name="submit" value="Submit"/>
          </p>
       </form>

     </div>
  
 
  	 
  </main>
  <footer>
  	 <div class = "container">
  	   Copyright  &copy 2017 PHP Quizzer
  	 </div>
  </footer>

</body>
</html>
 



