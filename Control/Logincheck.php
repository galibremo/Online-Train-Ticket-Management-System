<?php
session_start();
include '../Model/Mydb.php';
if(!empty($_SESSION['uname']))
{
	header("Location: ../View/Profile.php");
}
$mailErr="";
$passErr="";
$loginErr="";
$email="";
$password="";
$name="";

if(isset($_REQUEST['login']))
{
	$email=$_REQUEST['uemail'];
	$password=$_REQUEST['upass'];

	$match=0;
	if($email=="")
	{
		$mailErr = "<html><font color='red'>Email is not set</font></html>";
	}/*
	else
	{
		$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
		if (!preg_match ($pattern, $email))
		{  
	    	$mailErr = "<html><font color='red'>Email is not valid</font></html>"; 
		}
	}*/
	elseif($password=="")
	{
		$passErr = "<html><font color='red'>password is not set</font></html>";
	}/*
	else
	{
		if($password!="") 
		{
			$uppercase = preg_match('@[A-Z]@', $password);
			$lowercase = preg_match('@[a-z]@', $password);
			$number    = preg_match('@[0-9]@', $password);
			$specialChars = preg_match('@[^\w]@', $password);

			if(strlen($password) < 8)
			{
				$passErr = "<html><font color='red'>password must contain 8 letters</font></html>";
			}
			elseif(!$uppercase) 
			{
				$passErr = "<html><font color='red'>password must include one uppercase letter</font></html>";
			}
			elseif(!$lowercase)
			{
				$passErr = "<html><font color='red'>password must include one lowercase letter</font></html>";
			}
			elseif(!$number)
			{
				$passErr = "<html><font color='red'>password must include one number</font></html>";
			}
			elseif(!$specialChars)
			{
				$passErr = "<html><font color='red'>password must include one specialChars letter</font></html>";
			}
			else
			{
				$loginErr = "<html><font color='red'>Email or password dosen't match</font></html>";	
			}
		}
	}*/	
	else
	{			
		if(isset($_POST['remember']))
		{
			setcookie("uemail",$email,time()+3600);
			setcookie("upass",$password,time()+3600);	
		}
		else
		{
			setcookie("uemail","");
			setcookie("upass","");	
		}
		$mydb= new MyDB();
		$conobj= $mydb->openCon();
		$result=$mydb->checkUser("reg",$_REQUEST['uemail'],$_REQUEST['upass'],$conobj);
		$name=$mydb->getName("reg",$_REQUEST['uemail'],$conobj);
		if($result->num_rows >0)
		{
			$_SESSION['uemail']=$_REQUEST['uemail'];
			$_SESSION['uname']=$name[0];
			header("Location: ../View/Profile.php");		
		}
		else
		{
			$loginErr = "<html><font color='red'>Email Password doesn't match</font></html>";
		}
		
	}
}

?>