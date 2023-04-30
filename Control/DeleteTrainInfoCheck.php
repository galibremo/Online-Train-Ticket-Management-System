<?php 
session_start();
if(empty($_SESSION['uname']))
{
	header("Location: ../View/Login.php");
}
include '../Model/Addtraindb.php';

if(isset($_REQUEST['tcode']))
{

	$mydb= new AddTrain();
	$conobj= $mydb->openCon();
	$result=$mydb->deleteInfo("addtrain",$_REQUEST["tcode"],$conobj);
	if($result===TRUE)
	{
	    echo "Success";
	    header("Location: ../View/Trainlist.php");

	}
	else
	{
	    echo "Error".$conobj->error;
	}	
}
