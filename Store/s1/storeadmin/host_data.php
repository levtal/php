  
<?php 
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bookmark </title>
<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
</head>

<body>
<div align="center" id="mainWrapper">
  <?php include_once("../template_header.php");?>
  <div id="pageContent"><br />
    <table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="32%" valign="top"><h3>Bookmark</h3>
      <p>Thi :<br />
	  <img src="http://icons.iconarchive.com/icons/3xhumed/mega-games-pack-26/256/Trackmania-United-1-icon.png" alt="icon" width="70 " height="87" border="1" />
	  
        <a href="http://www.iconarchive.com" target="_blank"> iconarchive</a> </p>
      <p>It is not an actual store and it will change directly after the tutorial series. <br />
        <br />
        This tutorial series is for educational purposes only. Use the scripts at your own risk.</p></td>
    <td width="35%" valign="top"><h3>$_SERVER</h3>
      <?php  
	    $file="logo.gif"  ;
	   $folder_depth = substr_count($_SERVER["PHP_SELF"] , "/");

         if($folder_depth == false)
            $folder_depth = 1;

          $g=str_repeat("../", $folder_depth - 1) . $file;
          
         	echo  "dir =".$g;
            $path = getcwd();
          echo "<br> Absolute Path:  ";
          echo $path;
 
		 
		 echo    "<br><pre>".print_r($_SERVER, true) . "</pre>"; 
         

		 ?>
       
       
	</td>
    <td width="33%" valign="top"><h3>posix_getpwuid</h3>
      <p> 
	      <?php  ?>
		</p> 
	  
	  </td>
  </tr>
</table>








      
        
    
  </div>
  <?php include_once("../template_footer.php");?>
</div>
</body>
</html>
	 
	 
	 
	
	 
	