<!---  https://www.youtube.com/watch?v=wtQvqh_CTiE&index=7&list=PL21E20F9A122DC853
 http://www.newthinktank.com/2010/12/web-design-and-programming-pt-7-regex/    

-->
<html>
<head>
<title><?php echo 'Regular Expressions';?></title>
</head>

<body>

<?php
$randomArray = array(
'Derek',
'123 Main St','PA','12345','(412)-537-5555',
'12/12/1974','dbanas123@gmail.com','$1,234','Turtle3Dove','123-45-6789','p* 1 ',
'<p>Random Text</p>', 'Mailman', 'Mailwoman', 'Jennifer', 'Jenny', 'Jen','Doctor', 'Doug', 'Dog');

# Find my exact name and nothing else
$matchName = preg_grep("%Derek%", $randomArray);

foreach($matchName as $result)
{
echo $result, "<br /><br />";
}

# Find Zip Code
$matchZip = preg_grep("%\d{5}%", $randomArray);

foreach($matchZip as $result)
{
echo $result, "<br /><br />";
}

# \d – Any digits 0-9
# \D – Anything not a number
# {n} – Whatever proceeds must occur n times
# {n,m} – Whatever proceeds must occur between n and m times
# {n,} – Whatever proceeds must occur at least n times

# Find Random String
$matchRand = preg_grep("%\w*\b\d\s$%", $randomArray);

foreach($matchRand as $result)
{
echo $result, "<br /><br />";
}

# \w – Any word type character A-Z, a-z, 0-9, _
# \W – Any non word character
# \s – Any white space
# \S – Any non white space
# \b – Any space that lies between 2 characters (Word Boundary)
# \B – Anything but word boundaries

# Find String between Tags
$matchTags = preg_grep("%^<.*>(.*)<.*>$%", $randomArray);

foreach($matchTags as $result)
{
echo $result, "<br />";
}

# $ – End of string
# . – Anything but newline
# * – Occurs zero or more times

# Find Jen Type Names
$matchJen = preg_grep("%Je[n|nnifer|nny]%", $randomArray);

foreach($matchJen as $result)
{
echo $result, "<br /><br />";
}

# | – Is used for OR clause situations
# [ ] – Insert characters that are valid

# Find Doctor but Ignore other results
$matchDoc = preg_grep("%^Do[^g|ug]%", $randomArray);

foreach($matchDoc as $result)
{
echo $result, "<br /><br />";
}

# ^ – Stands for start of string
# [^ ] – Characters you don’t consider valid

# Find Address
$matchAddress = preg_grep("%^\d{1,5}\s[A-Za-z.]+\s[A-Za-z.]{2,7}$%", $randomArray);

foreach($matchAddress as $result)
{
echo $result, "<br /><br />";
}

# {n,m} – Whatever proceeds must occur between n and m times
# {n,} – Whatever proceeds must occur at least n times
# ^ – Stands for start of string
# $ – End of string
# + – Whatever proceeds must occur one or more times

$matchMoney = preg_grep('%\$\d{1,3}[,]?\d{1,3}%', $randomArray);

foreach($matchMoney as $result)
{
echo $result, "<br />";
}

# . ^ * + ? { } [ ] \ | ( ) – Characters that must be escaped or backslashed

$matchSocial = preg_grep('%\d{3}[-. ]?\d{2}[-. ]?\d{4}%', $randomArray);

foreach($matchSocial as $result)
{
echo $result, "<br />";
}

# Find only a valid state
$matchState = preg_grep("%(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|
LA|M[ADEINOST]|N{CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])%", $randomArray);

foreach($matchState as $result)
{
echo '$result = ',$result, "<br /><br />";
}

?>

</body>
</html>