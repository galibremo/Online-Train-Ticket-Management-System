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
<div class=container>
<form action="" method="POST">
	<div class="center">
<?php include "../Layout/Header.php";?>
</div>
<h4>LOG IN</h4>
	<p><small><?php echo $loginErr;?></small></p>
	
	<input type="text" id="input-field" name="uemail" value="<?php if(isset($_COOKIE['uemail'])){echo $_COOKIE['uemail'];}?>" size="25" placeholder="Enter Email"><br>

	<p><small><?php echo $mailErr;?></small></p>
	
	<input type="password" id="input-field" name="upass" value="<?php if(isset($_COOKIE['upass'])){echo $_COOKIE['upass'];}?>" size="25" placeholder="Enter Password"><br>

	<p><small><?php echo $passErr;?></small></p>
	<div>
	<small><input type="checkbox" name="remember" value="">Remember Me</small>
	<input type="submit" class="button" name="login" value="Log In">
	</div>

	<small><label>don't have an account?<a href="Registration.php">Sign Up</a></label></small>
</form>
</div>
</body>
</html>