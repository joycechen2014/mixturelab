<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
  include_once '../config/Database.php';
  include_once '../objects/User.php';

  $database = new Database();
  $db = $database->connect();
  $user = new User($db);
  
  $result = $user->read();
  $num = $result->rowCount();

  if ($num >0){
	  $users_array= array();
	 // $users_array['data'] = array();
	  while($row = $result->fetch(PDO::FETCH_ASSOC)){
		  extract($row);
		  $user_item = array(
		  'firstname' => $firstname,
		  'lastname' => $lastname,
		  'email' => $email,
		  'home_phone' => $home_phone,
		  'cell_phone' => $cell_phone,
		  'homeaddress' => $homeaddress
		  );
		  array_push($users_array,$user_item);
	  }
	  echo json_encode($users_array);
	  
  }else{
	  echo json_encode(
	   array('message' =>'No Users Found')
	  );
  }
?>