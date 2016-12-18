 <?php include('includes/header.php'); ?>
 <!--  center of page  -->
  <ul id="topics">
			 <!--Topic  -->
	<li id="main-topic" class="topic topic">
	  <div class="row">
		<div class="col-md-2">
          <div class="user-info">
           <img class="avatar pull-left" 
			   src="images/avatar/<?php echo $topic['avatar'];?>"/>	
            <ul>
              <li><strong><?php echo $topic['username'];?></strong></li>
              <li><?php echo userPostCount($topic['user_id']);?> posts</li>
              <li>
			    <a href="<?php echo BASE_URI;?>topics.php?user=<?php echo $topic['user_id'];?>">View topics</a>
			  </li>
			       <a href="profile.php">Profile</a></li>						
			</ul>
		 </div>	
		</div>	
		<div class="col-md-10">
		  <div class="topic-content pull-right">
			<p><?php echo $topic['body'];?></p>
		 </div>
		</div>	
	 </div>  
	</li>	
			 <!--end of Topic  -->
             <!--Sart of reply  -->
		<?php    ?>
		<?php foreach ($replies as $reply):  ?>
		<li class="topic topic">
			  <div class="row">
			     <div class="col-md-2">
                  <div class="user-info">
                    <img class="avatar pull-left" 
					     src="images/avatar/<?php echo $reply['avatar'];?>" />	
                     <ul>
                        <li><strong><?php echo $reply['username'];  ?></strong></li>
                        <li><?php echo userPostCount($reply['user_id']);?> posts</li>
                       <li><a href="<?php echo BASE_URI;?>topics.php?user=<?php echo $reply['user_id'];?>">View topics</a></li>						
			        </ul>
				  </div>	
				  </div>	
			      <div class="col-md-10">
				    <div class="topic-content pull-right">
					   <p> 
					   <?php echo $reply['body'];   ?>
					   </p>
					</div>
				  </div>	
				</div>  
			</li>
         <?php endforeach;  ?>			
			 <!--end reply  -->

        </ul>
        <h3>Reply to topic</h3>
		<?php  if(isLoggedIn():  ?>
		<form role="form" method="post" 
		   action="topic.php?id=<?php echo $topic['id'];  ?>">
			<div class="form-group">
              	<textarea id="reply" rows="10" cols="80"
				          class="form-control" name="body"> 
				</textarea>
				<script> CKEDITOR.replace('reply',{
									language: 'fr',
									uiColor: '#9AB8F3'
									});
				
				
				</script>
			</div>
			<button type="submit" class="btn btn_default">Submit</button>
		 </form>
		 <?php else:  ?>
		 <p>Please login to reply</p>
         <?php endif;  ?>
		 <!--    end  center of page-->
 
 
 
 
  <?php include('includes/footer.php'); ?>