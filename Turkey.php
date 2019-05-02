<?php
$id = 'turkey';
require_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Turkey</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
		<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/aos.css">
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="css/jquery.timepicker.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark " id="ftco-navbar">
		    <div class="container">
				<a class="navbar-brand" href="index.php" >Mixture Lab</a>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="index.php#products" class="nav-link">Products</a></li>
						<li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>
						<li class="nav-item"><a href="index.php#news" class="nav-link">News</a></li>
						<li class="nav-item"><a href="index.php#contact" class="nav-link">Contact</a></li>
						<?php
							if(!isset($_COOKIE["UserName"])){
								echo '<li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Users</a></li>';
								echo '<li class="nav-item"><a href="" class="nav-link"></a></li>';
							}
							else {
								echo '<li class="nav-item"><a href="list.php" class="nav-link">Users</a></li>';
								echo '<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">';
								echo 'Hi,';
								echo $_COOKIE["UserName"];
								echo '</a>
									<div  class="dropdown-menu">
									<a class="dropdown-item" href="adduser.html" >AddUser</a>
									<a class="dropdown-item" href="searchuser.html" >SearchUser</a>
									<a class="dropdown-item" href="logout.php" >Logout</a>
									</div>
									</li>';	
							}
						?>
					</ul>
				</div>
			</div>
        </nav>
		
		<section class="ftco-section">
			<div class="container">    
				<div class="col-sm-12 text-left"> 
					<h1>Turkey</h1>
					<p>Turkey (Turkish: Türkiye [ˈtyɾcije]), officially the Republic of Turkey (Turkish: Türkiye Cumhuriyeti [ˈtyɾcije dʒumˈhuɾijeti] (About this soundlisten)), is a transcontinental country located mainly in Western Asia, with a smaller portion on the Balkan Peninsula in Southeast Europe. East Thrace, located in Europe, is separated from Anatolia by the Sea of Marmara, the Bosphorous strait and the Dardanelles (collectively called the Turkish Straits).[7] Turkey is bordered by Greece and Bulgaria to its northwest; Georgia to its northeast; Armenia, the Azerbaijani exclave of Nakhchivan and Iran to the east; and Iraq and Syria to the south. Istanbul is the largest city, but more central Ankara is the capital. Approximately 70 to 80 per cent of the country's citizens identify as Turkish.[8][9] Kurds are the largest minority; the size of the Kurdish population is a subject of dispute with estimates placing the figure at anywhere from 12 to 25 per cent of the population.
					</p>
					<img class="img-fluid" src="images/Turkey.jpg"/>
				</div>
			</div>
		</section>
	    <footer class="ftco-footer ftco-bg-dark ftco-section">
		    <div class="container">
			    <div class="row">
				    <div class="col-md-12 text-center">
					    <p>Copyright &copy;2019 All rights reserved | <i class="icon-heart" aria-hidden="true"></i>  <a href="#top">Mixture Lab</a></p>
				    </div>
			    </div>
		    </div>
	    </footer>
		<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg>
	</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="js/main.js"></script>
		
    </body>
</html>

