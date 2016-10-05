<!--- https://www.youtube.com/watch?v=10YEVdLE3Do&list=PL21E20F9A122DC853&index=9
 
how to find:
		preg_match_all
		preg_replace
		substr
		strpos
		preg_split
		strlen
		strcmp
		strip_tags
-->
<html>
<head>
           <title><?php echo "String and Regular Expressions";?></title>
</head>

<body>

<?php
$randomStr = "Mailman Mailwoman Jennifer Jenny Jen Doctor Doug Dog";

# Find  versions of the name Jennifer
/* Searches randomStr 
  for all matches to the regular expression:   '%Je[nifery]{1,6}%'
   and puts them in $matchName 
*/
preg_match_all('%Je[nifery]{1,6}%', $randomStr, $matchName);
echo $matchName;## Array
echo   "<br />-----------<br />";
foreach($matchName as $result) {
     echo $result;## 
     echo   "<br />-----------<br />";

    foreach($result as $found) {
        echo $found . "<br /><br />";
    }
 }

# Replace the Regex with something else using preg_replace
$randStr = "Dick and Jane fetched a bucket of water";
# Put 'Paul' instad of  Dick
echo preg_replace("%Dick%", "Paul", $randStr). "<br /><br />";

# Replacing Strings 
echo str_replace("Jane", "Erica", $randStr). "<br />";

# Returning part of a string 'Jane'
echo substr($randStr,9,4) . "<br />";

# Return the position of the substring  (14)
echo strpos($randStr, "fetched"). "<br />";

# ———-
# Split a string based off a Regex with preg_split
$chairPpl = "John Thompson (CEO) Mark Summers (CFO) Betty Wu (CTO) ";
$noTitle = preg_split("%\s\(.{3}\)\s%", $chairPpl);
foreach($noTitle as $found) {
       echo $found . "<br />";
 }

# Find the length of a string
echo strlen($chairPpl) . "<br />";
 

# Compare strings
$strOne = "Doctor Jay";
$strTwo = "Doctor Jay";
$strThree = "he went there";

# Returns neg number if strOne < strTwo, 0 if equal, else a positive number
echo strcmp($strOne,$strTwo). "<br />";
echo strcasecmp($strOne,$strTwo). "<br />";

# Changing String Case
#ucfirst — Make   first character uppercase
#ucwords — Uppercase the first character of each word in a string
echo ucfirst($strThree) . "<br />";
echo ucwords($strThree) . "<br />";
echo strtolower($strOne) . "<br />";
echo strtoupper($strOne) . "<br />";
# ———-

# trim removes white space from beginning and end of a string
# ltrim removes white space from left side
# rtrim removes white space from right

# ———-

# Strip HTML Tags : My Web Page
$htmlText = "<head><title>My Web Page</title></head>";
echo strip_tags($htmlText) . "<br />";
?>
</body>
</html>