<?php
include '../Model/Addtrainroutedb.php';
session_start();
if(empty($_SESSION['uname']))
{
	header("Location: ../View/Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="../Css/StyleRouteList.css">
</head>
<body>
<div class="container">
    <div id="div1">
    <a id="a-link1" href="AddRoute.php">Add Route</a> 
    </div>
        <table class="content-table">
        <thead>
        <tr>
        <td><b>Train Code</b></td>
        <td><b>From</b></td>
        <td><b>To</b></td>
        <td><b>Modify</b></td>
        </tr>
        </thead>
        <?php
            $mydb= new AddTrainRoute();
            $conobj= $mydb->openCon();
            $result=$mydb->allRouteDetails("addroute",$conobj);
            if($result->num_rows >0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>".$row["TrainCode"]."</td>";
                    echo "<td>".$row["Start"]."</td>";
                    echo "<td>".$row["End"]."</td>";
                    echo "<td>"."<a id='a-link1' href='EditRoute.php?tcode=".$row['TrainCode']."'>Edit</a> <a id='a-link2'href='DeleteRoute.php?tcode=".$row['TrainCode']."'>Delete</a>"."</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
            }?>
        </table>
</div>
</body>
</html>