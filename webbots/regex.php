<?php

//page 50
// USAGE: preg_replace(pattern, replacement, subject);
// If the pattern is found, the subject
// "This is the test string"
// becomes
// "This is the new string"
$resulting_string = preg_replace("/test/", "new", "This is the test string");

//preg_match(pattern, subject);
//determine if the defined pattern string exists in the subject string
 
// $result = 1 (true) if pattern found in subject.
// $result = 0 (false) if pattern is not found in subject.
$result = preg_match("/test/", "This is the test string");


//preg_match_all(pattern, subject, result_array)
//returns an array off all  instances in the subject that match pattern.

// USAGE: preg_match_all(pattern, subject, result_array);
// $result = 1 (true) if pattern found in subject.
// $result = 0 (false) if pattern is not found in subject.
// $result_array = all instances in subject that match the pattern.
$result = preg_match_all("/test/", 
                        "This is a test of the test string",
						$result_array);
						
//preg_split(pattern, subject) 
//facilitates splitting the subject string
// at the point of the  pattern string.  

// USAGE: $result_array = preg_split(pattern, subject);
// If the pattern is found in the subject, the subject is split at 
//the pattern
// $result_array[0] = "This is the "
// $result_array[1] = " string"
$result_array = preg_split("/test/", "This is the test string");
/*
preg_replace() has similarities to PHP built-in function str_replace().
 preg_split() has similarities to PHP built-in function substr().
 preg_match() has similarities to PHP built-in function strstr().
 preg_match_all() has similarities to parse_array()in LIB_parse
*/

//parse all the numbers from a string 
//$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\d/", $subject_string , $matches_array);
# RESULT: $matches_array = Array ( [0] => 1 [1] => 2 [2] => 9 )

// occurrence of a three-digit number,  
$subject_string = "There are 129 stories about Tim and another 3129 about Tom";
preg_match_all("/\d\d\d/", $subject_string , $matches_array);
# RESULT: $matches_array = Array ( [0] => 129 [1] => 312 )


//parse all numbers, regardless of length.
$subject_string = "There are 129 stories about Tim and another 3129 about Tom";
preg_match_all("/\d+/", $subject_string , $matches_array);
# RESULT: $matches_array = Array ( [0] => 129 [1] => 3129 )


// parse all three-letter words.	
$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\b\D\D\D\b/", $subject_string , $matches_array);
# RESULT: $matches_array = Array ( [0] => are [1] => Tim [2] => and [3] => Tom )					
// \b =word boundary pattern . If this was not added to the pattern, 
//the returned array would have  also included partial words, 
//like The in the first word There


// the same resultina diffrent  way
$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\b\D{3}\b/", $subject_string , $matches_array);
# RESULT: $matches_array = Array ( [0] => are [1] => Tim [2] => and [3] => Tom )


//dot (.) wildcard, which matches anything  
//match on either Tim or Tom  
$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\bT.m\b/", $subject_string , $matches_array);
# RESULT: $matches_array = Array ( [0] => Tim [1] => Tom )
//The dot will not match the character that indicate a new line.
// unix \n.  And, in Windows \r\n.

//If you specifically wanted to match on either of “ Tim ” or “ Tom ” ,
// you should use the OR  
$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all((\bTim|Tom\b), $subject_string , $matches_array);
# RESULT: $matches_array = Array ( [0] => Tim [1] => Tom )

page 55
///A more direct (andharder to read) pattern is:
$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\bT(i|o)m\b/", $subject_string , $matches_array);
# RESULT: $matches_array = Array ( [0] => Tim [1] => Tom )

?>