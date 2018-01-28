<?php
 session_start();
$email=$_SESSION['email'];

include("dbconfig.php");
  $qqq= "SELECT * FROM signup WHERE email_id='$email' ";
    $rrrr = mysqli_query($con,$qqq);
  echo mysqli_error($con);
  $roww=mysqli_fetch_array($rrrr);
  $id=$roww[0];
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
	<script src="https://cdn.rawgit.com/ethereum/web3.js/develop/dist/web3.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
	<script>toAccount = 0 ;
web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
abi = JSON.parse('[{"constant":false,"inputs":[{"name":"index","type":"uint64"},{"name":"proposal","type":"uint64"}],"name":"checktransact","outputs":[{"name":"","type":"uint64"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"price","outputs":[{"name":"","type":"uint64"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"duration","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"i","type":"uint8"}],"name":"getPrice","outputs":[{"name":"","type":"uint64"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"index","type":"uint64"},{"name":"pal","type":"uint64"},{"name":"caution_money","type":"uint64"},{"name":"proposal","type":"uint64"},{"name":"time","type":"uint256"}],"name":"transact","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"contract_time","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"","type":"uint256"}],"name":"consumer","outputs":[{"name":"","type":"uint64"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"index","type":"uint64"}],"name":"register","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"}]');
realEstateContract = web3.eth.contract(abi);

contractInstance = realEstateContract.at('0x5b9b42d6e4b2e4bf8d42eba32d46918e10899b66');  </script>
</head>

<body style="background-color:white">
	
	<br>
	<div class="container-fluid" id="header">
	<div class="col-md-3" >
	<h2 id="aa">Blockchain Network</h2></div>
	 <div class="col-md-2" style="float:right"><a href="Login_v17/index2.php"><h2 id="white">LOGOUT</h2></a></div>
	</div>
	<div id="slide" class="row">
		
		<div class="col-md-offset-4">
		<div class="w3-content w3-section" style="max-width:500px">
		  <img class="mySlides" src="Images/bus-advertising.jpg" style="width:100%">
		  <img class="mySlides" src="Images/manufacturers.jpg" style="width:100%">
		  <img class="mySlides" src="Images/construction_advertise.jpg" style="width:100%">
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
			<button class="accordion"><h3 style="margin-left:320px;">Hey!!You Got <?php echo mysqli_num_rows($r);?> Contact Proposals. Click Here to View Them!</h3></button>
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
			echo "<button class='btn btn-primary' style='margin-left:700px' onclick='transact(".$row[1].",".$row[5]. ",".$row[3].",".$row[6].",".$id.")'>Accept Contract</button>";
			echo "<hr><br>";
	}
	?>		</div>

	<div class="container-fluid" id="bl1">
		<div class="col-md-4 col-md-offset-1" id="pic"><a href="res_house_contract.php"><img src="Images/images.jpg" alt="Smiley face" id="im"> </a> </div>
		<div class="col-md-4 col-md-offset-2" id="pic"><a href="commercial.php"><img src="Images/Commercial_const.jpg" alt="Smiley face" id="im"> </a> </div>
		<div class="col-md-4 col-md-offset-1" id="pic2"><h3 id="white">Residential House Contract</h3></div>
		<div class="col-md-4 col-md-offset-2" id="pic2"><h3 id="white">Commercial Buildings Contract</h3></div>
	</div>
	<div class="container-fluid" id="bl2">
		<div class="col-md-4 col-md-offset-1" id="pic"><a href="software.php"><img src="Images/software.jpg" alt="Smiley face" id="im"> </a> </div>
		<div class="col-md-4 col-md-offset-2" id="pic"><a href="manufacturing.php"><img src="Images/manufactures.jpg" alt="Smiley face" id="im"> </a> </div>
		<div class="col-md-4 col-md-offset-1"id="pic2" ><h3 >Softwares Contracts</h3></div>
		<div class="col-md-4 col-md-offset-2" id="pic2"><h3 >Goods Manufacturing Contracts</h3></div>
		
	</div>
	<div class="container-fluid" id="bl1">
		<div class="col-md-4 col-md-offset-4" id="pic"><a href="timebased.php"><img src="Images/delivery1.jpg" alt="Smiley face" id="im"> </a> </div>
		<div class="col-md-4 col-md-offset-4"id="pic2" ><h3 id="white">Goods Manufacturing Contracts</h3></div>
		
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
	<script>
		function transact(con_id,price,pr_num,time,toaccount){
			var caution=50;
			var aaa="0x5b9b42d6e4b2e4bf8d42eba32d46918e10899b66";
			contractInstance.register(0,{from:web3.eth.accounts[0],gas:3000000});
			contractInstance.register(toaccount,{from:web3.eth.accounts[toaccount],gas:3000000});
			contractInstance.transact(con_id,price,caution,pr_num,time,{from:web3.eth.accounts[toaccount],gas:3000000});
			alert("aaa");
			data=contractInstance.getPrice.call(0)["c"][0];
			$("#asd").html(data);
		}
			
	</script>
	<hr>
	<script src="contractfirm.js"></script>
	<div class="col-md-12 text-center small" id="foot1"><p>&copy; 2017 ampleSamples Group.All Rights Reserved.</p></div>
	<div class="col-md-12 text-center small" id="foot2"><p>MNNIT</p></div>
	<p id="asd"></p>
</body>
</html>