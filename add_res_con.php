<?php
//header("location:error.php");	
session_start();
include ("dbconfig.php") ;
if(isset($_POST["submit"]))
{
//header("location:error.php");
  $size= $_POST["size"];
  $storey = $_POST["storeys"];
  $des = $_POST["des"];
  $id="1";
     //$email="aaaaaa";
	 
  	
	
  
  $q= "INSERT INTO user_show(`size`, `storey`, `description`, `user_id`)   VALUES ('$size'  ,'$storey' , '$des','$id')";
  
  
  $r = mysqli_query($con,$q);
}
?>