<?php
require_once('../mysqli_connect.php');
$querysql = "SELECT firstname,lastname,homeaddress,email,home_phone,cell_phone from users";
$response = @mysqli_query($dbc,$querysql);
if($response){
	echo '<table align="left" cellspacing = "5" cellpadding="8">
	<tr><td align="left"><b>First Name</b></td>
	<td align="left"><b>Last Name</b></td>
	<td align="left"><b>Email</b></td>
	<td align="left"><b>Home Phone</b></td>
	<td align="left"><b>Cell Phone</b></td>	
    <td align="left"><b>Home Adderss</b></td>
	</tr>';
	
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">' .
		$row['firstname'] .'</td><tr><td align="left">' .
		$row['lastname'] .'</td><tr><td align="left">' .
		$row['email'] .'</td><tr><td align="left">' .
		$row['home_phone'] .'</td><tr><td align="left">' .
		$row['cell_phone'] .'</td><tr><td align="left">' .
		$row['homeaddress'] .'</td><tr><td align="left">';
		echo '</tr>';
	}
	echo '</table>';
}
else{
	echo "Couldn't execute the SQL!!!";
	echo mysqli_error($dbc);
}
mysqli_close($dbc);
	
?>