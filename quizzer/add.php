<!---Add question
https://www.youtube.com/watch?v=aejWA9vYEJQ&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3&index=11
15:01
http://localhost/phpmyadmin/ # SQL Configuration file


--> 
<?php include 'database.php'?> 
<?php  //
  if (isset($_POST['submit'])){ // If submit button in 'add.php' was pressed
	
	     //Get POST  varible
	$question_number = $_POST['question_number'];
	$question_text   = $_POST['question_text'];
	
		//Choices array
	$choices = array();
	$choices[1] = $_POST['choise1'];
	$choices[2] = $_POST['choise2'];
	$choices[3] = $_POST['choise3'];
	$choices[4] = $_POST['choise4'];
	$choices[5] = $_POST['choise5'];
	
	$correct_choise  = $_POST['correct_choise'];
	
	    //Insert question query
	$query = "INSERT INTO `questions`(question_number,text) 
              VALUES ('$question_number', '$question_text')";
        
	$insert_row = $mysqli->query($query) or 
                	die($mysqli->error );	
	              
    	//Validate   insert_row
    if ($insert_row){ //Insert the choices
        foreach ($choices as $choice => $value){ 
			// $choice = number of choise  $value = text of choice
	        if (strcmp($value,'')){// not empty answer
		        if ($correct_choise == $choice){ //This is  the correct choise
			    $is_correct = 1;
				}else {  //This is  not the correct choise
					 $is_correct = 0;
				} 
				$query = "INSERT INTO `choices` (question_number,is_correct,text) 
                                       VALUES ($question_number,$is_correct,'$value')";
                $insert_row = $mysqli->query($query)  or  die($mysqli->error);
                
				if ($insert_row){ // Isert was sucssesful
		            continue;
	            }else{
				   die('Error *=> ('. $mysqli->errno . ')' . $mysqli->errno);
				} 
		    } 
		} //foreach
	$msg = 'Question has been add';
	} //if ($insert_row) 
  }//  if (isset($_POST['submit']))
  /* Get total number of questins 	*/
  $query = "SELECT * FROM  questions";
  $questions = $mysqli->query($query)  
              or  die($mysqli->error._LINE_);
  $total =  $questions->num_rows ;
  $next  =  $total+1; // Number  of next  question
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
		<?php 
		if(isset($msg)){
			echo  '<p>' . $msg . '</p>';
		}
		?>
        <form method="post" action="add.php">
          <p>
            <label>Question Number</label>
			<input type="number" 
			       value =  "<?php echo $next; ?>" 
				   name="question_number"/>
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
 



