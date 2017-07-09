<?php
  include('classes/DB.php');
  include('left.php');
  include('jumbotron.php');


//if (isset($_GET['id'])) {
 //	$sql='SELECT  id,title, body,createdDate
  //  FROM    Posts
	//WHERE id = '.$_GET['id'];
  //  $post  =  DB::query($sql,array()); 
  // }
 ?>
  
<div class="container">
 
 <form class="form-horizontal" role="form" action="saveNewPost.php"  method="post">
    <div class="form-group">
      <label for="name1" class="col-sm-2 control-label">Title:</label>
      <div class="col-sm-6">
        <input style="font-size:26px;color:blue;" 
		       type="text" class="form-control inputstl" name="title"
               placeholder="Enter Title">
 
      </div>
  </div>
 
 
 <div class="form-group">
   <div class="col-sm-11">
       <textarea placeholder="Enter Text here..." 
	    style="font-size:26px"
		class="form-control inputstl"    rows="15"        name="body"  >	
		 
	   </textarea>
	   
   </div>
 </div>
 
 
 
  <div class="form-group">
  <div class="col-sm-offset-0 col-sm-2">
    
    <input type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color:Blue; background-color: #aFcaa0; border: 2pt black" value="Save ">

    
	 
    
   </div>
  </div>
 </form>
 
</div>
 
  <?php  include('right.php'); ?>