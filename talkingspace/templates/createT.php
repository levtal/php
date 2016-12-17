 <?php include('includes/header.php'); ?>
  <form role="form" method="post" action="create.php">
	<div class="form-group">
	 <label>Topic Title</label>
	 <input type="text" class="form-control" name="title"
				       placeholder="Enter Post Title">
    </div>
	<div class="form-group" >
        <label>Category</label>
		<select class="form-control" name="category">
		     <?php foreach(getCategories() as $category): ?>
               <option value="<?php echo  $category['id']; ?>">
		          <?php echo  $category['name']; ?>
		      </option>
		    <?php endforeach;?>		
        </select>
	</div>	
	<div class="form-group">   <!-- editor  -->
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
	<button name="do_create" type="submit" class="btn btn_default">Submit</button>
  </form>		  <!-- form end  -->
 
 
 
 
  <?php include('includes/footer.php'); ?>