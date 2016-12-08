 <?php include('includes/header.php'); ?>
  <form role="form">
			 <div class="form-group">
			      <label>Topic Title</label>
				  <input type="text" class="form-control" name="title"
				       placeholder="Enter Post Title">
             </div>
			 <div class="form-group">
                <label>Category</label>
				<select class="form-control">
				  <option>Design 1</option>
				  <option>Design 2</option>
				  <option>Design 3</option>
				  <option>Design 4</option>
				</select>
			 </div>	
			 <div class="form-group">
                <label>Topic body</label>
				<textarea id="body" rows="10" cols="80"
				          class="form-control" name="body"> 
				</textarea>
				<script> CKEDITOR.replace('body',{
									language: 'fr',
									uiColor: '#9AB8F3'
									});
				
				
				</script>
			 </div>	
			 <button type="submit" class="btn btn_default">Submit</button>
			</form>		  <!-- form end  -->
 
 
 
 
  <?php include('includes/footer.php'); ?>