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
  session_start();	
		$_SESSION['email']=$email;
  header("location:web.php");
   
}
else if(isset($_POST["submit_contractor"]))
{
	$name = $_POST["contractor_name"];
  $email = $_POST["contractor_email"];
  $pass = $_POST["contractor_password"];
  $user_id = $_POST["contractor_userid"];
  	$domain=$_POST["contractor_domain"];
	$contact=$_POST["contractor_contact"];
	$type0="1";
	
  	
  
  $q= "INSERT INTO signup( `user_name`, `password`, `email_id`, `contact_number`, `user_id`, `domain`, `type`)  VALUES ('$name'  ,'$pass' , '$email','$contact','$user_id','$domain','$type0')";
  
  $r = mysqli_query($con,$q);
  session_start();	
		$_SESSION['email']=$email;
  header("location:contractor.php");
   
}

?>