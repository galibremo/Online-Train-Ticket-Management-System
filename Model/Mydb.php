<?php
class MyDB
{

	function openCon()
	{
		$conn = new mysqli("localhost","root","","registration");
		return $conn;
	}

	function insertData($tablename,$uname,$uemail,$uphone,$udob,$ugender,$unid,$des,$vote,$upass,$ucpass,$conn)
	{
		$stmt=$conn->prepare("INSERT INTO $tablename (userName,Email,PaymentNumber,DateOFBirth,Gender,Nid,Address,VendorType,Password,ConfirmPassword) VALUES (?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssss",$uname,$uemail,$uphone,$udob,$ugender,$unid,$des,$vote,$upass,$ucpass);
		$result=$stmt->execute();
		return $result;
	}
	function checkUser($tablename,$email,$password,$conn)
	{
		/*$stmt=$conn->prepare("SELECT * FROM $tablename WHERE Email=? AND Password=?");
		$stmt->bind_param("ss",$email,$password);
		$result=$stmt->execute();
		return $result;*/
		$sql="SELECT * FROM $tablename WHERE Email='$email' AND Password='$password'";
		$result=$conn->query($sql);
		return $result;
	}
	function getName($tablename,$email,$conn)
	{
		$sql="SELECT UserName FROM $tablename WHERE Email='$email'";
		$result=$conn->query($sql);
		$retived_name=mysqli_fetch_row($result);
		return $retived_name;
	}
	function getUserInfo($tablename,$email,$conn)
	{
		$sql="SELECT * FROM $tablename WHERE Email='$email'";
		$result=$conn->query($sql);
		return $result;
	}
	function updateInfo($tablename,$uname,$uemail,$uphone,$udob,$ugender,$unid,$des,$vote,$upass,$ucpass,$conn)
	{
		$sql="UPDATE $tablename SET UserName='$uname',PaymentNumber='$uphone',DateOfBirth='$udob',Gender='$ugender',Nid='$unid',Address='$des',VendorType='$vote',Password='$upass',ConfirmPassword='$ucpass' WHERE Email='$uemail'";
		$result=$conn->query($sql);
		return $result;	
	}
	function getAllUser($tablename,$conn)
	{
		$sql="SELECT * FROM $tablename";
		$result=$conn->query($sql);
		return $result;
	}
	
}


?>
