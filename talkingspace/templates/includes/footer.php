                 </div><!-- /.block -->


             </div> <!-- /.main-col -->

          </div> 


       <div class="col-md-4">
         <div class="sidebar"> 
             
                   <!--  login form -->
      	  <div class="block">
            
            <?php if(isLoggedIn()): ?>
			 <h3>logout</h3> 
			 <div class="userdata">
				Welcome  <?php echo getUser()['username'];   ?>
			   </div>
			   <br>
			   <form role="form" method="post" action="logout.php">
                  <input type= "submit" name="do_logout" 
				  class="btn btn-primary" value = "logout" />
			   </form>
			
			
			
			<?php else:// if not login   show the login form ?>
              <h3>login form</h3>
			  <form role="form" method="post" action="login.php">
                <div class="form-group">
                      <label>User name</label>
                      <input name="username" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Username">
                </div>
                <div class="form-group">
                      <label>Password</label>
                        <input name="password" type="password" class="form-control"  placeholder="Password">
                </div>
                <button  name="do_login" type="submit" class="btn btn-primary">Login</button>
                <a class="btn btn-default" href="register.php">Create account</a>
              </form>
            <?php endif; ?>

			</div><!-- /.block -->

              <div class="block">
               <h3>Categories</h3>
               <div class="list-group">
                <a href="topics.php" class="list-group-item 
				              <?php echo is_active(null);  ?>">All Topices
                  <span class="badge pull-right"></span>
                </a>            
                <?php foreach(getCategories() as $category): ?>
				    <a href="topics.php?category=<?php echo  $category['id']; ?>" 
					    class="list-group-item"  <?php  echo is_active($category['id']); ?> >
						<?php echo  $category['name']; ?>
						 
				    </a>		
				<?php endforeach;?>
              </div>
              </div><!-- /.block -->
        </div>
       </div> 
     </div><!-- /.row -->

    </div><!-- /.container -->

   </body>
</html>

  