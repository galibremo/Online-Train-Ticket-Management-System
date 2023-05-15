<?php
include "../Control/Profilecheck.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
	<link rel="stylesheet" type="text/css" href="../Css/StyleProfile.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body onload="getDate()">
	<script src="../Js/profilejquery.js"></script>
	<div id="wrapper-div">
		<div id="logo-div">
			<?php include "../Layout/Header.php";?>
		</div>
		<div id=main-nav> 
			<div id="side-nav">
				<button id="btn-date"></button>
			</div>
			<div id="nav-div">
				<nav>
				<a href="Home.php">Home</a> &nbsp | &nbsp
				<a id="js-div5" href="#Search.php">Search</a> &nbsp | &nbsp
				Welcome <?php echo $_SESSION['uname'];?>
				</nav>
			</div>
		</div>
		
		<div id="main-div" class=clearfix>
			<div id="sidebar-div">
				<a href="profile.php">Dashboard</a><br>
				<a id="js-div1" href="#Trainlist.php">Train List</a><br>
				<a id="js-div2" href="#Routelist.php">Train Route</a><br>
				<a id="js-div3" href="#AvailableTrainList.php">Available Train List</a><br>
				<a id="js-div4" href="#Vendorinfo.php">Vendor Information</a><br>
				<a href="Logout.php">Log Out</a><br>
			</div>

			<div id="bodyarea-div">
				<h3>Quick Tips</h3>
				<p id="tips">
					Use the links at the left.<br>You can see list of Train by clicking on "Train List". The system will display list of available train for you which you can view and make changes.<br>By clicking on "Train Route" You can see list of routes. The system will display list of available train route for you which you can view and make changes.<br>You can see list of All available train listed by diffrent vender by clicking on "Availble Train List". The system will display list of all available train list for you which you can view and make changes.<br>Also you can change your information by clicking on "vendor info" 
				</p>
				<div class="info-box-bg-primary">
					<div class="info-box-content">
			            <span class="info-box-text">My Train List</span>
			            <span class="info-box-number">
			            <?php 
			            $mydb= new AddTrain();
						$conobj= $mydb->openCon();
						$result=$mydb->allTrainDetails("addtrain",$_SESSION['uname'],$conobj);	
			            echo $result->num_rows;
			        	?>
			        	</span>
			            <div class="progress">
			                <div id="progress-bar1"></div>
			            </div>
			        </div>
			        <div class="info-box-content">
			            <span class="info-box-text">Train Route</span>
			            <span class="info-box-number">
			            <?php 
			            $mydb= new AddTrainRoute;
						$conobj= $mydb->openCon();
						$result=$mydb->allRouteDetails("addroute",$conobj);	
			            echo $result->num_rows;
			        	?>
			            </span>
			            <div class="progress">
			                <div id="progress-bar2"></div>
			            </div>
			        </div>
			        <div class="info-box-content">
			            <span class="info-box-text">Vendor Train List</span>
			            <span class="info-box-number">
			            <?php 
			            $mydb= new AddTrain();
						$conobj= $mydb->openCon();
						$result=$mydb->allAvailableTrainDetails("addtrain",$conobj);	
			            echo $result->num_rows;
			        	?>
			        	</span>
			            <div class="progress">
			                <div id="progress-bar3"></div>
			            </div>
			        </div>
			        <div class="info-box-content">
			            <span class="info-box-text">Number of Vendor</span>
			            <span class="info-box-number">
			            <?php 
			            $mydb= new MyDB();
						$conobj= $mydb->openCon();
						$result=$mydb->getAllUser("reg",$conobj);
			            echo $result->num_rows;
			        	?>
			        	</span>
			            <div class="progress">
			                <div id="progress-bar4"></div>
			            </div>
			        </div>
			        <div class="info-box-content">
			            <span class="info-box-text">All Available Train</span>
			            <span class="info-box-number">
			            <?php 
			            $mydb= new searchTrain();
						$conobj= $mydb->openCon();
						$result=$mydb->listAllTrain("traininfo",$conobj);
			            echo $result->num_rows;
			        	?>
			        	</span>
			            <div class="progress">
			                <div id="progress-bar5"></div>
			            </div>
			        </div>

			    </div>
			</div>
		</div>

		<div id="footer-div">
			<?php include "../Layout/Footer.php";?>
		</div>
	</div>
</body>

</html>
