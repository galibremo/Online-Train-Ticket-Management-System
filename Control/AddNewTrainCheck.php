<?php
session_start();
if(empty($_SESSION['uname']))
{
	header("Location: ../View/Login.php");
}
include '../Model/Addtraindb.php';
$vnameErr="";
$nameErr="";
$codeErr="";
$fstErr="";
$ecoErr="";
if(isset($_REQUEST['submit']))
{
	$hasError=0;
	$vname=$_REQUEST['Vname'];
	$tcode=$_REQUEST['Tcode'];
	$name=$_REQUEST['name'];
	$fclass=$_REQUEST['Fclass'];
	$eclass=$_REQUEST['Eclass'];
	if($vname=="")
	{
		$vnameErr = "<html><font color='red'>Vendor Name Is Not Set</font></html>";
		$hasError=1;
	}
	if(empty($tcode))
	{
		$codeErr = "<html><font color='red'>Train Code Is Not Set</font></html>";
		$hasError=1;
	}
	else
	{
		if(!preg_match('/^[0-9]+$/', $tcode)) 
		{
			$codeErr = "<html><font color='red'>Invalid Train Code</font></html>";
			$hasError=1;
		} 
	}
	if(empty($name))
	{
		$nameErr = "<html><font color='red'>Train Name Is Not Set</font></html>";
		$hasError=1;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
		{
			$nameErr = "<html><font color='red'>Only letter and white space allowed</font></html>";
			$hasError=1;
		}
		elseif(strlen($name)<=2 || strlen($name)>=25)
		{
			$nameErr = "<html><font color='red'>name must have charecter between 3-20</font></html>";
			$hasError=1;	
		}
		
	}
	if(empty($fclass))
	{
		$fstErr = "<html><font color='red'>First Class Field Is Empty</font></html>";
		$hasError=1;
	}
	else
	{
		if($fclass<0)
		{
			$fstErr = "<html><font color='red'>Can't be less than 0</font></html>";
			$hasError=1;			
		}
		
	}		
	if(empty($eclass))
	{
		$ecoErr = "<html><font color='red'>Economy Class Field Is Empty</font></html>";
		$hasError=1;
	}
	else
	{
		if($eclass<0)
		{
			$ecoErr = "<html><font color='red'>Can't be less than 0</font></html>";
			$hasError=1;		
		}
		
	}		
	if($hasError==0)
	{
		$mydb= new AddTrain();
		$conobj= $mydb->openCon();
		$result=$mydb->insertData("addtrain",$_REQUEST["Vname"],$_REQUEST["Tcode"],$_REQUEST["name"],
		$_REQUEST["Fclass"],$_REQUEST["Eclass"],$conobj);
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