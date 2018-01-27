<?php
$id=$_GET["id"];
$pro_num=$_GET["pro_num"];
include ("dbconfig.php") ;
if(isset($_POST["submit"]))
{
	$domain=1;
	$con_id=3;
  $amount = $_POST["amount"];
  $time = $_POST["time"];

  
  echo $id;echo $pro_num;echo $domain;echo $con_id;echo $amount;echo $time;
  
  $q= "INSERT INTO offers( `domain`, `con_id`, `cus_id`, `pro_num`, `amount`, `time`)  VALUES ('$domain','$con_id' ,'$id','$pro_num','$amount','$time')";
  
  $r = mysqli_query($con,$q);
 header("location:contractor.php");
   
}
?> 