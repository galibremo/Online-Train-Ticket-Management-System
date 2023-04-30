<?php
class AddTrain
{

	function openCon()
	{
		$conn = new mysqli("localhost","root","","registration");
		return $conn;
	}

	function insertData($tablename,$vendorname,$tcode,$name,$fclass,$eclass,$conn)
	{
		$stmt=$conn->prepare("INSERT INTO $tablename (VendorName,TrainCode,TrainName,FirstClass,EcoClass) VALUES (?,?,?,?,?)");
		$stmt->bind_param("sssii",$vendorname,$tcode,$name,$fclass,$eclass);
		$result=$stmt->execute();
		return $result;
	}
	function allTrainDetails($tablename,$name,$conn)
	{
		$sql="SELECT * FROM $tablename WHERE VendorName='$name'";
		$result=$conn->query($sql);
		return $result;
	}
	function getTrainDetails($tablename,$tcode,$conn)
	{
		$sql="SELECT * FROM $tablename WHERE TrainCode='$tcode'";
		$result=$conn->query($sql);
		return $result;
	}
	function allAvailableTrainDetails($tablename,$conn)
	{
		$sql="SELECT * FROM $tablename";
		$result=$conn->query($sql);
		return $result;
	}
	function updateInfo($tablename,$vendorname,$tcode,$name,$fclass,$eclass,$conn)
	{
		$sql="UPDATE $tablename SET VendorName='$vendorname',TrainName='$name',FirstClass='$fclass',EcoClass='$eclass' WHERE TrainCode='$tcode'";
		$result=$conn->query($sql);
		return $result;	
	}	
	function deleteInfo($tablename,$tcode,$conn)
	{
		$sql="DELETE FROM $tablename WHERE TrainCode='$tcode'";
		$result=$conn->query($sql);
		return $result;	
	}	
}


?>
