
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

 //$cnt = count($rows);
 
 echo '<table width="94%" bgcolor="#0c0F0F" cellspacing="0" cellpadding="3" border="1" bordercolor="#333333">';
  $i=0;  
 for ($row = 1; $row<=5; $row ++) {
 echo "<tr>";
 for ($col = 1; $col<=5; $col ++) {
         
		echo '<td class="listItem" valign="top" align="left" width="33%">';
		echo '<b><font size="5" color="#99ccff"> '.$category_rows[$i]["name"].'</b>';
		echo '[<a href="addURL.php?cat_id='. $i.'">';
		echo '+</a>]</font><br>';
		echo  '<b>---------------------------------</b> <br>' ; 
	    //$sql_cat = $sql_cat . $i. ';';
        $rows = DB::query($sql_cat . $i. ';',array()); 
		 $cnt = count($rows);
         for($ii=0;$ii<$cnt;$ii++){
		    echo '[<a href="delURL.php?durl='. $rows[$ii]["url"].'&name='. $rows[$ii]["name"];
			echo '">';
		    echo '-</a>] ';
			
           
			echo '<a href="'. $rows[$ii]["url"] .'">';
			echo  '<font size="4" color="#ffcc66"> '. $rows[$ii]["name" ].'</font><br>';
            echo  '</a>';
			
		 }
		 
		
		echo "</td>";
		$i++;
   }

   echo "</tr>";
}

echo "</table>";
  

?>
 
 
 
<?php include('right.php'); ?>
 

 <button value="send" onclick="openwindow('http://google.com')" />
 