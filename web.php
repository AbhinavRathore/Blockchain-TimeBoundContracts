<?php
include("dbconfig.php");
$id=1;
 $q = "SELECT * FROM `offers` WHERE cus_id='$id'";
 $r = mysqli_query($con,$q);

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
	<link rel="stylesheet" type="text/css" href="style2.css">

</head>

<body style="background-color:white">
	
	<br>
	<div class="container-fluid" id="header">
	</div>
	<div id="slide" class="row">
		
		<div class="col-md-offset-4">
		<div class="w3-content w3-section" style="max-width:500px">
		  <img class="mySlides" src="p1.jpg" style="width:100%">
		  <img class="mySlides" src="p2.jpg" style="width:100%">
		  <img class="mySlides" src="p3.jpg" style="width:100%">
		</div></div>

		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			   x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 2000); // Change image every 2 seconds
		}
		</script>
	</div>
			<button class="accordion">Hey!!You Got <?php echo mysqli_num_rows($r);?> Contact Proposals. Click Here to View Them!</button>
		<div class="panel">
	<?php
	 while($row = mysqli_fetch_array($r))
	 {  
			echo "<div class='container' style='background-color:#b6efef'>
				<h5>Contract Offered for Proposal Number:".$row[3]."</h5>
				<h5>Contract offered by:".$row[1]."</h5>
				<h5>Asking Price:".$row[5]."</h5>
				<h5>Time Required for contract completion:".$row[6]."</h5>
			</div>";
			echo "<button class='btn btn-primary' style='margin-left:700px'>Accept Contract</button>";
			echo "<hr><br>";
	}
	?>		</div>

	<div class="container-fluid" id="bl1">
		<div class="col-md-4 col-md-offset-1" id="pic"><a href="res_house_contract.php"><img src="cons.png" alt="Smiley face" id="im"> </a> </div>
		<div class="col-md-4 col-md-offset-2" id="pic"><a href="#"><img src="cons.png" alt="Smiley face" id="im"> </a> </div>
	</div>
	<div class="container-fluid" id="bl2">
		<div class="col-md-4 col-md-offset-1" id="pic"><a href="#"><img src="cons.png" alt="Smiley face" id="im"> </a> </div>
		<div class="col-md-4 col-md-offset-2" id="pic"><a href="#"><img src="cons.png" alt="Smiley face" id="im"> </a> </div>
		
	</div>
	<div class="container-fluid" id="bl1">
		<div class="col-md-4 col-md-offset-1" id="pic"><a href="#"><img src="cons.png" alt="Smiley face" id="im"> </a> </div>
		<div class="col-md-4 col-md-offset-2" id="pic"><a href="#"><img src="cons.png" alt="Smiley face" id="im"> </a> </div>
	</div>
	<div class="jumbotron">
	
	</div>
	<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight){
		  panel.style.maxHeight = null;
		} else {
		  panel.style.maxHeight = panel.scrollHeight + "px";
		} 
	  });
	}
	</script>
	<hr>
	
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
</body>
</html>