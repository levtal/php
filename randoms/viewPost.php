<?php
  include('classes/DB.php');
  include('left.php');
  include('jumbotron.php');


if (isset($_GET['id'])) {
 	$sql='SELECT  id,title, body,createdDate
    FROM    posts
	WHERE id = '.$_GET['id'];
    $post  =  DB::query($sql,array()); 
   }
 ?>
  
<div class="container">
 
 <form class="form-horizontal" role="form" action="updatePost.php"  method="post">
    <div class="form-group">
      <label for="name1" class="col-sm-2 control-label">Title:</label>
      <div class="col-sm-6">
        <input style="font-size:26px;color:blue;" 
		       type="text" class="form-control inputstl" name="title"
               value=" <?php echo $post[0]["title"];  ; ?>">
 
      </div>
  </div>
 
 
 <div class="form-group">
   <div class="col-sm-11">
       <textarea   class="form-control inputstl"    rows="15"        name="body"
		 style= 
		   "color: #000000;
		    font-size:28px;
	    	padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #a198b1;"
		
		
		
		
		value="  <?php echo $post[0]["body"];?> ">	
		 <?php echo $post[0]["body"];?>
	   </textarea>
	   
   </div>
 </div>
 
 
 
  <div class="form-group">
  <div class="col-sm-offset-0 col-sm-2">
    <input type="hidden" name="id" value="<?php echo $post[0]["id"];?>" placeholder="id"> 
    <input type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color:Blue; background-color: #aFcaa0; border: 2pt black" value="Update ">

    
	 
    
   </div>
  </div>
 </form>
<p>
   <a href="newPost.php"> New Post</a>
   <a href="delpost.php?id=<?php echo $post[0]["id"];?>"> Delete Post</a>
 


</p>
</div>
 
  <?php  include('right.php'); ?>