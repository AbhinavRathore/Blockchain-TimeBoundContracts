
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
	<link rel="stylesheet" type="text/css" href="Login_v17/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v17/css/main.css">
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
	</style>
</head>

<body style="background-color:white">
	
	<div class="jumbotron">
	
	</div>
	<div class="container" id="cont">
		<h1 id="heading">Hey!Want to build a house?</h2>
		<br><br><br><br>
		<hr>
		<h2 id="heading2">What do you expect?</h2>
		<form method="post" action="add_res_con.php">
    
			    <div class="form-group">
				<label for="size" class="control-label" id="l">Enter Plot Size In Sq.ft::</label>
				<input class="form-control" placeholder="Enter Size" type="text" id="size"  name="size" required/>
				</div>
				
				<div class="form-group">
				<label for="storeys" class="control-label" id="l">Email Number Of Storeys:</label>
				<input type="text" placeholder="Enter Number Of Storeys" class="form-control" id="storeys" name="storeys" required/>
				</div>
				
				<div>
				<label for="des" class="control-label" id="l">Description:</label>
				<input type="text" placeholder="" class="form-control" id="des" name="des" required/>
				</div>
				
			
				<input type="submit" value="submit" name="submit"/>
		</form>
		
	
	</div>
	<hr>
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
</body>
</html>