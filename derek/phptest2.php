<!---https://www.youtube.com/watch?v=smzYNZ4GEV4&list=PL21E20F9A122DC853&index=2    --->

<html>
<head>
<title><?php echo "I have the Info";?></title>
</head>
<body>
<?php
 echo "I know everything about you ", $_POST['name'],"<br />";

 echo "You live here " . $_POST['address']." " .$_POST['city']." ". $_POST['state'] . "<br />";
  
 # Playing with if conditionals
echo "Did you guess my favorite number? ";
$numGuessed = (int) $_POST['number'];
  

# Compare multiple conditions with AND OR XOR (NOT PROVIDES THE OPPOSITE)
if (( $numGuessed == 5 ) AND ( $numGuessed < 11))
{
     echo "You guessed it<br/>";
} elseif ( $numGuessed > 5 ) {
        echo "Too High<br />";
     }else {
           echo "Too Low<br />";
       }



$trueCond = true;
$falseCond = false;

$condAnswer = (int) ($trueCond XOR $falseCond);
echo $condAnswer . "<br />";
echo (int) !$condAnswer . "<br />";

# Playing with the switch statement
$favPet = $_POST['pet'];
echo $favPet . " Do ";
switch($favPet) {
  case "Dogs" :
    echo "Woof woof";
  break;
  case "Cats" :
    echo "Meow";
  break;
   case "Fish" :
    echo "Bubble";
    break;
default:
    echo "Grrrr";
}

?>
 


</body>
</html>