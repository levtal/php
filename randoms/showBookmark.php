
 <?php 
  
  include('classes/DB.php');
  include('left.php');
  include('jumbotron.php');
  
 
 
 
 /*$sql='SELECT bookmark.name, bookmark.url, 
	          bookmark.description,
	          category.name
       FROM        bookmark
       INNER JOIN  category
	   ON          bookmark.category_id  =  category.id ;';*/
	  
    $sql_cat='SELECT name, url , category_id
	      FROM        bookmark
		  WHERE category_id =';
   
 
    $sql='SELECT  id,name 
	      FROM       category;';
    
    $category_rows = DB::query($sql,array());

 $category_counter = count( $category_rows);
 echo '[<a href="addCateg.php"> Add New Category </a>]<br>';
 echo '<table width="94%" bgcolor="#0c0F0F" cellspacing="0" cellpadding="3" border="1" bordercolor="#333333">';
  $i=0;  
  $col = 1;
            //for ($row = 1; $row<=6; $row ++) {
 while ($i < $category_counter){
   	 
    echo '<td class="listItem" valign="top" align="left" width="33%">';
	echo '<b><font size="5" color="#99ccff"> '.$category_rows[$i]["name"].'</b>';
	echo '  [<a href="addURL.php?cat_id='.$category_rows[$i]["id"].'">';
	echo '+</a>]</font>';
    echo '    [<a href="editCateg.php?cat_id='. $category_rows[$i]["id"].'&name='.$category_rows[$i]["name"].'">';
	echo 'E</a>]</font><br>';
        // echo $i.' '. $category_counter;
	echo  '<b>---------------------------------</b> <br>' ; 
	     
    $rows = DB::query($sql_cat .$category_rows[$i]["id"]. ';',array()); 
	$cnt = count($rows);
    for($ii=0;$ii<$cnt;$ii++){
       echo '[<a href="delURL.php?durl='. $rows[$ii]["url"].'&name=';
       echo $rows[$ii]["name"].'">';
	   echo '-</a>] ';
	   echo '<a href="'. $rows[$ii]["url"] .'">';
	   echo  '<font size="4" color="#ffcc66"> '. $rows[$ii]["name" ].'</font><br>';
       echo  '</a>';
	 }
		 
	//echo "</td>";
	$i++;
    $col++;
	if ($col>5) {
		$col = 1; 
		 echo "</tr>";
	 }
 }

  //
//}

echo "</table>";
 

?>
 
 
  
 
<?php include('right.php'); ?>
 

 