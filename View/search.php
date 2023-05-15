<?php 
	session_start();
	if(empty($_SESSION['uname']))
	{
		header("Location: ../View/Login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Css/StyleSearch.css">
	<script src="../js/MyScript.js"></script>
</head>
<body>
	<div id="container">
		<p id="text">Train Information:</p>
		<div id="search-div">
		<input list="train-list" id="name" name="name" placeholder="Enter Train Name.." onkeyup="fetchTrain()">
		<datalist id="train-list">
			<option value="Agnibina Express">
			<option value="Banalata Express">
			<option value="Banglabandha Express">
			<option value="Barendra Express">
			<option value="Benapole Express">
			<option value="Bijoy Express">
			<option value="Brahmaputra Express">
			<option value="Chattala Express">
			<option value="Chitra Express">
			<option value="Dhalarchar Express">
			<option value="Dhumketu Express">
			<option value="Dolonchapa Express">
			<option value="Drutojan Express">
			<option value="Egarosindhur Godhuli">
			<option value="Egarosindhur Provati">
			<option value="Ekota Express">
			<option value="Haor Express">
			<option value="Jamalpur Express">
			<option value="Jamuna Express">
			<option value="Jayantika Express">
			<option value="Kalni Express">
			<option value="Kapotaksha Express">
			<option value="Karatoya Express">
			<option value="Kishoreganj Express">
			<option value="Kurigram Express">
			<option value="Lalmoni Express">
			<option value="Madhumati Express">
			<option value="Meghna Express">
			<option value="Mohanagar Express">
			<option value="Mohanagar Provati Godhuli Express">
			<option value="Mohanganj Express">
			<option value="Nilsagar Express">
			<option value="Padma Express">
			<option value="Paharika Express">
			<option value="Panchagarh Express">
			<option value="Parabat Express">
			<option value="Rangpur Express">
			<option value="Rupsha Express">
			<option value="Sagardari Express">
			<option value="Shonar Bangla Express">
			<option value="Silkcity Express">
			<option value="Simanta Express">
			<option value="Sirajganj Express">
			<option value="Suborno Express">
			<option value="Sundarban Express">
			<option value="Tista Express">
			<option value="Titumir Express">
			<option value="Tungipara Express">
			<option value="Turna Express">
			<option value="Udayan Express">
			<option value="Upaban Express">
			<option value="Upakul Express">
		</datalist>
		<p id="print"></p>
		</div>
	</div>
</body>
</html>




