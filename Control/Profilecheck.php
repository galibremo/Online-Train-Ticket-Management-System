<?php 
session_start();
include '../Model/Searchtraindb.php';
include '../Model/Addtrainroutedb.php';
include '../Model/Addtraindb.php';
include '../Model/Mydb.php';
$name=$email=$number=$dob=$gender=$nid=$address=$vendortype=$password=$cpassword="";
if(empty($_SESSION['uname']))
{
	header("Location: ../View/Login.php");
}
	$mydb= new MyDB();
	$conobj= $mydb->openCon();
	$result=$mydb->getUserInfo("reg",$_SESSION['uemail'],$conobj);
	if($result->num_rows >0)
	{
	    while($row=$result->fetch_assoc())
	    {
	    	$name=$row["UserName"];
	    	$email=$row["Email"];
	    	$number=$row["PaymentNumber"];
	    	$dob=$row["DateOfBirth"];
	    	$gender=$row["Gender"];
	    	$nid=$row["Nid"];
	    	$address=$row["Address"];
	    	$vendortype=$row["VendorType"];
	    	$password=$row["Password"];
	    	$cpassword=$row["ConfirmPassword"];
	    }
	}	
	/*
	$fileData=file_get_contents("../Data/jsondata.json");
	$phpObj=json_decode($fileData);
	foreach ($phpObj as $value) 
	{
		if($_SESSION['uname']==$value->name)
		{
			$name=$value->name;
			$email=$value->email;
			$number=$value->number;
			$dob=$value->dob;	
			$gender=$value->gender;
			$nid=$value->nid;
			$address=$value->address;
	        $vendortype=$value->vendorType;
			$password=$value->password;
			$cpassword=$value->cpassword;
		}
	}*/


?>