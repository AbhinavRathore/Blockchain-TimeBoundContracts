<?php

session_start();
include ("dbconfig.php") ;
if(isset($_POST["submit"]))
{
//header("location:error.php");
$type=$_POST["type"];
  $size= $_POST["size"];
  $storey = $_POST["storeys"];
  $des = $_POST["des"];
  $id=1;
     echo $type;
	 echo $size;
	 echo $storey;
	 echo $des;
  	
	
  
   $q= "INSERT INTO user_comm( `type`, `size`, `storey`, `des`, `id`)  VALUES ('$type'  ,'$size' , '$storey','$des','$id')";
  
  //
  
  
  $r = mysqli_query($con,$q);
  die(mysql_error());
//  header("location:error.php");
}
?>