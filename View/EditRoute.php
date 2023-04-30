<?php 
include '../Control/EditRouteCheck.php'; 
   if(empty($_SESSION['uname']))
   {
   	header("Location: ../View/Login.php");
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="../Css/StyleEditRoute.css">
   </head>
   <body>
      <form>
            <h3>Edit Route</h3>
            <div class="container">
               <div class="user-input-box">
               <label>Train Code</label>
               <input type="text" name="tcode" value="<?php echo $tcode;?>">
               <?php echo $fromErr;?>
               </div>

               <div class="user-input-box">
               <label>From</label>
               <input type="text" name="from" value="<?php echo $from;?>">
               <?php echo $fromErr;?>
               </div>

               <div class="user-input-box">
               <label>To</label>
               <input type="text" name="to" value="<?php echo $to;?>">
               <?php echo $toErr;?>
               </div>

               <input type="submit" class="button" name="submit" value="Edit Route">
            </div>
      </form>
   </body>
</html>