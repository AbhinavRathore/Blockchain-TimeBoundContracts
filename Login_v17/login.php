<?php
//header("location:error.php");	
session_start();
include ("dbconfig.php") ;
if(isset($_POST["user_submit"]))
{
//header("location:error.php");
  $email = $_POST["email_id"];
  $pass = $_POST["pass"];
     //$email="aaaaaa";
  	echo $email;
	echo $pass;
  
  $q= "SELECT * FROM signup WHERE email_id='$email' ";
  
  
  $r = mysqli_query($con,$q);
  echo mysqli_error($con);
  $row=mysqli_fetch_array($r);
  
 echo $row["password"];
 
  if($pass==$row["password"])
 {  
     session_start();	
		$_SESSION['email']=$email;
		header("location:error.php");	
	 
  }
}
?>