<!DOCTYPE>
<?php 
session_start();
include 'includes/header.php';    
?>
 <div id="products_box">
 <?php 
	if(!isset($_SESSION['customer_email'])){
					
					include("customer_login.php");
				}
	else {
				
				include("payment.php");
   }
?>
<?php include 'includes/footer.php';   ?>