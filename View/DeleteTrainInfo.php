<?php 
include '../Control/DeleteTrainInfoCheck.php'; 
   if(empty($_SESSION['uname']))
   {
   	header("Location: ../View/Login.php");
   }
   ?>
