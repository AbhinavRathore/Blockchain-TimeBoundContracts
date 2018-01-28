<!doctype html>
<html lang="en">
<head>
		<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v17/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v17/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v17/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v17/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v17/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v17/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v17/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v17/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v17/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	
	<link href="https://fonts.googleapis.com/css?family=Supermercado+One" rel="stylesheet"> 
<!--===============================================================================================-->
	<style> 
		#cont{
			background-color:#ebfcf9;
			
		}
		#heading,#heading2{
			font-family: 'Supermercado One', cursive;
		}
		#des{
			height:50px;
		}
							#header{
		background-color:#1d7070;
		height:80px;
		width:90%;
		color:#fff;
		
}
 #white{
	color:#fff; 
 }
	</style>
</head>

<body style="background-color:white">
	
	<div class="container-fluid" id="header">
	<div class="col-md-3" >
	<h2 id="aa">Blockchain Network</h2></div>
	 <div class="col-md-2" style="float:right"><a href="Login_v17/index2.php"><h2 id="white">LOGOUT</h2></a></div>
	</div><br>
	<div class="container" id="cont">
		<h1 id="heading">Good at your doorstep!!</h2>
		<br><br><br><br>
		<hr>
		<h2 id="heading2">What do you expect?</h2>
		<form method="post" action="manufacturing_php.php">
    <div class="form-group">
				<label for="type" class="control-label" id="l">Enter type of good::</label>
				<input class="form-control" placeholder="Enter type of good" type="text" id="type"  name="type" required/>
				</div>
				<div class="form-group">
				<label for="quantity" class="control-label" id="l">Enter the quantity required::</label>
				<input class="form-control" placeholder="Enter the quantity required" type="text" id="quantity"  name="quantity" required/>
				</div>
				<div class="form-group">
				<label for="desp" class="control-label" id="l">Description:</label>
				<input type="text" placeholder="Description" class="form-control" id="desp" name="desp" required/>
				</div>
				<div>
				
			   
				
				
				
			
				<input type="submit" value="submit" name="submit"/>
		</form>
		
	
	</div>
	<hr>
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
</body>
</html>