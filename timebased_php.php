<?php
//header("location:error.php");	
session_start();
include ("dbconfig.php") ;
if(isset($_POST["submit"]))
{

$type=$_POST["type"];
  $time= $_POST["time"];
   $des = $_POST["des"];
  $id=1;
    
  	
	
  
  $q= "INSERT INTO user_time(`type`, `time`, `user_id`,`desp`)    VALUES ('$type' ,'$time' ,'$id', '$des')";
  
  
  $r = mysqli_query($con,$q);
}
?>