<?php
include "../Control/Profilecheck.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="../Css/StyleVendorInfo.css">
</head>
<body>
	<div class="container">
		<h2>Vendor Info</h2>
		<div class=main-user-info>
			<div class=print-user-info>
				<label>Name:</label><br>
				<?php echo $name; ?>
			</div>

			<div class=print-user-info>
				<label>Email:</label><br>
				<?php echo $email; ?>
			</div>
			
			<div class=print-user-info>
				<label>Number:</label><br>
				<?php echo $number; ?>
			</div>

			<div class=print-user-info>
				<label>Date of Birth:</label><br>
				<?php echo $dob; ?>
			</div>

			<div class=print-user-info>
				<label>Gender:</label><br>
				<?php echo $gender; ?>
			</div>

			<div class=print-user-info>
				<label>Address:</label><br>
				<?php echo $address;?>
			</div>

			<div class=print-user-info>
				<label>vendor Type:</label><br>
				<?php echo $vendortype;?>
			</div>
			
			<div class=print-user-info>
				<label>Password:</label><br>
				<?php echo $password;?>
			</div>
			
			<div class=print-user-info>
				<label>Nid Card:</label><br>
				<br><img src="<?php echo $nid ?>" width="462" height="200">
			</div>

			<div class=print-user-info>
				<label>Confirm Password:</label><br>
				<?php echo $cpassword;?>
			</div>
			<div class="">
			<a href='EditProfileInfo.php?email=<?php echo $email;?>& nid=<?php echo $nid;?>'>Edit Profile</a>	
			</div>
		</div>
	</div>	
</body>
</html>