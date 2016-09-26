<!---https://www.youtube.com/watch?v=smzYNZ4GEV4&list=PL21E20F9A122DC853&index=2    --->

<html>
<head>
<title><?php echo "I have the Info";?></title>
</head>
<body>
<?php
 echo "I know everything about you ", $_POST['name'],"<br />";
 echo "You live here " . $_POST['address']  . " "  .$_POST['city'] . ” “. $_POST['state']; 
 
 //echo “You live here ” . $_POST[‘address’] . ” ” .$_POST[‘city’]. ” “. $_POST[‘state’] //. “<br />”;

 


?>



</body>
</html>