                 </div><!-- /.block -->


             </div> <!-- /.main-col -->

          </div> 


          <div class="col-md-4">
            <div class="sidebar"> 
              <div class="block">
                  <h3>login form</h3> 
                  <form role="form">
                   <div class="form-group">
                      <label>User name</label>
                      <input name="username" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Username">
                   </div>
                   <div class="form-group">
                      <label>Password</label>
                        <input name="passward" type="password" class="form-control"  placeholder="Password">
                   </div>
                   <button  name="do_login" type="submit" class="btn btn-primary">Login</button>
                   <a  class="btn btn-default" href="register.html">Create account</a>
                  </form>
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


    <!-- Bootstrap core JavaScript  ========= -->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.js"></script>
    <!--  -->
     
  </body>
</html>

  