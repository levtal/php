<!--- https://www.youtube.com/watch?v=i109S05bzVk
 
    Read file into an array
    Read file into a string
    Grab text off of web pages
    Strip HTML tags
    Write to files

-->
 <html>
<head>
<title><?php echo "Object Oriented Programming";?></title>
</head>

<body>

<?php

	# Creates a file descriptor and assigns it to $file
	# The second attribute opens the file for read only purposes
	# You can access any file online with this same function
	# r+ – Read and Write from beginning of file
	# w – Write only to beginning of file
	# w+ – Delete contents and read and write to file
	# a – Write only to the end of the file
	# a+ – Read and Write to the end of the file
 $file = fopen("customers.txt", "r");

  # While the end of file hasn’t been met print lines to screen
 while (!feof($file)) {
	# fgets() returns all the characters up to a newline or EOF
	# You can also specify the number of characters to return in the 2nd attribute
	echo fgets($file). "<br />";
 }

echo "<br />";

# You can also read a file into an array
$customers = file("customers.txt");
foreach ($customers as $customer){
	list($name,$street,$city,$state) = explode(",", $customer);
	$state = trim($state);
	echo "Name: " . "$name <br />";
	echo "Street: " . "$street <br />";
	echo "City: " . "$city <br />";
	echo "State: " . "$state <br /><br />";
 }


 fclose($file); # Close the file

$file4 = fopen("customers.txt", "a");# a – Write only to the end of the file .  Needs permisson!!!!

$newCustomer = "\nRick,219 Almond St,Pittsburgh,PA";
fwrite($file4, $newCustomer);

fclose($file4);

# You can also read a file into a string
$customers = file_get_contents("customers.txt");
$customers = explode("\n",$customers);

foreach ($customers as $customer) {
	list($name,$street,$city,$state) = explode(",", $customer);
	$state = trim($state);
	echo "Name: " . "$name <br />";
	echo "Street: " . "$street <br />";
	echo "City: " . "$city <br />";
	echo "State: " . "$state <br /><br />";
}

echo "url output: "; 

$file2 = fopen("http://www.wikileaks.ch/static/html/faq.html", "rt");##  Error no permission

while (!feof($file2)){
   $l=fgetss($file2, 1024);//Strip tags
   $faqs .= $l;
   echo $l;
}
fclose($file2);

$file3 = fopen("justthefaqs.txt", "wt");
fwrite($file3, $faqs);

fclose($file3);

?>

</body>
</html>