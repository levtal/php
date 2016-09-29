<!---  https://www.youtube.com/watch?v=IUhFdI-IsVY&index=5&list=PL21E20F9A122DC853
How to create an array
How to search for information stored in an array
How to cycle through an array with the foreach loop

    How to turn a string into an array
    How to turn an array into a string
    How to sort an array
    How to pull data from a file and store it in an array

--> 

<html>
<head>
<title><?php echo "Arrays";?></title>
</head>

<body>

<?php
  

$countryStr = "Cuba,Spain,India,France,Italy";
// turn a string in t an array
$randCountry = explode(",", $countryStr);

echo $randCountry[0], " ", $randCountry[1], "<br /><br />";
// Cuba Spain
$countryStr2 = implode(",", $randCountry);
//  turn an array to a string
echo $countryStr2, "<br /><br />";

if(in_array("India", $randCountry)) 
	          echo "<b>India</b> is in the list";
echo "<br /><br />";
//  Reverse array
print_r(array_reverse($randCountry,true));
echo "<br /><br />";

sort($randCountry, SORT_STRING);
print_r($randCountry);
echo "<br /><br />";

$countArray = range(0,50);
foreach($countArray as $printNum){
            echo $printNum, ", ";
 }
echo "<br /><br />";

echo count($countArray);
echo "<br /><br />";

//
/*   customers.txt  :
df,123 nhjjghgg, puygg,PA
dfq,123 nhjjghgg2, puygg3,PA3
dfff,123666 nhjjghg34, puygg444,PA6767676
*/
echo "<br/>customers.txt<br/> ------------<br/>";
$customers = file("customers.txt");
foreach($customers as $customer) {
    list($name,$street,$city,$state) = explode(",",$customer);
    $state = trim($state);
// stripped whitespace  from the beginning and end  
    echo "$name $street $city $state";
    echo "<br /><br />";
}
?>

</body>
</html>