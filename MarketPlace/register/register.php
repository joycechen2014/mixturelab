<?php
    include_once("database.php");
	include_once("user.php");

    if (empty($_POST)) {
        exit("post_max_size! <br>");
    }

    $password = $_POST['defaultForm-pass'];
    $confirmPassword = $_POST['defaultForm-confirm-pass'];
    if ($password != $confirmPassword) {
        exit("Password is not the same!!");
    }

//$password = hash($password, PASSWORD_DEFAULT);

    $userName = $_POST['defaultForm-name'];
    $phone = $_POST['defaultForm-phonenum'];
	$email = $_POST['defaultForm-email'];

 
  $database = new Database();
  $db = $database->connect();
  $user = new User($db);
  $user->name = $userName;
  $user->password=$password;
  $user->phone = $phone;
  $user->email= $email;
  
  $result=$user->read_byname();

  $num = $result->rowCount();

  if($num>0 ){

	  echo "user name has been used!";
	  return 0;
  }
 
  if($user->insert()){

	  echo "<script>alert('user created!!! !');location.href='../marketplace.php';</script>";
  }
  else{

	  echo "something wrong!";
  }
  
?>