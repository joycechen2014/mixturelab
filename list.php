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
//show the list of users;
function lists($result,$rownum){
	if($result){
		echo "<h1><b>Users from my database</b></h1>";
		echo '<table class="table">
		<thead>
		<tr>
		<th scope="col">#</th>
		<th scope="col">First Name</th>
		<th scope="col">Last Name</th>
		<th scope="col">Email</th>
		<th scope="col">Home Phone</th>
		<th scope="col">Cell Phone</th>	
		<th>Home Adderss</th>
		</tr></thead>';
	
		while($row = mysqli_fetch_array($result)){
			echo '<tbody><tr><th scope="row">'. $rownum .'</th><td>' .
			$row['firstname'] .'</td><td>' .
			$row['lastname'] .'</td><td>' .
			$row['email'] .'</td><td>' .
			$row['home_phone'] .'</td><td>' .
			$row['cell_phone'] .'</td><td>' .
			$row['homeaddress'] .'</td><td>';
			echo '</tr></tbody>';
			$rownum++;
		}
		if (mysqli_num_rows($result)==0){
			echo '<tr><td align="left">';
			echo "No Such Result!";
			echo '</td></tr>';
		}
		echo '</table>';
		echo '<div class="col-md-4 text-center"> <a href="index.php" class="btn btn-primary" role="button">Home Page</a> ';
		echo '<a href="adduser.html" class="btn btn-primary" role="button">Add User</a> ';
		echo '<a href="searchuser.html" class="btn btn-primary" role="button">Search User</a> </div>';
    }
    else{		
		echo "Couldn't execute the SQL!!!";
		echo mysqli_error($dbc);
		mysqli_close($dbc);
	}
}

//main();
if(isset($_POST['submit'])){
	$data_missing = array();
	if(empty($_POST['searchby'])){
	    $data_missing[]='Search By';
    }
    else{
	    $searchby = trim($_POST['searchby']);
	}

	if(empty($_POST['Search'])){
	   $data_missing[]='Search';
    }
    else{
	   $value = trim($_POST['Search']);
    }

    if(empty($data_missing)){
       require_once('mysqli_connect.php');
       $querysql = "SELECT firstname,lastname,homeaddress,email,home_phone,cell_phone from users where {$searchby} = '{$value}'";
	   $result = $dbc->query($querysql);
	   $rownum = 1;
	   lists($result,$rownum);  //Call function lists;
	}
	else{
		echo 'You need to enter the following data: <br/>';
	    foreach($data_missing as $missing){
	       echo "<b>$missing</b><br />";		   
		}

	}
}
else{
    require_once('mysqli_connect.php');
	$querysql = "SELECT firstname,lastname,homeaddress,email,home_phone,cell_phone from users";
	$result = $dbc->query($querysql);
	$rownum = 1;
	lists($result,$rownum);
}
	
//users from Zhekai's web
echo "<h1><b>Users from Zhekai Hu</b></h1>";
echo '<table class="table">
		<thead>
		<tr>
		<th scope="col">#</th>
		<th scope="col">First Name</th>
		<th scope="col">Last Name</th>
		<th scope="col">Email</th>
		<th scope="col">Home Phone</th>
		<th scope="col">Cell Phone</th>	
		<th>Home Adderss</th>
		</tr></thead>';
//include_once "./php_api/callAPI.php";
//$get_data = callAPI('GET', 'http://localhost/mixturelab/php_api/user/read.php', false);
// Curl 
//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
$url ='http://www.hzksv.com/mylist/';
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);

// Only For website http://52.91.189.80/testcurl/ 
// Need parse html tags
preg_match("/<article[^>]*>(.*?)<p>/is", $result, $matches);
$result     = $matches[1];
$order   = array("&#8220;", "&#8221;", "&#8243;");
$replace = '"';

// Processes \r\n's first so they aren't converted twice.
$result = str_replace($order, $replace, $result);
$result = str_replace("[[", "[", $result);
$result = str_replace("]]", "]", $result);

//$result = preg_replace('/HTTP(.*)alive/s',"",$result);

// Closing
curl_close($ch);

// Will dump a beauty json :3


$responseArray = json_decode($result, true);


//$responseArray = json_decode($get_data, true);
foreach($responseArray as $num =>$info)
{
	echo '<tbody><tr><th scope="row">'. $rownum .'</th><td>' ;

	foreach($info as $key => $value){
	  		echo $value .'</td><td>' ;  	
	}
	$rownum++;
	echo '</tr></tbody>';
}

	

?>


