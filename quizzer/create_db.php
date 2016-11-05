<!--- 
Run this script  once to create the  tables before anything else
Creating two tables:  questions choices.
Creating database is done  in phpadmin, before running this script

https://www.youtube.com/watch?v=49vWRjNGCdE&list=PLFgUdubu2ofjuWm14mwzddzKTo5gqYvB3&index=9
http://localhost/ampps/    # Configuration file
 
 
 
-->
<?php

 include 'sqlcnfg.php'; //$servername $username $password $dbname

 
// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table questions
$sql = "CREATE TABLE questions (
	question_number INT(11) UNSIGNED   PRIMARY KEY,
	text TEXT)";
	 

if ($conn->query($sql) === TRUE) {
    echo "Table questions created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
echo "<br>";

 // sql to create table choices
$sql = "CREATE TABLE choices (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    question_number INT(11) UNSIGNED,
    is_correct TINYINT(1)  default 0, 
    text TEXT 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table choices created successfully";
} else {
    echo "Error creating table: " . $conn->error;
	
}

//  insert questions to  table 'questions'

/*INSERT INTO Table1 (field1, field2, field3) 
   VALUES (1, 2, 3), 
          (1, 2, 4), 
          (2, 1, 9), 
          (2, 3, 8);*/
//quiz  demo http://www.w3schools.com/quiztest/quiztest.asp?qtest=PHP		  
$sql = "INSERT INTO questions(question_number, text)
        VALUES (1, 'What does PHP stand for?'),
		       (2, 'How do you write -Hello World - in PHP')";

if ($conn->query($sql) === TRUE) {
    echo  "<br> Questions inserted into question table successfully";
} else {
    echo "<br> Error in insert into question table: " . $conn->error;
}


//  choices
$sql = "INSERT INTO choices( question_number,  is_correct,  text)
        VALUES   (1,1,'PHP: Hypertext Preprocessor'),
		         (1,0,'Personal Hypertext Processor'),
				 (1,0,'Private Home Page'),
				 (1,0,'Private local Page'),
				 
				 (2,1,'echo Hello World '),
				 (2,0,'Document.Write(Hello World) '),
				 (2,0,'Hello World')
				 ";

if ($conn->query($sql) === TRUE) {
    echo  "<br> Choices inserted into choices table successfully";
} else {
    echo "<br> Error in insert into choices table: " . $conn->error;
}
echo "<br>"	;	
echo $sql;
$conn->close();
?> 


