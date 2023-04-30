<?php
include '../Model/Mydb.php';
$nameErr="" ;
$mailErr="" ;
$numErr="" ;
$dobErr="" ;
$genErr="" ;
$nidErr="" ;
$addErr="" ;
$venErr="" ;
$passErr="";
$cpassErr="";
if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['uname'];
	$email=$_REQUEST['uemail'];
	$number=$_REQUEST['utell'];
	$dob=$_REQUEST['udob'];	
	$nid=$_FILES['unid']['tmp_name'];
	$password=$_REQUEST['upass'];
	$cpassword=$_REQUEST['ucpass'];
	$hasError=0;
	$target_dir = "../upload/";
	$target_file = $target_dir . basename($_FILES["unid"]["name"]);
	$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if(empty($name))
	{
		$nameErr = "<html><font color='red'>Username is not set</font></html>";
		$hasError=1;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
		{
			$nameErr = "<html><font color='red'>Only letter and white space allowed</font></html>";
			$hasError=1;
		}
		elseif(strlen($name)<=2 || strlen($name)>=16)
		{
			$nameErr = "<html><font color='red'>name must have charecter between 3-10</font></html>";
			$hasError=1;	
		}
		
	}

	if($email=="")
	{
		$mailErr = "<html><font color='red'>Email is not set</font></html>";
		$hasError=1;
	}
	else
	{
		$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
		if (!preg_match ($pattern, $email))
		{  
	    	$mailErr = "<html><font color='red'>Email is not valid</font></html>";  
	    	$hasError=1;
		}
	}

	if($number=="")
	{
		$numErr = "<html><font color='red'>Number is not set</font></html>";
		$hasError=1;
	}
	else
	{
		  
		if(!preg_match("/^[0-9]{11}+$/", $number)) 
		{
			$numErr = "<html><font color='red'>Invalid Phone Number</font></html>";
			$hasError=1;
		} 
	}

	if(empty($dob))
	{
		$dobErr = "<html><font color='red'>Date of birth is not set</font></html>";
		$hasError=1;
	}
	/*else
	{
		$bday = new DateTime($dob);
		$today = new DateTime(date('m.d.y'));
		$minInterval = DateInterval::createFromDateString('18 years');
		$minDobLimit = ( new DateTime() )->sub($minInterval);
		if($bday>$today)
		{
			$dobErr = "<html><font color='red'>Invalid Date of birth</font></html>";
			$hasError=1;
		}
		elseif($bday>=$minDobLimit)
		{
			$dobErr = "<html><font color='red'>age must be 18 years to use the server</font></html>";
			$hasError=1;
		}	
	}*/

	if(!isset($_REQUEST['ugender']))
	{
		$genErr = "<html><font color='red'>Gender is not set</font></html>";
		$hasError=1;
	}

	if(empty($nid))
	{
		$nidErr = "<html><font color='red'>NID is not set</font></html>";
		$hasError=1;
	}
	elseif($FileType != "jpg" && $FileType != "png")
	{
		$nidErr= "<html><font color='red'>only JPG & PNG files are allowed</font></html>";
		$hasError=1;
	}
	elseif ($_FILES["unid"]["size"] > 5000000) 
	{
  		$nidErr= "<html><font color='red'>File too large</font></html>";
  		$hasError=1;
	}
	else
	{
		$file="../upload/".$_FILES['unid']['name'];
		move_uploaded_file($_FILES['unid']['tmp_name'],$file);
	}

	if($_REQUEST['des']=="")
	{
		$addErr = "<html><font color='red'>Address is not set</font></html>";
		$hasError=1;
	}
	
	if(empty($_REQUEST['vote']))
	{
	    $venErr = "<html><font color='red'>Vendor type is not set</font></html>";
	    $hasError=1;
	}
	if(empty($password) || empty($cpassword))
	{
		$passErr = "<html><font color='red'>password is not set</font></html>";
		$cpassErr = "<html><font color='red'>Confirm password is not set</font></html>";
		$hasError=1;

	}
	if($password!="") 
	{
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number    = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);

		if(strlen($password) < 8)
		{
			$passErr = "<html><font color='red'>password must contain 8 letters</font></html>";
			$hasError=1;
		}
		/*elseif(!$uppercase) 
		{
			$passErr = "<html><font color='red'>password must include one uppercase letter</font></html>";
			$hasError=1;
		}
		elseif(!$lowercase)
		{
			$passErr = "<html><font color='red'>password must include one lowercase letter</font></html>";
			$hasError=1;
		}
		elseif(!$number)
		{
			$passErr = "<html><font color='red'>password must include one number</font></html>";
			$hasError=1;
		}
		elseif(!$specialChars)
		{
			$passErr = "<html><font color='red'>password must include one specialChars letter</font></html>";
			$hasError=1;
		}*/
		else if($password!=$cpassword)
		{
			$cpassErr = "<html><font color='red'>Password and Confirm password dosen't match</font></html>";
			$hasError=1;
		}	
	}
	
	if($hasError==0)
	{
		$mydb= new MyDB();
		$conobj= $mydb->openCon();
		$result=$mydb->insertData("reg",$_REQUEST["uname"],$_REQUEST["uemail"],
		$_REQUEST["utell"],$_REQUEST["udob"],$_REQUEST["ugender"],"../Upload/".$_FILES['unid']['name'],
		$_REQUEST['des'],implode(",", $_REQUEST['vote']),$_REQUEST['upass'],$_REQUEST['ucpass'],$conobj);
		if($result===TRUE)
		{
		    header("Location: ../View/Login.php");
		}
		else
		{
		    echo "Error".$conobj->error;
		}

	}


}

?>