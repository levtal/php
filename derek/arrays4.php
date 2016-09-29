<!--- https://www.youtube.com/watch?v=lbnTELHr_Zs&index=4&list=PL21E20F9A122DC853
How to create an array
How to search for information stored in an array
How to cycle through an array with the foreach loop
-->
 <html>
<head>
<title><?php echo "Arrays";?></title>
</head>

<body>

<?php
$myInfo = array("Name" => "Derek", "Street" => "123 Main", "City" => "Pittsburgh");
echo "My name is ", $myInfo["Name"], "<br /><br />";

$moreInfo = array("State" => "PA", "Age" => 35);

$myInfo = array_merge($myInfo, $moreInfo);

foreach( $myInfo as $key => $value) {
                     echo $key, " ", $value, "<br />";
 }
echo "<br /><br />";

if(array_key_exists("Name", $myInfo)) 
	         echo "The name stored is, <b>", $myInfo["Name"],"</b>";
echo "<br /><br />";

$citySearch = array_search("Pittsburgh", $myInfo);
echo "The key for the city is ", $citySearch;
echo "<br /><br />";

print_r(array_keys($myInfo));
echo "<br /><br />";

print_r(array_values($myInfo));
echo "<br /><br />";


                         // Multidimntional  array

$customer1 = array("Name" => "Derek", "Street" => "123 Main", "City" => "Pittsburgh");
$customer2 = array("Name" => "Sally", "Street" => "23 Main", "City" => "Pittsburgh");

$customers = array($customer1, $customer2);//  the  new   array
print_r(array_values($customers));
echo "<br /><br />";

foreach($customers as $key)  {
      foreach($key as $key2 => $value) {
                 echo $key2, " : ", $value, "<br />";
       }
 }

?>

</body>
</html>