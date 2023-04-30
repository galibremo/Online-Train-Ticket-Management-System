<?php
class AddTrainRoute
{

	function openCon()
	{
		$conn = new mysqli("localhost","root","","registration");
		return $conn;
	}

	function insertData($tablename,$tcode,$from,$to,$conn)
	{
		$stmt=$conn->prepare("INSERT INTO $tablename (TrainCode,Start,End) VALUES (?,?,?)");
		$stmt->bind_param("sss",$tcode,$from,$to);
		$result=$stmt->execute();
		return $result;
	}
	function allRouteDetails($tablename,$conn)
	{
		$sql="SELECT * FROM $tablename";
		$result=$conn->query($sql);
		return $result;
	}
	function getRouteDetails($tablename,$tcode,$conn)
	{
		$sql="SELECT * FROM $tablename WHERE TrainCode='$tcode'";
		$result=$conn->query($sql);
		return $result;
	}
	function updateInfo($tablename,$tcode,$from,$to,$conn)
	{
		$sql="UPDATE $tablename SET Start='$from',End='$to' WHERE TrainCode='$tcode'";
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
