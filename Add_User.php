<title>Mixture Lab</title>
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
</head>
<?php
error_reporting(E_ALL & ~E_NOTICE);
function valid_phone($phone){
	if ( !preg_match( "/^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$/", $phone ) ){
		    echo 'Invalid Phone Number <br/>';
			echo 'A valid phone number must be in the form <br>';
			echo '<strong>(XXX)XXX-XXXX</strong><br />';
            echo '<div class="col-md-4 text-center"> <a href="index.php" class="btn btn-primary" role="button">Home Page</a> ';
            echo '<a href="adduser.html" class="btn btn-primary" role="button">Add User</a> ';
            echo '<a href="searchuser.html" class="btn btn-primary" role="button">Search User</a> </div>';
            die(); // terminate script execution	
	}
}

if(isset($_POST['submit'])){
	$data_missing = array();
	if(empty($_POST['firstname'])){
		$data_missing[]='first name';
		echo $_POST['firstname'];
	}
	else{
		$first_name = trim($_POST['firstname']);
	}
	
	if(empty($_POST['lastname'])){
		$data_missing[]='last name';
	}
	else{
		$last_name = trim($_POST['lastname']);
	}
	
	if(empty($_POST['cellphone'])){
		$data_missing[]='cell phone';
	}
	else{
		$cell_phone = trim($_POST['cellphone']);
		valid_phone($cell_phone);

	}
    if(!empty($_POST['homephone'])){
    $home_phone = trim($_POST['homephone']); 
    valid_phone($home_phone);	
	}
	
	if(empty($_POST['email'])){
		$data_missing[]='email';
	}
	else{
		$email = trim($_POST['email']);
	}
	
	
	$homeaddress = trim($_POST['homeaddress']);
	
	if(empty($data_missing)){
       require_once('mysqli_connect.php');
       $insert = "INSERT INTO users (id,firstname,lastname,homeaddress,email,home_phone,cell_phone) VALUES(0,?,?,?,?,?,?)";
       $statment = mysqli_prepare($dbc,$insert);
       mysqli_stmt_bind_param($statment,"ssssss",$first_name,$last_name,$homeaddress,$email,$home_phone,$cell_phone);
       mysqli_stmt_execute($statment);
       $affected_rows = mysqli_stmt_affected_rows($statment);
        if($affected_rows==1){
		   echo '<div class="alert alert-warning"> <strong> Successfully!</strong> User Add Sucessfully! </div>';
           mysqli_stmt_close($statment);
	       mysqli_close($dbc);
        }
	    else{
			echo '<div class="alert alert-danger" role="alert"><strong>User already exists! </strong>'; 
			echo mysqli_error($dbc);
			echo '. </div>';
		   mysqli_stmt_close($statment);
	       mysqli_close($dbc);
	    }

    }
    else{
	    echo 'You need to enter the following data <br/>';
	    foreach($data_missing as $missing){
		     echo "$missing<br />";
	    }
    }
}
else{
	echo "form dosen't submit!<br/>";
}
echo '<div class="col-md-4 text-center"> <a href="index.php" class="btn btn-primary" role="button">Home Page</a> ';
echo '<a href="adduser.html" class="btn btn-primary" role="button">Add User</a> ';
echo '<a href="searchuser.html" class="btn btn-primary" role="button">Search User</a> </div>';
?>