<?php

session_start();
include ("dbconfig.php") ;
if(isset($_POST["submit"]))
{
//header("location:error.php");
$type=$_POST["type"];
 
  
  $des = $_POST["des"];
  $id=1;
     //echo $type;

   $q= "INSERT INTO user_soft( `type`,`desp`, `user_id`)  VALUES ('$type' ,'$des','$id')";
 
  $r = mysqli_query($con,$q);
  
 
}
?>