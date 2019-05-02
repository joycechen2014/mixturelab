<!DOCTYPE html>
<html lang="en">

<head>
<title>Logout</title>
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
<?php
setcookie('username','',time() + 3600, "/");


?>
<body>
    <div class="alert alert-warning">
    <strong>Logout Successfully!</strong> You can <a href=""  data-toggle="modal" data-target="#modalLoginForm">Sign In</a> here! Or go back to <a href="marketplace.php" >Home Page</a>.
    </div>
	
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