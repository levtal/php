<!---  https://www.youtube.com/watch?v=Q_FvLcC2_Vg
    How to Create Functions
    How to work with Function Attributes (Variables)
    How to Pass Multiple Attributes to and from Functions
    What Does Scope Mean (Local vs. Global)
    What is Recursion

-->
<html>
<head>
   <title><?php echo "Arrays";?></title>
</head>

<body>

<?php
# You create functions to incapsulate tasks that you must perform repetitively
echo rand(1,100) . "<br /><br />";

# Pass values to a function and then return the result
function addNumbers($num1,$num2){
   return $num1 + $num2;
}

addNumbers(1,2);

# Explaining Scope : You can’t change global variables in functions
function editGlobal($globalVariable){
   $globalVariable = 200;
}

$globalVariable = 120;
echo $globalVariable . "<br /><br />";
editGlobal($globalVariable);
echo $globalVariable . "<br /><br />";

# Changing Global variables by passing a reference to a variable
function editGlobal2(&$globalVariable2){
   $globalVariable2 = 200;
}

$globalVariable2 = 120;
editGlobal2($globalVariable2);
echo $globalVariable2 . "<br /><br />";

# Calculate tip using a default of 15%
function getTip($costSent, $tipSent=.15) {
   echo "$" . $costSent * $tipSent . "<br /><br />";
return;
}

$cost = 100;
getTip($cost);

# Sending multiple values
function breakItUp($userInfo){
    $userArray = explode(",", $userInfo);
    return $userArray;
}

$userStr = "Derek,123 Main St,Pittsburgh,PA";
$userArray = breakItUp($userStr);
foreach($userArray as $customer){
	echo $customer . "<br />";
}
echo "<br />";

# Demonstrate Recursion by calculating factorials 1 * 2 * 3
function factorial($number) {
  if ($number == 1) {
  return 1; # kill switch for the recursive function
  }  else{
    return $number * factorial($number - 1);
}
}

echo factorial(3);

/* Explaining how recursion works
function factorial(3)
{
if (3 == 1)
{
return 1; # This is the kill switch for the recursive function
}
else
{
return 3 * factorial(3 – 1); # 3 * 2 = 6
}
}

function factorial(2)
{
if (2 == 1)
{
return 1; # This is the kill switch for the recursive function
}
else
{
return 2 * factorial(2 – 1); # The value 2 sent to the function above
}
}

function factorial(1)
{
if (1 == 1)
{
return 1; # The value 1 sent to the function above
}
else
{
return 1 * factorial(1 – 1);
}
}

*/

?>

</body>
</html>