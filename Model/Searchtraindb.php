<?php
class searchTrain
{
	function openCon()
	{
		$conn = new mysqli("localhost","root","","registration");
		return $conn;
	}
	function searchAllTrain($tablename,$name,$conn)
	{
		$sql="SELECT * FROM $tablename WHERE TrainName='$name'";
		$result=$conn->query($sql);
		return $result;
	}
	function listAllTrain($tablename,$conn)
	{
		$sql="SELECT * FROM $tablename";
		$result=$conn->query($sql);
		return $result;
	}
	
}


?>
