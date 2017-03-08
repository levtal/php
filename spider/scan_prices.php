 


<?php
 
include("lib/LIB_http.php");
include("lib/LIB_parse.php");
$product_array=array();
$product_count=0;

 //https://code.tutsplus.com/tutorials/html-parsing-and-screen-scraping-with-the-simple-html-dom-library--net-11856
$target = "http://www.webbotsspidersscreenscrapers.com/buyair/";
//$target = "http://www.tellmewhenitchanges.com/buyair";
$web_page = http_get($target, "");

# Parse all the tables on the web page into an array
$table_array = parse_array($web_page['FILE'], "<table", "</table>");

  // At  this point $table_array holds all the tables of the html page
 for($xx=0; $xx<count($table_array); $xx++)   {
 
     /* The script looks for the first landmark, or text that identifies the
		table where the product data exists. 
		In this case  The example script uses the words:
            "Products for Sale" 
	*/

    $table_landmark = "Products For Sale";//Headline of the right table
    if(stristr($table_array[$xx], $table_landmark)) {        
         // If $table_array[$xx] contains  "Products For Sale"
         echo "FOUND: Product table<br>";
       //Function stristr returns  haystack=$table_array[$xx]  starting from 
   	    // and including the first occurrence of needle=$table_landmark 
   	    // to the end. 
	 
		
        
        # Parse table into an array of table rows    
        $product_row_array = parse_array($table_array[$xx], "<tr", "</tr>");
        //page 96 
	    // After the above the content of  $product_row_array is:
		//product_row_array[0] = 'Products For Sale'; 
		//product_row_array[1] ='ID# Product Name Condition Weight Price Quantity Amount
		//product_row_array[2] ='P1 Edina - Fresh Air used 0.00 $7.00'  
		//product_row_array[3] ='P2 Richfield - Fresh Air used 0.00 $8.00'
		//product_row_array[4] ='P3 Bloomington - Fresh Air used 0.00 $9.00'
		//product_row_array[5] = button and editbox
		 
        for($table_row=0; $table_row<count($product_row_array); $table_row++)
            {
            # Detect the beginning of the desired data (Heading row)
            //This time, the landmark is the word 'Condition'.  
            $heading_landmark = "Condition";
            if((stristr($product_row_array[$table_row], $heading_landmark)))  {
                echo "FOUND: Table heading row<br>";
                
                # Get the postistion of the desired headings
                $table_cell_array = parse_array($product_row_array[$table_row], "<td", "</td>");
              var_dump($table_cell_array ); 
              exit; 

			  for($heading_cell=0; $heading_cell<count($table_cell_array); $heading_cell++)
                    {
                    if(stristr(strip_tags(trim($table_cell_array[$heading_cell])), "ID#")) 
                        $id_column=$heading_cell;
                    if(stristr(strip_tags(trim($table_cell_array[$heading_cell])), "Product Name")) 
                        $name_column=$heading_cell;
                    if(stristr(strip_tags(trim($table_cell_array[$heading_cell])), "Price")) 
                        $price_column=$heading_cell;
                    }
                echo "FOUND: id_column=$id_column<br>";
                echo "FOUND: price_column=$price_column<br>";
                echo "FOUND: name_column=$name_column<br>";
                
                # Save the heading row for later use
                $heading_row = $table_row;
                }
            
            # Detect the end of the desired data 
            $ending_landmark = "Calculate";
            if((stristr($product_row_array[$table_row], $ending_landmark)))
                {
                echo "PARSING COMPLETE!<br>";
                break;
                }
            
            # Parse product & price data
            if(isset($heading_row) && $heading_row<$table_row)
                {
                $table_cell_array = parse_array($product_row_array[$table_row], "<td", "</td>");
                $product_array[$product_count]['ID'] = strip_tags(trim($table_cell_array[$id_column]));
                $product_array[$product_count]['NAME'] = strip_tags(trim($table_cell_array[$name_column]));
                $product_array[$product_count]['PRICE'] = strip_tags(trim($table_cell_array[$price_column]));
                $product_count++;
                echo"PROCESSED: Item #$product_count<br>";
                }
            }
        } 
    }
# Display the collected data
for($xx=0; $xx<count($product_array); $xx++)
    {
    echo "$xx. ";
    echo "ID: ".$product_array[$xx]['ID'].", ";
    echo "NAME: ".$product_array[$xx]['NAME'].", ";
    echo "PRICE: ".$product_array[$xx]['PRICE']."<br><br>";
    }
?>