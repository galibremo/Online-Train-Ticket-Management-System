    <?php
include '../Model/Addtraindb.php';
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
    <link rel="stylesheet" type="text/css" href="../Css/StyleTrainList.css">
</head>
<body>
    <div class="container">
        <table class="content-table">
            <thead>    
                <tr>
                <td><b>Vendor Name</b></td>
                <td><b>Train Code</b></td>
                <td><b>Train Name</b></td>
                <td><b>First Class</b></td>
                <td><b>Economy Class</b></td>
                <td><b>Modify</b></td>
                </tr>
            </thead>
            <?php
                $mydb= new AddTrain();
                $conobj= $mydb->openCon();
                $result=$mydb->allAvailableTrainDetails("addtrain",$conobj);
                if($result->num_rows >0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>".$row["VendorName"]."</td>";
                        echo "<td>".$row["TrainCode"]."</td>";
                        echo "<td>".$row["TrainName"]."</td>";
                        echo "<td>".$row["FirstClass"]."</td>";
                        echo "<td>".$row["EcoClass"]."</td>";
                        echo "<td>"."<a id='a-link1' href='EditTrainList.php?tcode=".$row['TrainCode']."'>Edit</a> <a id='a-link2'href='DeleteTrainInfo.php?tcode=".$row['TrainCode']."'>Delete</a>"."</td>";
                        echo "</tr>";
                        echo "</tbody>";

                    }
                }?>
        </table>
    </div>   
</body>
</html>