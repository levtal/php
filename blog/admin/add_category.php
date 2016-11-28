 <?php include 'includes/header.php'; ?>


 <?php
 
 $db = new Database();  //libreries/Database.php
 if (isset($_POST['submit'])){ // The  submit vutton was pressed");
	   
    // db->$link is defined in //libreries/Database.php
   //   as $this->link = new mysqli ...
  $name = mysqli_real_escape_string($db->link, $_POST['name']);
    // Simple validation 
 echo "name=[" .$name . "] " . " strlen =  " .strlen ($name); 

 if(strlen ($name) <2){
	  $error=('Fill ALL fields');
   } else{
	  $query = "INSERT INTO categories
	          (name) 
              VALUES('$name')";
      
	 
	  $update_row = $db->update($query); 
       //Function 'insert' defined  in  /libreries/Database.php
 }
 
 }
 
 ?>
 
 
 <form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name= "name" type="text" class="form-control"
	      placeholder="Enter category">
  </div>
   
   
   <div> 
    <input name ="submit" type="submit" 
	           class="btn btn-default" value="Submit"/>
	 <a href="index.php" class="btn btn-default">Cancel</a>
   </div>
   <br>
</form>
<?php include 'includes/footer.php'; ?>