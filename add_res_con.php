<?php
//header("location:error.php");	
session_start();
include ("dbconfig.php") ;
if(isset($_POST["submit"]))
{
//header("location:error.php");
$email=$_SESSION['email'];
   
  $q= "SELECT * FROM signup WHERE email_id='$email' ";
    $r = mysqli_query($con,$q);
  echo mysqli_error($con);
  $row=mysqli_fetch_array($r);
  $id=$row[0];
  $size= $_POST["size"];
  $storey = $_POST["storeys"];
  $des = $_POST["des"];
 
     //$email="aaaaaa";
	 
  echo $id;	
	
  
  $q= "INSERT INTO user_show(`size`, `storey`, `description`, `user_id`)   VALUES ('$size'  ,'$storey' , '$des','$id')";
  
  
  $r = mysqli_query($con,$q);
  header("location:web.php");
}
?>