<?php 
include '../Control/AddRouteCheck.php'; 
   if(empty($_SESSION['uname']))
   {
   	header("Location: ../View/Login.php");
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="../Css/StyleAddRoute.css">
   </head>
   <body>
      <form>
         <h3>Add Route</h3>
         <div class="container">
            <div class="user-input-box">
               <label>Train Code</label>
               <input type="text" name="tcode" value="">
               <?php echo $fromErr;?>
            </div>

            <div class="user-input-box">
               <label>From</label>
               <input type="text" name="from" value="">
               <?php echo $fromErr;?>
            </div>

            <div class="user-input-box">
               <label>To</label>
               <input type="text" name="to" value="">
               <?php echo $toErr;?>
            </div>
         
            <input type="submit" class="button" name="submit" value="Add Route">
         </div>
      </form>         
   </body>
</html>