<?php
$my_dir = dirname ( __FILE__ );
require_once $my_dir . '/CsvParser.php';
require_once $my_dir . '/MapItem.php';

//session_start ();
?>
<html>
<head>
<title>Parking Finder Bahaye</title>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
	integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
	crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
	integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
	crossorigin="anonymous"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
	integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
	crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	
	<!--  Nav Bar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="../index.php"> <img
			src="logo.jpg" width="40" height="40"
			class="d-inline-block align-top" alt=""> Hackatown 2018 - Pablo
		</a>
	</nav>
	<br>
	<br>
	<br>
	<div  class="contrainer" >
	<?php 
	$csv = "OpenData/pabloData.csv";
	
	$csvReader = new CsvParser();
	//print_r($csvReader->parseFileToMapItem($csv));
	?>
	</div>
	<br>
	<br>
	
	<div class="contrainer" style="height: 200px;width: 400;">
	
	<a class="btn btn-danger btn-lg" href="pablo.php" role="button">Go to Map</a>
	
	<form action="pablo.php" method="get">
	<input type="hidden" name="action" value="10/10" />
	<label for="address">Address</label> 
	<input type="text" class="form-control" name="address" 
	id="address" placeholder="Enter address here" /> 
	<small id="nameHelp" class="form-text text-muted">
	Enter the address of your destination.
	</small>
	<br> <input type="submit" class="btn btn-danger" value="Submit Pablo!" /> <br>
	</form>
	
	</div>
	
	
	<!-- Bootstrap Container -->
	<div class="container" style="height: 600px;">
  		<?php	//Load a URLMS from persistence
				//$persistence = new Persistence ( dirname ( __FILE__ ) . "/persistence/data.txt" );
				//$_SESSION ['persistence'] = $persistence;
				//$urlms = $persistence->loadDataFromStore ();
				?>
  		
  		<!-- Carousel -->
		<br>
		<div id="carouselExampleIndicators" class="carousel slide"
			data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0"
					class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="jumbotron home-page-elem"
						style="text-align: center; height: 600px;">

						<h1 class="display-3">Staff</h1>
						<hr class="my-4" style="width: 50%;">
						<p>
				  		Total Number of Staff: <?php //echo $urlms->getLab_index(0)->numberOfStaffMembers();?>
				  		<br>
				  		
				  		<br> <br>
						</p>
						<p class="lead">
							<a class="btn btn-danger btn-lg" href="view/StaffView.php"
								role="button">Go to Staff</a>
						</p>

					</div>
				</div>
				<div class="carousel-item">
					<div class="jumbotron home-page-elem"
						style="text-align: center; height: 600px;">
						<h1 class="display-3">Inventory</h1>
						<hr class="my-4" style="width: 50%;">
						<p>
				  		Total Number of Inventory Items: <?php //echo $urlms->getLab_index(0)->numberOfInventoryItems() . "<br>";?>
				  		Total Value of Inventory Items:
				  		
						<p class="lead">
							<a class="btn btn-danger btn-lg" href="view/InventoryView.php"
								role="button">Go to Inventory</a>
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<div class="jumbotron home-page-elem"
						style="text-align: center; height: 600px;">
						<h1 class="display-3">Funding</h1>
						<hr class="my-4" style="width: 50%;">
						<p>
							<!-- Checking total net balance of laboratory -->
				  		Net Balance of Laboratory: 
				  		
				  		<!-- Checking total number of accounts -->
				  		Total Number of Accounts: <?php //echo $urlms->getLab_index(0)->numberOfFundingAccounts();?>
				  		<br>
							<!-- Checking how many accounts have a negative balance -->
				  		

						<p class="lead">
							<a class="btn btn-danger btn-lg" href="view/FundingView.php"
								role="button">Go to Funding</a>
						</p>
					</div>
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators"
				role="button" data-slide="prev"> <span
				class="carousel-control-prev-icon" aria-hidden="true"></span> <span
				class="sr-only">Previous</span>
			</a> <a class="carousel-control-next"
				href="#carouselExampleIndicators" role="button" data-slide="next"> <span
				class="carousel-control-next-icon" aria-hidden="true"></span> <span
				class="sr-only">Next</span>
			</a>

		</div>
	</div>
	<br>
	<br>
	<br>
	<div class="container">
		<!-- Links to Staff, Inventory, Funding Pages -->
		<div class="row">
			<div class="col-sm-4">
				<a href="view/StaffView.php"> <img class="card-img-top menu"
					src="../image/Personnel_Red.png" alt="Card image cap">
				</a>
			</div>

			<div class="col-sm-4">
				<a href="view/InventoryView.php"> <img class="card-img-top menu"
					src="../image/Utility_Red.png" alt="Card image cap">
				</a>
			</div>

			<div class="col-sm-4">
				<a href="view/FundingView.php"> <img class="card-img-top menu"
					src="../image/Fiance_Red.png" alt="Card image cap">
				</a>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<br>
	<br>
	<br>
	<footer>
		<div class="card bg-light mb-12">
			<div class="card-body">
				<center>
					<p class="card-text">Montreal, QC, Canada</p>
					<p class="card-text">Copyright &copy; URLMS Team 8, 2017</p>
					<p class="card-text">Created by Feras Al Taha and Justin Lei</p>
				</center>
			</div>
		</div>
	</footer>
</body>
<html />
