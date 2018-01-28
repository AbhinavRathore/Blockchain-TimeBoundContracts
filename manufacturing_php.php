<?php
//header("location:error.php");	
session_start();
include ("dbconfig.php") ;
if(isset($_POST["submit"]))
{

$type=$_POST["type"];
  $quantity= $_POST["quantity"];
   $des = $_POST["desp"];
  $id=1;
    
  	
	
  
  $q= "INSERT INTO user_manufacture(`type`, `quantity`, `desp`,`user_id`)    VALUES ('$type' ,'$quantity' ,'$des', '$id')";
  
  
  $r = mysqli_query($con,$q);
}
?>