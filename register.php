<?php

session_start();
include ("dbconfig.php") ;
if(isset($_POST["submit_consumer"]))
{
	$name = $_POST["consumer_name"];
  $email = $_POST["consumer_email"];
  $pass = $_POST["consumer_password"];
  $user_id = $_POST["consumer_userid"];
  	$domain="0";
	$contact=$_POST["consumer_contact"];
	$type0="0";
  
  
  $q= "INSERT INTO signup( `user_name`, `password`, `email_id`, `contact_number`, `user_id`, `domain`, `type`)  VALUES ('$name'  ,'$pass' , '$email','$contact','$user_id','$domain','$type0')";
  
  $r = mysqli_query($con,$q);
   
}
else if(isset($_POST["submit_contractor"]))
{
	$name = $_POST["customer_name"];
  $email = $_POST["customer_email"];
  $pass = $_POST["customer_password"];
  $user_id = $_POST["customer_userid"];
  	$domain=$_POST["customer_domain"];
	$contact=$_POSt["customer_contact"];
	$type0="0";
  
  	
  
  $q= "INSERT INTO signup( `user_name`, `password`, `email_id`, `contact_number`, `user_id`, `domain`, `type`)  VALUES ('$name'  ,'$pass' , '$email','$contact','$user_id','$domain','$type0')";
  
  $r = mysqli_query($con,$q);
   
}

?>