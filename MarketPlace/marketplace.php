<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Market Place</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
		<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="../css/owl.carousel.min.css">
		<link rel="stylesheet" href="../css/owl.theme.default.min.css">
		<link rel="stylesheet" href="../css/magnific-popup.css">
		<link rel="stylesheet" href="../css/aos.css">
		<link rel="stylesheet" href="../css/ionicons.min.css">
		<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="../css/jquery.timepicker.css">
		<link rel="stylesheet" href="../css/flaticon.css">
		<link rel="stylesheet" href="../css/icomoon.css">
		<link rel="stylesheet" href="../css/style.css">
	    <link rel="stylesheet" href="../css/bootstrap.min.css">
		
	</head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
				<a class="navbar-brand" href="#top" id="top">Market Place</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="#top" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="#products" class="nav-link">Products</a></li>
						<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
						<li class="nav-item"><a href="#news" class="nav-link">News</a></li>
						<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
						<?php
						if(!isset($_COOKIE["username"])){
						echo '<li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Log in</a></li>';}
						else {
								echo '<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">';
							echo 'Hi,';
								echo $_COOKIE["username"];
								echo '</a>
									<div  class="dropdown-menu">
									<a class="dropdown-item" href="user_logout.php" >Logout</a>
									</div>
									</li>';	
						}
                          ?>						
					</ul>
				</div>
			</div>
        </nav>
    <!-- END nav -->
		<div class="hero-wrap js-fullheight" style="background-image: url('../images/Italy.jpg');">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
						<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Give More Than You Think </h1>
					</div>
				</div>
			</div>
		</div>    

		
	<section class="ftco-section" id="products">
		<div class="container">

			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm col-md-6 col-lg-3 ftco-animate">
		    			<div class="destination">
		    				<a href="gene.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../images/Austrilia.jpg);">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="icon-link"></span>
		    					</div>
		    				</a>
		    				<div class="text p-3">
		    					<div class="d-flex">
		    						<div class="one">
				    					<h3><a href="gene.php">GO,Gene</a></h3>
				    					<p class="rate">
				    						<i class="icon-star"></i>
				    						<i class="icon-star"></i>
				    						<i class="icon-star"></i>
				    						<i class="icon-star"></i>
				    						<i class="icon-star-o"></i>
				    						<span>8 Rating</span>
				    					</p>
			    					</div>
		    					</div>
		    					<p>Far far away, behind the word mountains, far from the countries</p>
		    					<p class="days"><span>2 days 3 nights</span></p>
		    					<hr>
		    						<p class="bottom-area d-flex">

		    							<span class="ml-auto"><a href="gene.php">Rate Us</a></span>
		    						</p>
		    				</div>
		    			</div>
		    		</div>
		    		<div class="col-sm col-md-6 col-lg-3 ftco-animate">
		    			<div class="destination">
		    				<a href="jaquelin.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../images/China.jpg);">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="icon-link"></span>
		    					</div>
		    				</a>
		    				<div class="text p-3">
		    					<div class="d-flex">
		    						<div class="one">
				    					<h3><a href="jaquelin.php">Jaquelin</a></h3>
				    					<p class="rate">
				    						<i class="icon-star"></i>
				    						<i class="icon-star"></i>
				    						<i class="icon-star"></i>
				    						<i class="icon-star"></i>
				    						<i class="icon-star-o"></i>
				    						<span>8 Rating</span>
				    					</p>
			    					</div>
		    					</div>
		    					<p>Far far away, behind the word mountains, far from the countries</p>
		    					<p class="days"><span>2 days 3 nights</span></p>
		    					<hr>
		    						<p class="bottom-area d-flex">
		    							
		    							<span class="ml-auto"><a href="jaquelin.php">Rate Us</a></span>
		    						</p>
		    				</div>
		    			</div>
		    		</div>
		    		<div class="col-sm col-md-6 col-lg-3 ftco-animate">
		    			<div class="destination">
		    				<a href="mixture.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../images/paris.jpg);">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="icon-link"></span>
		    					</div>
		    				</a>
		    				<div class="text p-3">
		    					<div class="d-flex">
		    						<div class="one">
				    					<h3><a href="mixture.php">MixtureLab</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    					</div>
		    					</div>
		    					<p>Far far away, behind the word mountains, far from the countries</p>
		    					<p class="days"><span>2 days 3 nights</span></p>
		    					<hr>
		    						<p class="bottom-area d-flex">

		    							<span class="ml-auto"><a href="mixture.php">Rate Us</a></span>
		    						</p>
		    				</div>
		    			</div>
		    		</div>
		    		<div class="col-sm col-md-6 col-lg-3 ftco-animate">
		    			<div class="destination">
		    				<a href="sushi.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../images/paris.jpg);">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="icon-link"></span>
		    					</div>
		    				</a>
		    				<div class="text p-3">
		    					<div class="d-flex">
		    						<div class="one">
				    					<h3><a href="mixture.php">Sushi</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    					</div>
		    					</div>
		    					<p>Far far away, behind the word mountains, far from the countries</p>
		    					<p class="days"><span>2 days 3 nights</span></p>
		    					<hr>
		    						<p class="bottom-area d-flex">

		    							<span class="ml-auto"><a href="sushi.php">Rate Us</a></span>
		    						</p>
		    				</div>
		    			</div>
		    		</div>					
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
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
  
 
	<form action="login.php" method="POST">
		<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
					</div>
					<div class="modal-body mx-3">
						<div class="md-form mb-5">
							<i class="fas fa-envelope prefix grey-text"></i>
								<input type="name" name="defaultForm-name" class="form-control validate">
									<label data-error="wrong" data-success="right" for="defaultForm-name">Username</label>
						</div>

						<div class="md-form mb-4">
							<i class="fas fa-lock prefix grey-text"></i>
								<input type="password" name="defaultForm-pass" class="form-control validate">
									<label data-error="wrong" data-success="right" for="defaultForm-pass">password</label>
						</div>
					</div>
					<div class="modal-footer d-flex justify-content-center">
						<button class="btn btn-default">log in</button>
					</div>
					    <!-- Register -->
					<p>Not a member?
						<a href="" class="nav-link" data-toggle="modal" data-dismiss="modal" data-target="#signup">Register</a>
					</p>
					<!-- Social login -->
					<p>or sign in with:</p>

					<a type="button" class="light-blue-text mx-2">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a type="button" class="light-blue-text mx-2">
						<i class="fab fa-twitter"></i>
					</a>
					<a type="button" class="light-blue-text mx-2">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a type="button" class="light-blue-text mx-2">
						<i class="fab fa-github"></i>
					</a>
				</div>
			</div>
		</div>
	</form>
	
	<form action="register/register.php" method="POST">
		<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<h4 class="modal-title w-100 font-weight-bold">Sign Up</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
					</div>
					<div class="modal-body mx-3">
						<div class="md-form mb-4">
							<i class="fas fa-envelope prefix grey-text"></i>
								<input type="name" name="defaultForm-name" class="form-control validate" placeholder="Name">
						</div>
						<div class="md-form mb-4">
							<i class="fas fa-lock prefix grey-text"></i>
								<input type="email" name="defaultForm-email" class="form-control validate" placeholder="Email">
									
						</div>
						<div class="md-form mb-4">
							<i class="fas fa-lock prefix grey-text"></i>
								<input type="password" name="defaultForm-pass" class="form-control validate" placeholder="Password">
						</div>
						<div class="md-form mb-4">
							<i class="fas fa-lock prefix grey-text"></i>
								<input type="password" name="defaultForm-confirm-pass" class="form-control validate" placeholder="Confirm Password">
						</div>						
						<div class="md-form mb-4">
							<i class="fas fa-lock prefix grey-text"></i>
								<input type="phone" name="defaultForm-phonenum" class="form-control validate" placeholder="Phone Number">
						</div>
					</div>
					<div class="modal-footer d-flex justify-content-center">
						<button class="btn btn-default">Sign Up</button>
					</div>
<p>or sign up with:</p>

    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-github"></i>
    </a>

				</div>
			</div>
		</div>
	</form>	
    
	
	
  </body>
</html>