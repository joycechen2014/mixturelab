<?php

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
		
//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
$url ='http://mixturelab.com/php_api/user/read.php';
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);

curl_close($ch);

// Will dump a beauty json :3
$resultArray = json_decode($result, true);		
		
foreach($resultArray as $num =>$info)
{
	echo '<tbody><tr><th scope="row">'. $rownum .'</th><td>' ;

	foreach($info as $key => $value){
	  		echo $value .'</td><td>' ;  	
	}
	$rownum++;
	echo '</tr></tbody>';
}
?>