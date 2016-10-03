<!--- https://www.youtube.com/watch?v=wSYxMzpv8IQ&list=PL21E20F9A122DC853&index=8
 http://www.newthinktank.com/2010/12/web-design-and-programming-pt-8-regex/

how to find:

    Email Addresses
    Phone Numbers
    Dates
    Validated Passwords
-->
 <html>
<head>
<title><?php echo "Regular Expressions";?></title>
</head>

<body>

<?php
$randomArray = array("Derek","123 Main St.","PA","12345","(412)-537-5555",
"12/12/1974","dbanas123@gmail.com","$1,234","Turtle3Dove","123-45-6789","p* 1 ",
"<p>Random Text</p>", "Mailman", "Mailwoman", "Jennifer", "Jenny", "Jen", "Doctor", "Doug", "Dog");

$emailArray = preg_grep("%[A-Za-z0-9._\%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}%", $randomArray);

foreach($emailArray as $result)  {
		echo $result, "<br /><br />";
}

$phoneArray = preg_grep("%\(?[0-9]{3}\)?-?[0-9]{3}[-. ]?[0-9]{4}%", $randomArray);

foreach($phoneArray as $result) {
       echo $result, "<br /><br />";
}

# ? – Occurs zero or one time
# / @ # ` ~ % & ‘ " – All possible delimiters

$dateArray = preg_grep("%(0?[1-9]|[12][0-9]|3[01])[- /.](0?[1-9]|[12][0-9]|3[01])[- /.](19|20)?[0-9]{2}%", $randomArray);

foreach($dateArray as $result){
      echo $result, "<br /><br />";
}

$passwordArray = preg_grep('%\A(?=[-_a-zA-Z0-9]*?[A-Z])(?=[-_a-zA-Z0-9]*?[a-z])(?=[-_a-zA-Z0-9]*?[0-9])\S{6,}\z%', $randomArray);

foreach($passwordArray as $result)
{
echo $result, "<br />";
}

# (?=) – Match what proceeds equals if what follows equals matches

$mailArray = preg_grep("%mail(?!woman)%i", $randomArray);

foreach($mailArray as $result)
{
echo $result, "<br />";
}

# (?!) – Match what proceeds if what follows doesn’t match

$manArray = preg_grep("%(?<=mail)woman%i", $randomArray);

foreach($manArray as $result)
{
echo $result, "<br />";
}

?>

</body>
</html>