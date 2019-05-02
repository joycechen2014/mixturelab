<?php
$id = 'russia';
require_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Russia</title>
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
					<h1>Russia</h1>
					<p>Russia (Russian: Росси́я, tr. Rossiya, IPA: [rɐˈsʲijə]), officially the Russian Federation[12] (Russian: Росси́йская Федера́ция, tr. Rossiyskaya Federatsiya, IPA: [rɐˈsʲijskəjə fʲɪdʲɪˈratsɨjə]), is a transcontinental country in Eastern Europe and North Asia.[13] At 17,125,200 square kilometres (6,612,100 sq mi),[14] Russia is by far or by a considerable margin the largest country in the world by area, covering more than one-eighth of the Earth's inhabited land area,[15][16][17] and the ninth most populous, with about 146.77 million people as of 2019, including Crimea.[8] About 77% of the population live in the western, European part of the country. Russia's capital, Moscow, is one of the largest cities in the world and the second largest city in Europe; other major cities include Saint Petersburg, Novosibirsk, Yekaterinburg and Nizhny Novgorod. Extending across the entirety of Northern Asia and much of Eastern Europe, Russia spans eleven time zones and incorporates a wide range of environments and landforms. From northwest to southeast, Russia shares land borders with Norway, Finland, Estonia, Latvia, Lithuania and Poland (both with Kaliningrad Oblast), Belarus, Ukraine, Georgia, Azerbaijan, Kazakhstan, China, Mongolia and North Korea. It shares maritime borders with Japan by the Sea of Okhotsk and the U.S. state of Alaska across the Bering Strait. However, Russia recognises two more countries that border it, Abkhazia and South Ossetia, both of which are internationally recognized as parts of Georgia.
					</p>
					<img class="img-fluid" src="images/Russia.jpg"/>
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
