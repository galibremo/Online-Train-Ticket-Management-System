<?php 
session_start();
if(empty($_SESSION['uname']))
{
	header("Location: ../View/Login.php");
}
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
$mydb= new MyDB();
		$conobj= $mydb->openCon();
		$result=$mydb->getUserInfo("reg",$_GET['email'],$conobj);
		//$fatch=mysqli_fetch_array($result);
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
			$vendortype1=explode(",", $vendortype);
			$password=$row["Password"];
			$cpassword=$row["ConfirmPassword"];
		}
		}
if(isset($_REQUEST['update']))
{
	$name=$_REQUEST['uname'];
	$email=$_REQUEST['uemail'];
	$number=$_REQUEST['unum'];
	$dob=$_REQUEST['udob'];	
	$nid=$_FILES['unid']['tmp_name'];
	$password=$_REQUEST['upass'];
	$cpassword=$_REQUEST['ucpass'];
	$UmailErr=0;
	$UnumErr=0;
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
		$numErr = "<html><font color='red'>Payment Number is not set</font></html>";
		$hasError=1;
	}
	else
	{
		  
		if(!preg_match('/^[0-9]{11}+$/', $number)) 
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

	if(!empty($nid))
	{
		if($FileType != "jpg" && $FileType != "png")
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
		}
		else if($password!=$cpassword)
		{
			$cpassErr = "<html><font color='red'>Password and Confirm password dosen't match</font></html>";
			$hasError=1;
		}*/
	}
	else
	{
		$passErr = "<html><font color='red'>password or confirm is not set</font></html>";
		$hasError=1;
	}
	if($hasError==0)
	{
		$mydb= new MyDB();
		$conobj= $mydb->openCon();
		if(empty($nid))
		{
			$result=$mydb->updateInfo("reg",$_REQUEST["uname"],$_REQUEST['uemail'],
			$_REQUEST["unum"],$_REQUEST["udob"],$_REQUEST["ugender"],"../Upload/".$_GET['nid'],
			$_REQUEST['des'],implode(",", $_REQUEST['vote']),$_REQUEST['upass'],$_REQUEST['ucpass'],$conobj);
			
		}
		else
		{
			$result=$mydb->updateInfo("reg",$_REQUEST["uname"],$_REQUEST['uemail'],
			$_REQUEST["unum"],$_REQUEST["udob"],$_REQUEST["ugender"],"../Upload/".$_FILES['unid']['name'],
			$_REQUEST['des'],implode(",", $_REQUEST['vote']),$_REQUEST['upass'],$_REQUEST['ucpass'],$conobj);
			
		}
		$result=$mydb->getUserInfo("reg",$_GET['email'],$conobj);
		if($result->num_rows >0)
		{
			while($row=$result->fetch_assoc())
			{
				$nid=$row["Nid"];
			}
		}

		if($result==TRUE)
		{
		    header("Location: ../View/Profile.php");
		}
		else
		{
		    echo "Error".$conobj->error;
		}

	}


}

?>
