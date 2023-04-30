<?php 
include '../Control/EditProfileInfoCheck.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	<link rel="stylesheet" type="text/css" href="../Css/StyleReg.css">
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<div class=container>
	<div class=main-user-info>
        <div class=user-input-box>
			<label><b>Username:</b></label>
			<input type="text" name="uname" value="<?php echo $name;?>"size="30" >
			<?php echo $nameErr;?>
		</div>

		<div class=user-input-box>
			<label><b>Date of Birth:</b></label>
			<input type="date" name="udob" value="<?php echo $dob;?>" size="30">
			<?php echo $dobErr;?>
		</div>

		<div class=user-input-box>
			<label><b>Email:</b></label>
			<input type="email" name="uemail" value="<?php echo $_GET['email'];?>"size="30">
			<?php echo $mailErr;?>
		</div>

		<div class=user-input-box>
			<label><b>Number:</b></label>
			<input type="text" name="unum" value="<?php echo $number;?>" size="30">
			<?php echo $numErr;?>
		</div>

		<div class=user-input-box>
			<label><b>NID:</b></label>
			<input type="file" name="unid" value="<?php echo $nid;?>" size="30"> <img src="<?php echo $nid;?>" width="200" height="80">
			<?php echo $nidErr;?>
		</div>	

		<div class=user-input-box>
			<label><b>Address:</b></label>
			<textarea id="edit-textarea" name="des"><?php echo $address;?></textarea>
			<?php echo $addErr;?>
		</div>

		<div class=gender-input-box>
			<label><b>Gender:</b></label>
				<div class=category>
					<input type="radio" name="ugender" value="male" <?php if($gender=="male") echo "checked";?>/>Male
					<input type="radio" name="ugender" value="female" <?php if($gender=="female") echo "checked";?>/>Female
					<input type="radio" name="ugender" value="other" <?php if($gender=="other") echo "checked";?>/>Other
				</div>	
			<?php echo $genErr;?>
		</div>
	
		<div class=gender-input-box>
			<label><b>Vendor Type:</b></label>
			<div class=category>
				<input type="checkbox" name="vote[]" value="train" <?php if(in_array("train",$vendortype1)) echo "checked";?>/> TRAIN 
				<input type="checkbox" name="vote[]" value="bus" <?php if(in_array("bus",$vendortype1)) echo "checked";?>/> BUS 
				<input type="checkbox" name="vote[]" value="air" <?php if(in_array("air",$vendortype1)) echo "checked";?>/> AIR 
			</div>	
			<?php echo $venErr;?>
		</div>

		<div class=user-input-box>
			<label><b>Password:</b></label>
			<input type="password" name="upass" value="<?php echo $password;?>" size="30">
			<?php echo $passErr;?>
		</div>

		<div class=user-input-box>
			<label><b>Confirm Password:</b></label>
			<input type="password" name="ucpass" value="<?php echo $cpassword;?>" size="30">
			<?php echo $cpassErr;?>
		</div>

		<div class=label-bottom>
		<input type="submit" class="button" name="update" value="Update">
		</div>
</div>
</form>
</body>
</html>