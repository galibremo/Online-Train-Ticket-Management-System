<?php 
include '../Control/EditTrainListCheck.php'; 
   if(empty($_SESSION['uname']))
   {
   	header("Location: ../View/Login.php");
   }
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="../Css/StyleEditTrain.css">
      
   </head>
<body>      
   <form>
      <h3>Update Train</h3>
      <div class="container">
         <div class="user-input-box">
            <label>Vendor Name</label>
            <input type="text" name="Vname" value="<?php echo $vname;?>" placeholder="Enter Vendor Name">
            <?php echo $vnameErr;?>
         </div>

         <div class="user-input-box">
            <label>Train</label>
            <input type="text" name="Tcode" value="<?php echo $tcode;?>" placeholder="Enter Train Name">
            <?php echo $codeErr?>
         </div>

         <div class="user-input-box">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name;?>" placeholder="Enter Train Name">
            <?php echo $nameErr;?>
         </div>

         <div class="user-input-box">
            <label>First Class Seat Capacity</label>
            <input type="number" name="Fclass" value="<?php echo $fclass;?>">
            <?php echo $fstErr;?>
         </div>

         <div class="user-input-box">
            <label>Economy Seat Capacity</label>
            <input type="number" name="Eclass" value="<?php echo $eclass;?>">
            <?php echo $ecoErr;?>
         </div>
         <input type="submit" class="button" name="update" value="Update">
      </div>
   </form>         
</body>
</html>