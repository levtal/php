

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html"  charset="utf-8"/>
 <title>Change Category Name</title>
 </head>

<body>
 <h1 class="hero">Change Category Name</h1>
 <form id="frm"action="updateCateg.php" method="post">
  Name:<br>
  <input type="text" name="category_name" value="<?php echo $_GET['name'];?>" placeholder="name"><p /><br>
   
 
  <input type="hidden" name="category_id" value="<?php echo $_GET['cat_id'];?>" placeholder="id"><p />
  <input type="submit" name="addURL" value="Update">
 </form>
 </body>

</html>