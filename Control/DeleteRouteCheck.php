<?php 
session_start();
if(empty($_SESSION['uname']))
{
	header("Location: ../View/Login.php");
}
include '../Model/Addtrainroutedb.php';

if(isset($_REQUEST['tcode']))
{

	$mydb= new AddTrainRoute();
	$conobj= $mydb->openCon();
	$result=$mydb->deleteInfo("addroute",$_REQUEST["tcode"],$conobj);
	if($result===TRUE)
	{
	    echo "Success";
	    header("Location: ../View/profile.php");

	}
	else
	{
	    echo "Error".$conobj->error;
	}	
}
