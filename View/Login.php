<?php 
include "../Control/logincheck.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In Page</title>
	<link rel="stylesheet" type="text/css" href="../Css/Style.css">
</head>
<body>
<script src="../Js/MyScriptLogin.js"></script>
<div class=container>
<form action="" method="POST" onsubmit="return validation()">
	<div class="center">
<?php include "../Layout/Header.php";?>
</div>
<h4>LOG IN</h4>
	<?php echo $loginErr;?>
	
	<input type="text" id="uemail" class="input-field" name="uemail" value="<?php if(isset($_COOKIE['uemail'])){echo $_COOKIE['uemail'];}?>" size="25" placeholder="Enter Email"><br>
	<p id="uemailError"></p>
	<?php echo $mailErr;?>

	<input type="password" id="upass" class="input-field" name="upass" value="<?php if(isset($_COOKIE['upass'])){echo $_COOKIE['upass'];}?>" size="25" placeholder="Enter Password"><br>
	<p id="upassError"></p>
	<?php echo $passErr;?>

	<div>
	<small><input type="checkbox" name="remember" value=""><span>Remember Me</span></small>
	<input type="submit" class="button" name="login" value="Sign In">
	</div>

	<label>don't have an account?<a href="Registration.php">Sign Up</a></label>
</form>
</div>
</body>
</html>