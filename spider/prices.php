<?php // page 95
 # Initialization
include("lib/LIB_http.php");
include("lib/LIB_parse.php");
$product_array=array();
$product_count=0;
# Download the target (practice store) web page
//$target = "http://www.livechennai.com/Vegetable_price_chennai.asp";
 $target = "http://www.webbotsspidersscreenscrapers.com/buyair/";
$web_page = http_get($target, "");
echo "web_page<br>"; 
var_dump($web_page['FILE']);
echo "end<br>";

# Parse all the tables on the web page into an array
# parse_array()    Returns an array containing all occurrences of    
#                     text that falls between a set of delineators.   
$table_array = parse_array($web_page['FILE'], "<table", "</table>");

//echo "<br><pre>".print_r($table_array, true) . "</pre>";

/* The script looks for the first landmark, or text that identifies the
table where the product data exists. 
In this case  The example script uses the words:
            "Products for Sale" 
*/


# Look for the table that contains the product information
for($xx=0; $xx<count($table_array); $xx++) {
   $table_landmark = "Products For Sale";
   if(stristr($table_array[$xx], $table_landmark)) {
	// If $table_array[$xx] contain  $table_landmark it returns true
	 //Function stristr returns  haystack=$table_array[$xx]  starting from 
   	// and including the first occurrence of needle=$table_landmark 
   	// to the end.  

  // Process this table
    
      echo "FOUND: <br> Product table<br><br>-----------<br>";
      echo "( --- ".$xx."---) ";
        //$table_landmark was found so prase
        // table into an array of table rows
     $product_row_array = parse_array($table_array[$xx], "<tr", "</tr>");
 
  
  for($table_row=0; $table_row<count($product_row_array); $table_row++)
  {
  # Detect the beginning of the desired data (heading row)
  $heading_landmark = "Condition";
  if((stristr($product_row_array[$table_row], $heading_landmark)))
  {
  echo "FOUND: Talbe heading row\n";

  # Get the position of the desired headings
  $table_cell_array = parse_array($product_row_array[$table_row], "<td", "</td>");
  for($heading_cell=0; $heading_cell<count($table_cell_array); $heading_cell++)
    {
    if(stristr(strip_tags(trim($table_cell_array[$heading_cell])), "ID#"))
      $id_column=$heading_cell;
    if(stristr(strip_tags(trim($table_cell_array[$heading_cell])), "Product name"))
      $name_column=$heading_cell;
    if(stristr(strip_tags(trim($table_cell_array[$heading_cell])), "Price"))
      $price_column=$heading_cell;
    }
  echo "FOUND: id_column=$id_column\n";
  echo "FOUND: price_column=$price_column\n";
  echo "FOUND: name_column=$name_column\n";   

  # Save the heading row for later use

  $heading_row = $table_row;
  }

  #Detect the end of the desired data table
  $ending_landmark = "Calculate";
  if((stristr($product_row_array[$table_row], $ending_landmark)))
    {
    echo "PARSING COMPLETE!\n";
    break;
    }

  # Parse product and price data
  if(isset($heading_row) && $heading_row<$table_row)
    {
    $table_cell_array = parse_array($product_row_array[$table_row], "<td", "</td>");
    $product_array[$product_count]['ID'] = strip_tags(trim($table_cell_array[$id_colum]));
    $product_array[$product_count]['NAME'] = strip_tags(trim($table_cell_array[$name_colum]));
    $product_array[$product_count]['PRICE'] = strip_tags(trim($table_cell_array[$price_colum]));
    $product_count++;
    echo"PROCESSED: Item #$product_count\n";
    }

  #Display the collected data
  for($xx=0; $xx<count($product_array); $xx++)
    {
    echo "$xx. ";
    echo "ID: ".$product_array[$xx]['ID'].", ";
    echo "NAME: ".$product_array[$xx]['NAME'].", ";
    echo "PRICE: ".$product_array[$xx]['PRICE'].", ";
    } 
}
}
}