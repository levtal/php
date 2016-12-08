 <?php include('includes/header.php'); ?>
 <!--  center of page  -->
		   
		    <ul id="topics">
			 <!--item 1  -->
			<li id="main-topic" class="topic topic">
			  <div class="row">
			     <div class="col-md-2">
                  <div class="user-info">
                    <img class="avatar pull-left" src="./img/gravatar.png" />	
                    <ul>
                        <li><strong>gtre</strong></li>
                        <li>55 posts</li>
                       <li><a href="profile.php">Profile</a></li>						
			        </ul>
				  </div>	
				  </div>	
			      <div class="col-md-10">
				    <div class="topic-content pull-right">
					   <p> this  is contentthis  is contentthis  is content</p>
					</div>
				  </div>	
				</div>  
			</li>	
			 <!--end item 1  -->
             <!--item2  -->
			<li class="topic topic">
			  <div class="row">
			     <div class="col-md-2">
                  <div class="user-info">
                    <img class="avatar pull-left" src="./img/gravatar.png" />	
                    <ul>
                        <li><strong>fggf  re</strong></li>
                        <li>66 posts</li>
                       <li><a href="profile.php">Profile</a></li>						
			        </ul>
				  </div>	
				  </div>	
			      <div class="col-md-10">
				    <div class="topic-content pull-right">
					   <p>  item 2this  is contentthis  is contentthis  is content</p>
					</div>
				  </div>	
				</div>  
			</li>	
			 <!--end item 2  -->

            </ul>
             
			<h3>Reply to topic</h3>
			 
			<form role="form">
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
		   <!--    end  center of page-->
 
 
 
 
  <?php include('includes/footer.php'); ?>