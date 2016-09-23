<!-- Pt 1
https://www.youtube.com/watch?v=l21g8dJmD7U&list=PL21E20F9A122DC853&index=1

http://www.newthinktank.com/2010/11/web-design-and-programming-pt-1-php/
 -->
 <html>
<head>
<title><?php echo 'Website Title';?></title>
</head>
<body>
<?php

// You can use short tags but it is not recommended doesn’t work in 6
# You can also comment code like this
/* Here is a
multiline comment
*/
echo '<p>Random Text</p>';
print('<p>You can print with braces</p>');
print '<p>or without them!</p>';

$randVar ="Cats";
 
echo "<p>",$randVar, " are funny</p>";
printf("<p>My name is %s I’m %d years old and
pi is equal to %.2f</p>", "Derek", 35, 3.14);

// Variables must start with a $ then letter or _ and then numbers
// Variables are case sensitive & don’t require definition before use

$boolEx1 = false; // 0 or false equals false
$boolEx2 = 1; // true equals any number but 0

$intEx1 = -234; // Max size normally 2^31 or 2^63

$floatEx1 = 3534.14;

echo "<p>Cost: $",number_format($floatEx1,2),"</p>";

// Arithmetic Operators: + – * / % ++ --

$firstName = "Doctor";
$lastName = "Who";

$wholeName = $firstName . ' ' . $lastName;
printf("<p>His name is %s</p>",$wholeName);

define('ACONSTANTVAR', 2345);

echo "A constant is equal to " . ACONSTANTVAR . "<br />";

echo "How do quotes differ $wholeName<br />";
echo 'How do quotes differ $wholeName<br />';

/* Escaped Characters in double quotes \” \’ \\ \n \r \t \$ */

$float2Int = (int) $floatEx1;
echo $float2Int, "<br />";

/*  Casting  is  done with 
(array)
(bool)
(int64)
(object)
(float)
(double)
(string)
*/

$strNum = "28";
echo $strNum * $floatEx1, "<br />";

echo gettype($strNum), "<br />";
echo is_string($strNum), "<br />";

/* is_array() is_bool() is_float() is_integer() is_null() is_object()*/

?>
</body>
</html>