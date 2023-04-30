<?php 
include '../Control/DeleteRouteCheck.php'; 
   if(empty($_SESSION['uname']))
   {
   	header("Location: ../View/Login.php");
   }
   ?>
