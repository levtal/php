<?php 
 class Validator{
	
	
	// check required  fields
  public function  isRequierd($field_array){
	foreach($field_array as $field){
	  if($_POST[''.$field.'']==''){
		   
			return false;
		}
      }//foreach	
	return true;
  }//isRequierd


  
 //validate email	
 public function isValidemail($email){
	if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		return true;
	}else{
		return false;
	} 
 }//isValidemail
 
//Check password
 public function passwordsMatch($pw1,$pw2){
	if ($pw1==$pw2){
			return true;
	}else{
		return false;
	} 
 }//passwordsMatch
 
 
 
 }//class   
?>   