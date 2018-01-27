<?php
include("dbconfig.php");
$id=1;
 $q = "SELECT * FROM `user_show` WHERE 1";
 $r = mysqli_query($con,$q);
$_SEESION['section'] ="software";
 //echo  mysqli_num_rows($r);
?>
<!doctype html>
<html lang="en">
<head>
		<title>Login V17</title>
	<meta charset="UTF-8">
 <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="style_contractor.css">

</head>

<body style="background-color:white">
	
	<br>
	<div class="container-fluid" id="header">
	</div>
    <br><br>
	<!--<div class="container-fluid" id="con">-->
	<div class="container" id="con_inside">
	<?php
	 while($row = mysqli_fetch_array($r))
	 {  
		$var=$row['user_id'];
		$qq = "SELECT * FROM `signup` WHERE key_index='$var'";
		$rr = mysqli_query($con,$qq);
		//echo  mysqli_num_rows($rr);
		$we = mysqli_fetch_array($rr);
        $v="residential_propr.php?id=".$id."&pro_num=".$row[0];
		echo "<blockquote><h4>Name:".$we[1]."</h4><h4>Size In Sq ft:".$row[1]."</h4><h4>Number of Storeys:".$row[2]."</h4><h4>Description:".$row[3]."</h4><a href=".$v.">Propose Offer</a></blockquote><br>" ;
		
	}
	?>
	
		
	</div>

	
	<hr>
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
</body>
</html>