<?php
include ("../Model/Searchtraindb.php");

$name=$_REQUEST["name"];

$mydb= new searchTrain();
$conobj=$mydb->openCon();
$result=$mydb->searchAllTrain("traininfo", $name, $conobj);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
        $tc=$row["TrainNo"];
        $tn=$row["TrainName"];
        $r=$row["Route"];
        
        echo "Train No: " .$tc."<br>" ."Train Name: " .$tn."<br>"."Route: " .$r;
    }
}
else
{
    echo "no data found";
}


?>