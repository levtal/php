<?php
  include('classes/DB.php');
  include('left.php');
  include('jumbotron.php');


$sql='SELECT  id,title, body,createdDate
      FROM    posts;';
    
$posts_list = DB::query($sql,array());
$numOfPosts = count($posts_list);
echo   'Number Of Posts ' . $numOfPosts.'<br> ';
echo '<table width="94%" bgcolor="#0c0F0F" cellspacing="0" cellpadding="3" 
                                              border="1"    bordercolor="#333333">';
  $i=0;  
  echo "<tr>";
 for($ii=0;$ii<$numOfPosts;$ii++){
    if ($i==0){
		 echo "<tr>";
		}  
    
	echo '<td class="listItem" valign="top" align="left" width="25%">';
    echo '<a href="delpost.php?id='. $posts_list[$ii]["id"].'">';
	echo '-</a>';
    echo '<span class="badge">'.($ii+1).' </span>';
    
    echo '<font size="5" color="#f9ccff"> ';

    echo '<a href="viewPost.php?id='. $posts_list[$ii]["id"].'">';
	echo $posts_list[$ii]["title"].'</a></font>';
    echo "</td>";
	
	$i++; 
	 if ($i==4){
		 echo "</tr>";
		 $i=0;
	 }
 }

  

echo "</table>";
 
?>

<p><a href="newPost.php"> New Post</a></p>


<?php include('right.php'); ?>