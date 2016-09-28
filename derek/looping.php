<!---part 3-https://www.youtube.com/watch?v=sfEH3ArZ1oM&list=PL21E20F9A122DC853&index=3     

    Using the $_REQUEST array to pass form data
    The While Loop
    The Do While Loop
    The For Loop
    How Break and Continue work

-->
<html>
	<head>
	      <title><?php echo "Printing Numbers";?></title>
	</head>

	<body>

	<?php
		$countTo = (int) $_REQUEST['countto'];
		$startNum = 1;
   //$_REQUEST is  global variable available in all scopes of script
  // It is an associative array that by default contains the contents of 
  //		$_GET, $_POST and $_COOKIE. 	
  
  //Associative arrays = arrays that use named keys that  
  // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  //or 	 $age['Peter'] = "35"; $age['Ben'] = "37";
  // Indexed Arrays	: $cars = array("Volvo", "BMW", "Toyota");	
		while ( $startNum <= $countTo )	{
				if( ($startNum % 2) == 0 ) { // only  even numbers
					  echo $startNum, ", ";
					}
				elseif ($startNum >= 1000){
					  break;
					}
				else{
						$startNum++;
						continue;
					}
				$startNum++;
		}

		echo "<br /><br />";
        $iterator2 = 101;
		do {
		    echo $iterator2. ", ";
		    $iterator2++;
		} while ($iterator2 <= 100);

		echo "<br /><br />";
		 
		$maxFib = $_REQUEST['fibonacci'];
		$firSeqNum = 0;
		$secSeqNum = 1;

		for ( $iterator = 0; $iterator <= $maxFib; $iterator++)
		{
				echo $firSeqNum, ", ";
				$sum = $firSeqNum + $secSeqNum;
				$firSeqNum = $secSeqNum;
				$secSeqNum = $sum;
		}

	?>

    </body>
</html>