 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Full size image</title>
  <link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
</head>

<body>
 <div align="center" id="mainWrapper">
  <?php include_once("template_header.php");?>
  <div id="pageContent">
  <table width="100%" border="0" cellspacing="0" cellpadding="15">
  <tr>

   <td width="90%" valign="top">
	  <img src=" <?php  echo $_GET['img'];  ?>" 
	  alt=<?php  echo $_GET['img'];  ?> />
  </td>
 </tr>
</table>
</div>
  <?php include_once("template_footer.php");?>
</div>
</body>
</html>