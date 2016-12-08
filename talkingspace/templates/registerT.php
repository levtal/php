<?php ?>  
 <?php include('includes/header.php'); ?>
 
  <form role="form" enctype="multipart/form-data" method="post"  
         		 action="register.php">
			 
			 <div class="form-group">
			      <label>Name* </label>
				  <input type="text" class="form-control" name="name"
				       placeholder="Enter Name">
             </div>
			 <div class="form-group">
			      <label>Email* </label>
				  <input type="email" class="form-control" name="email"
				       placeholder="Enter Email">
             </div>
			 
			 <div class="form-group">
			      <label>Chose user name* </label>
				  <input type="text" class="form-control" name="username"
				       placeholder="Create username">
             </div>
			 
			 <div class="form-group">
			      <label>Passward* </label>
				  <input type="password" class="form-control" name="password"
				       placeholder="password">
             </div>
			 <div class="form-group">
			      <label>Upload Avatar</label>
				  <input type="file"   name="avatar">
				  <p class ="help-block"></p>
             </div>
			 <div class="form-group">
			      <label>About me </label>
				  <textarea id="about" rows="6" cols="80" 
				       class="form-control" name="about"
				        placeholder="Tell us something">
				  </textarea>	   
             </div>
			 
             <input name="register" type="submit" class= "btn btn-default" 
			      value="Register" />			 
		   </form>		  <!-- form end  -->
 

 <?php include('includes/footer.php'); ?>