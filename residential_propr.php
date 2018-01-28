<?php
$id=$_GET["id"];
$pro_num=$_GET["pro_num"];

?> 
<!DOCTYPE html>
<html>
	<head>
		<title>Contractor's page</title>
		<meta charset="UTF-8">
      <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="style5.css">
	</head>
	<body style="background:#1d7070">
		<div class="container col-md-offset-4 col-md-4 " id="back"> 
			<h1>Offer Proposal </h1>
		</div>
		<div class="container col-md-offset-4 col-md-4 " id="main">
			<br>
			<br>
			<form method="post" action="offer_data.php?id=<?php echo $id;?>&pro_num=<?php echo $pro_num;?>">
			<div class="form group">
				<label for "name" class="control-label" id="1">Amount Required</label>
				<input type="text" name="amount" class="form-control" placeholder="amount" id="charge"/>
			</div>
			<br>
			<div class="form group">
				<label for "time" class="control-label" id="1">Time Required</label>
				<input type="text" name="time" class="form-control" placeholder="time in minutes" id="time"/>
			</div>
			<br>
			<br>
			<input type="submit" value="submit" background="#1d7070" name="submit" style="margin-left:130px"/>
			<br><br>
			<a href="#" ><p style="margin-left:130px">Go back</p></a>
			</form>
		</div>
	</body>
</html>