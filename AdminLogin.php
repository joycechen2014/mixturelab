<!DOCTYPE html>
<html lang="en">




<?php 
error_reporting(E_ALL & ~E_NOTICE);

$name =  $_POST["defaultForm-name"];
$pwd  =  $_POST["defaultForm-pass"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($name);
  $pwd = test_input($pwd );
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($name == "admin" && $pwd == "111222")
{
	header('Location:list.php');
	//include "list.php"; 
setcookie("username",$name);
setcookie("Pwd",$pwd);
}
else

	echo "<script>alert('username or password is wrong!');location.href='index.php';</script>";


?>
</html>