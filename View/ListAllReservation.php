<?php 
include '../Control/ListAllReservationCheck.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" width="800">
<tr>
	<td><b>Name:</b></td>
	<td><b>Email:</b></td>
	<td><b>Number:</b></td>
	<td><b>Address:</b></td>
	<td><b>Ticket Number:</b></td>
	<td><b>Ticket Price:</b></td>
</tr>
	<?php
	$fileData=file_get_contents("../Data/reservation.json");
	$phpObj=json_decode($fileData,true);
	foreach ($phpObj as $value) 
	{
		echo '<tr>
		<td>'.$value["customername"].'</td>
		<td>'.$value["email"].'</td>
		<td>'.$value["number"].'</td>
		<td>'.$value["address"].'</td>
		<td>'.$value["ticketnum"].'</td>
		<td>'.$value["ticketprice"].'</td>
		</tr>';
	}
	?>
</tr>				
</table>
</body>
</html>