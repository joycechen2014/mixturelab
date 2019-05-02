<!DOCTYPE html>
<html lang="en">
  <head>
		<title>Mixturelab</title>
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
	</head>
	<body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark " id="ftco-navbar">
		    <div class="container">
				<a class="navbar-brand" href="index.php" >Mixturelab</a>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="marketplace.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="index.php#products" class="nav-link">Products</a></li>
						<li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>
						<li class="nav-item"><a href="index.php#news" class="nav-link">News</a></li>
						<li class="nav-item"><a href="index.php#contact" class="nav-link">Contact</a></li>
						<?php
							if(!isset($_COOKIE["username"])){
								echo '<li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Log in</a></li>';
								echo '<li class="nav-item"><a href="" class="nav-link"></a></li>';
							}
							else {
								echo '<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">';
								echo 'Hi,';
								echo $_COOKIE["username"];
								echo '</a>
									<div  class="dropdown-menu">
									<a class="dropdown-item" href="user_logout.php" >Logout</a>
									</div>
									</li>';	
							}?>
							</ul>
				</div>
			</div>
        </nav>

		
		
		<section class="ftco-section ftco-degree-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
								<h2>Mixturelab</h2>
								<span><a href="http://www.mixturelab.com"> http://www.mixturelab.com</a></span>
								<p class="rate mb-5">
									<span class="star">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										8 Rating
									</span>
								</p>
								<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
								<div class="d-md-flex mt-5 mb-5">
									<ul>
										<li><a href="#"><u> Austrilia</u></a></li>
										<li><a href="#"><u>China</u></a></li>
										<li><a href="#"><u>Japan</u></a></li>
										<li><a href="#"><u>Italy</u></a></li>
										<li><a href="#"><u>Russia</u></a></li>
									</ul>
									<ul class="ml-md-5">
										<li><a href="#"><u>India</u></a></li>
										<li><a href="#"><u>Thailand</u></a></li>
										<li><a href="#"><u>Turkey</u></a></li>
										<li><a href="#"><u>Greece</u></a></li>
										<li><a href="#"><u>Paris</u></a></li>
									</ul>
								</div>
								<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
							</div>
						</div>
                    </div>
				</div>	
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">


          			<h4 class="mb-4">Review &amp; Ratings</h4>
					<h6>Choose a product:</h6>
					<select class="selectpicker" >
						<option disabled selected value> -- select an option -- </option>
						<option>Austrilia</option>
						<option>China</option>
						<option>Japan</option>
						<option>Italy</option>
						<option>India</option>
						<option>Thailand</option>
						<option>Turkey</option>
						<option>Greece</option>
						<option>Russia</option>
						<option>Paris</option>						
					</select>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-rating">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">
											<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 5 Ratings</span></p>
										</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									    <label class="form-check-label" for="exampleCheck1">
									    	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 4 Ratings</span></p>
									    </label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									    <label class="form-check-label" for="exampleCheck1">
											<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 3 Ratings</span></p>
									    </label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									    <label class="form-check-label" for="exampleCheck1">
											<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 2 Ratings</span></p>
									    </label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									    <label class="form-check-label" for="exampleCheck1">
											<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 1 Ratings</span></p>
										</label>
								</div>
								<div class="comment-form-wrap pt-5">
									<div class="form-group">
										<label for="message">Leave a Comment</label>
										<textarea name="" id="message" cols="40" rows="8" class="form-control"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
									</div>
							</form>
          				</div>
          			</div>
          		</div>
			</div> <!-- .col-md-8 -->
		</section> <!-- .section -->

		
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