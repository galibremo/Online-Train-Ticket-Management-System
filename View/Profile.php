<?php
include "../Control/Profilecheck.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
	<link rel="stylesheet" type="text/css" href="../Css/StyleProfile.css">
</head>
<body>
	<div id="wrapper-div">
		<div id="logo-div">
			<?php include "../Layout/Header.php";?>
		</div>

		<div id="nav-div">
			<nav>
			<a href="Home.php">Home</a> &nbsp | &nbsp
			Welcome <?php echo $_SESSION['uname'];?>
			</nav>
		</div>

		<div id="head-div">
			<div id="menu-div">
				MENU
			</div>
			<div id="dsb-div">
				DASHBOARD
			</div>
		</div>

		<div id="main-div" class=clearfix>
			<div id="sidebar-div">
				<a href="Trainlist.php">Train List</a><br>
				<a href="Routelist.php">Train Route</a><br>
				<a href="AvailableTrainList.php">Available Train List</a><br>
				<a href="Vendorinfo.php">Vendor Information</a><br>
				<a href="Logout.php">Log Out</a><br>
			</div>

			<div id="bodyarea-div">
				

			
			</div>
		</div>

		<div id="footer-div">
			<?php include "../Layout/Footer.php";?>
		</div>
	</div>
</body>

</html>
