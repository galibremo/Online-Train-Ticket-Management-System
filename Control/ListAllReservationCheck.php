<?php 
session_start();
if(empty($_SESSION['uname']))
{
	header("Location: ../View/Login.php");
}
	


?>