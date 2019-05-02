<!DOCTYPE html>
<html lang="en">
	<head>
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
	</head>
<?php
  include_once 'register/database.php';
  include_once 'register/user.php';

$name = $_POST["defaultForm-name"];

$password = $_POST['defaultForm-pass'];

  $database = new Database();
  $db = $database->connect();
  $user = new User($db);
  $user->name = $name;
 // $user->password = password_hash($password,PASSWORD_DEFAULT);
  $result = $user->read();
  $num = $result->rowCount();

  if ($num >0){
if ($password == $result->fetch()[0]){

	echo "<script>alert('Congratulations!! !');location.href='marketplace.php';</script>";

} else {
    	echo "<script>alert('password is wrong!');location.href='marketplace.php';</script>";
}
	  
  }else{
       echo "<script>alert('username is wrong!');location.href='marketplace.php';</script>";
  }
  setcookie("username", $name, time() + 3600, "/");
  setcookie("username", $name, time() + 3600, "/","www.hzksv.com");
  setcookie("username", $name, time() + 3600, "/","mataasta.org");
  setcookie("username", $name, time() + 3600, "/","www.jacquelineleenet.com");
  setcookie("username", $name, time() + 3600, "/","www.mixturelab.com");
?>
</html>