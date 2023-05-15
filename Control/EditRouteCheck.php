<?php
session_start();
if(empty($_SESSION['uname']))
{
	header("Location: ../View/Login.php");
}
include '../Model/Addtrainroutedb.php';
$codeErr="";
$fromErr="";
$toErr="";
if(isset($_REQUEST['tcode']))
{
$mydb= new AddTrainRoute();
$conobj= $mydb->openCon();
$result=$mydb->getRouteDetails("addroute",$_REQUEST['tcode'],$conobj);
    if($result->num_rows >0)
    {
        while($row=$result->fetch_assoc())
        {
         $tcode=$row["TrainCode"];
         $from=$row["Start"];
         $to=$row["End"];
        }
    }
}
if(isset($_REQUEST['submit']))
{
	$hasError=0;
	$tcode=$_REQUEST['tcode'];
	$from=$_REQUEST['from'];
	$to=$_REQUEST['to'];
	if(empty($tcode))
	{
		$codeErr = "<html><font color='red'>Train Code Is Not Set</font></html>";
		$hasError=1;
	}
	if(empty($from))
	{
		$fromErr = "<html><font color='red'>From Field Is Not Set</font></html>";
		$hasError=1;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z-' ]*$/", $from))
		{
			$nameErr = "<html><font color='red'>Only letter and white space allowed</font></html>";
			$hasError=1;
		}
		
	}
	if(empty($to))
	{
		$toErr = "<html><font color='red'>To Field Is Not Set</font></html>";
		$hasError=1;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z-' ]*$/", $to))
		{
			$toErr = "<html><font color='red'>Only letter and white space allowed</font></html>";
			$hasError=1;
		}
	}
	if($hasError==0)
	{
		$mydb= new AddTrainRoute();
		$conobj= $mydb->openCon();
		$result=$mydb->updateInfo("addroute",$_REQUEST["tcode"],$_REQUEST["from"],$_REQUEST["to"],$conobj);
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
}